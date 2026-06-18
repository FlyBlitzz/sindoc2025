<?php

namespace App\Service;

use App\Entity\Fiche;
use App\Repository\SavRequeteRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;

class SearchService extends ServiceEntityRepository
{
    private $logicalParser;
    private SavRequeteRepository $savRequeteRepository;
    public function __construct(ManagerRegistry $registry, SavRequeteRepository $savRequeteRepository_)
    {
        parent::__construct($registry, Fiche::class);
        $this->savRequeteRepository = $savRequeteRepository_;
    }

    // Convertir la requete DQL en SQL pour la recherche multi critere 
    public function convertDQLQueryToSQL(Query &$query): string
    {
        // Convertir la requete DQL en une requete SQL
        $rawSql = $query->getSQL();
        $parameters = $query->getParameters();

        $parameterValues = [];
        // Prepare the parameter values
        foreach ($parameters as $index => $parameter) {
            $parameterValues[$index + 1] = $parameter->getValue();
        }
        // Replace the `?` placeholders in the SQL
        foreach ($parameterValues as $index => $value) {
            if (is_string($value)) {
                $value = $this->getEntityManager()->getConnection()->quote($value);
            }
            // Replace the `?` placeholder with the actual value
            $rawSql = preg_replace('/\?/', $value, $rawSql, 1);
        }
        return $rawSql;
    }
    //Construire la requete finale pour la recherche multi critere
    public function buildMultiCritSearchQuery(&$userQuery)
    {
        $queries = array();
        $queries = $this->buildMultiCritSearchQueryList($userQuery);
        $fullUserQuery = $this->tokenize($userQuery, true);
        // Build the logical expression dynamically
        $finalQuerySql = "";
        $queryIndex = 0;
    //    dd($fullUserQuery);
        foreach ($fullUserQuery as $token) {
            if ($token === 'ET') {
                // Use INTERSECT to combine the last two queries
                $finalQuerySql .= " INTERSECT ";
            } elseif ($token === 'OU') {
                // Use UNION to combine the last two queries
                $finalQuerySql .= " UNION ";

            } elseif($token ===  'NOT'){
                continue;
            } else {
                // Append the query part (subquery) to the final SQL
                $finalQuerySql .= $queries[$queryIndex++];
            }
        }
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('App\Entity\Fiche', 'f0_');
        $rsm->addFieldResult('f0_', 'id_0', 'id');
        $rsm->addFieldResult('f0_', 'refer_1', 'refer');
        $rsm->addFieldResult('f0_', 'refer_bis_2', 'refer_bis');
        $rsm->addFieldResult('f0_', 'denomination_3', 'denomination');
        $rsm->addFieldResult('f0_', 'texte_4', 'texte');
        $rsm->addFieldResult('f0_', 'traduction_5', 'traduction');
        $rsm->addFieldResult('f0_', 'notes_6', 'notes');
        $rsm->addFieldResult('f0_', 'edition_7', 'edition');
        $rsm->addFieldResult('f0_', 'commentaire_8', 'commentaire');
        $rsm->addFieldResult('f0_', 'num_fiche_9', 'num_fiche');
        $rsm->addFieldResult('f0_', 'visible_10', 'visible');
        $rsm->addJoinedEntityResult('App\Entity\Statut', 's', 'f0_', 'statut');
        $rsm->addFieldResult('s', 'statut_id_11', 'id');
        $rsm->addFieldResult('s', 'denomination', 'denomination');
        // Define mapping for the joined `Livre` entity
        $rsm->addJoinedEntityResult('App\Entity\Livre', 'l', 'f0_', 'livre');
        $rsm->addFieldResult('l', 'livre_id_12', 'id');
        $rsm->addFieldResult('l', 'nom', 'nom');
        // Define mapping for the joined `User` entity
        $rsm->addJoinedEntityResult('App\Entity\User', 'u', 'f0_', 'user');
        $rsm->addFieldResult('u', 'user_id_13', 'id');

        // Native SQL 
        $query = $this->getEntityManager()->createNativeQuery(
            "SELECT f0_.*, l.nom, s.denomination FROM ($finalQuerySql) as f0_ LEFT JOIN livre l ON f0_.livre_id_12 = l.id LEFT JOIN statut s ON f0_.statut_id_11 = s.id LEFT JOIN \"user\" u ON f0_.user_id_13 = u.id",
            $rsm
        );
        // dd($query);
        return $query;
    }
    public function getNotOperand($expression)
    {
        // Check if 'NOT' is in the string
        if (strpos($expression, 'NOT') !== false) {
            // Split the string into words
            $tokens = explode(' ', $expression);

            // Find the position of 'NOT'
            $notPos = array_search('NOT', $tokens);

            // If 'NOT' is found and it's not the last word
            if ($notPos !== false && isset($tokens[$notPos + 1])) {
                // Return the operand after 'NOT'
                return $tokens[$notPos + 1];
            }
        }

        // Return null if 'NOT' is not found or there's no operand
        return null;
    }
    //Construire une liste de toutes les requetes de la recherche multi criteres
    public function buildMultiCritSearchQueryList($userQuery)
    {
        $requestLiterals = $this->tokenizeForMultiSearch($userQuery,false);
        $queries = array();
        // dd($requestLiterals);
        foreach ($requestLiterals as $requeteName) {
            // requete courante 
            if($requestLiterals === "")
            {
                // dd($requeteName);
                continue;
            }
            if (str_contains($requeteName, "NOT")) {
                // dd($requeteName);
                $notOperand = explode(" ", $requeteName);
                // dd($notOperand);
                $currentQuery = $this->savRequeteRepository->findOneBy(['nom_requete' => $notOperand[1]]);
                //parametres de la requetes 
                $savedParameters = json_decode($currentQuery->getRequeteParams(), true);
                $query = $this->getEntityManager()->createQuery($currentQuery->getRequete());
                foreach ($savedParameters as $name => $value) {
                    $query->setParameter($name, $value);
                }
                // dd($query);
                $rawSql = $this->convertDQLQueryToSQL($query);
              
                if (str_contains($rawSql, 'WHERE') ) {
                    // Split the query on the WHERE clause
                    $queryParts = explode('WHERE', $rawSql, 2);
                    // Modify the query to include "NOT EXISTS" with a valid subquery (SELECT 1)
                    $rawSql = $queryParts[0] . 'WHERE NOT (' . $queryParts[1] . ')'; 
                }
               
                $queries[] = '(' . $rawSql . ')';
            } else {
                // dd($requeteName);
                $currentQuery = $this->savRequeteRepository->findOneBy(['nom_requete' => $requeteName]);

                //parametres de la requetes 
                $savedParameters = json_decode($currentQuery->getRequeteParams(), true);
                $query = $this->getEntityManager()->createQuery($currentQuery->getRequete());
                // dd($savedParameters);
                foreach ($savedParameters as $name => $value) {
                    $query->setParameter($name, $value);
                }
                $rawSql = $this->convertDQLQueryToSQL($query);
                // Add the modified query SQL to the query parts array
                $queries[] = '(' . $rawSql . ')';
            }
        }
        // dd($queries);
        return $queries;
    }
    public function tokenizeForMultiSearch(&$expression, bool $keepOperators = false)
{
    // Matches words, numbers, and phrases while splitting at "ET", "OU", "NOT"
    // $pattern = '/\b(ET|OU|NOT)\b/u';
    // $tokens = preg_split($pattern, $expression, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
    // $pattern = '/(?:NOT\s+\w+|\w+|\d+)/';
    $pattern = '/(?:NOT\s+[\w-]+|[\w-]+)/';

        preg_match_all($pattern, $expression, $matches);

    $result = [];
    $tokens = $matches[0];
        $result = [];
        $excludedKeywords = ['ET', 'OU'];


    $i = 0;
    while ($i < count($tokens)) {
        $token = trim($tokens[$i]);

        // Handle "NOT" followed by an operand, combine them into an array
        if (strtoupper($token) === 'NOT' && isset($tokens[$i + 1])) {
            $operand = trim($tokens[$i + 1]);  
            $result[] = ['NOT', $operand];  
            $i += 2;
        } elseif (!in_array(strtoupper($token), $excludedKeywords) || $keepOperators) {
            // If keepOperators is true, retain "ET", "OU", "NOT"
            $result[] = $token;
            $i++;
        } else {
            $i++; // Skip excluded keywords when keepOperators is false
        }
    }
    return $result;
}
    // Tokenize the input string
    public function tokenize($expression)
    {
        // Match fields, operators, values, and parentheses
        $pattern = '/([\w-]+|\d+|ET|OU|NOT|\(|\))/';

        preg_match_all($pattern, $expression, $matches);
        // dd($matches[0]);
        return array_filter($matches[0], fn($token) => !empty(trim($token)));
    }

    // Parse the tokenized expression into an Abstract Syntax Tree (AST)
    public function parse($tokens)
    {
        $tokens = array_values($tokens);
        //  dd($this->parseExpression($tokens));
        return $this->parseExpression($tokens);
    }

    // Recursively parse the expression considering precedence
    public function parseExpression(&$tokens)
    {
        // Check for NOT at the start of the expression
        if (count($tokens) > 0 && strtoupper($tokens[0]) === 'NOT') {
            array_shift($tokens); // Remove "NOT"

            // Parse the following expression after "NOT"
            $node = $this->parseParentheses($tokens);

            // Wrap the node in a NOT operation
            $node = new OperatorNode('NOT', $node);
        } else {
            // If no NOT, parse parentheses or atomic values first
            $node = $this->parseParentheses($tokens);
        }

        // Apply AND (ET)
        $node = $this->parseAnd($tokens, $node);

        // Apply OR (OU)
        return $this->parseOr($tokens, $node);
    }
    // Parse expressions inside parentheses
    public function parseParentheses(&$tokens)
    {
        if (count($tokens) === 0) {
            return null;
        }
        // If the token is an opening parenthesis, we must parse the expression inside
        if ($tokens[0] === '(') {
            array_shift($tokens); // Remove '('

            // Recursively parse the expression inside parentheses
            $node = $this->parseExpression($tokens);
            if (array_shift($tokens) !== ')' && $node !== null) {
                throw new \Exception("Mismatched parentheses");
            }

            return $node;
        }

        // If no parentheses, parse as a normal atomic expression
        return $this->parseAtomic($tokens);
    }

    // Parse NOT expressions
    public function parseNot(&$tokens, $node)
    {
        // Check if the first token is "NOT"
        if (count($tokens) > 0 && strtoupper($tokens[0]) === 'NOT') {
            array_shift($tokens); // Remove the "NOT" token

            // Look ahead to see if the next token is an opening parenthesis (indicating a complex expression)
            if (count($tokens) > 0 && $tokens[0] === '(') {
                // Parse the entire expression inside the parentheses
                $node = $this->parseExpression($tokens);

                // Return an OperatorNode with the "NOT" operation applied to the sub-expression
                return new OperatorNode('NOT', $node);
            }

            // If the next token is not a parenthesis, treat the next token as a field or value
            if (count($tokens) > 0) {
                $token = array_shift($tokens); // Get the next token (e.g., 110a or some other field)

                // Return a Node that represents a negated field or value
                return new OperatorNode('NOT', new FieldNode($token));
            }
        }

        // If no "NOT", return the current node
        return $node;
    }


    // Parse AND expressions (ET)
    public function parseAnd(&$tokens, $node)
    {
        if ($node === null) {
            if (count($tokens) > 0 && $tokens[0] === '(') {
                $node = $this->parseParentheses($tokens);
            } elseif (count($tokens) > 0 && $tokens[0] === 'NOT') {
                $node = $this->parseNot($tokens, $node);
            } else {
                $node = $this->parseAtomic($tokens);
            }
        }
        while (count($tokens) > 0 && strtoupper($tokens[0]) === 'ET') {
            array_shift($tokens); // Remove the "ET" token

            // Check if the next token is a parenthesis
            if (count($tokens) > 0 && $tokens[0] === '(') {
                // Parse the expression within the parentheses
                $rightNode = $this->parseParentheses($tokens);
            } else if (count($tokens) > 0 && $tokens[0] === 'NOT') {
                // Parse the expression within the parentheses
                $rightNode = $this->parseNot($tokens, $node);
            } else {
                // Parse as an atomic expression
                $rightNode = $this->parseAtomic($tokens);
            }

            $node = new OperatorNode('ET', $node, $rightNode);
        }
        return $node;
    }

    // Parse OR expressions (OU)
    public function parseOr(&$tokens, $node)
    {
        // If $node is null, initialize it with the first parsed token
        if ($node === null) {
            if (count($tokens) > 0 && $tokens[0] === '(') {
                $node = $this->parseParentheses($tokens);
            } elseif (count($tokens) > 0 && $tokens[0] === 'NOT') {
                $node = $this->parseNot($tokens, $node);
            } else {
                $node = $this->parseAtomic($tokens);
            }
        }
        while (count($tokens) > 0 && strtoupper($tokens[0]) === 'OU') {
            array_shift($tokens); // Remove the "OU" token

            // Check if the next token is a parenthesis
            if (count($tokens) > 0 && $tokens[0] === '(') {
                // Parse the expression within the parentheses
                $rightNode = $this->parseParentheses($tokens);
            } else if (count($tokens) > 0 && $tokens[0] === 'NOT') {
                // Parse the expression within the parentheses
                $rightNode = $this->parseNot($tokens, $node);
            } else {
                // Parse as an atomic expression
                $rightNode = $this->parseAtomic($tokens);
            }

            $node = new OperatorNode('OU', $node, $rightNode);
        }
        // dd($node);
        return $node;
    }

    public function parseAtomic(&$tokens)
    {
        if (count($tokens) === 0) {
            throw new \Exception("Unexpected end of expression");
        }

        $token = array_shift($tokens);
        $field = $token;
        return new FieldNode($field); // Default to field node if no comparison operator
    }

    // Convert the AST into a Doctrine QueryBuilder query
    public function buildQuery(&$queryBuilder, $ast)
    {
        $expression = $this->applyNodeToQuery($queryBuilder, $ast); // Build the expression tree
        // $queryBuilder->andWhere('f.livre = 1');
        $queryBuilder->Andwhere($expression); // Set the complete expression as the where condition
        // dd($queryBuilder->getQuery());
        return $queryBuilder;
    }

    public function applyNodeToQuery(&$queryBuilder, $node)
    {
        $expr = $queryBuilder->expr(); // Get the expression builder

        if ($node instanceof FieldNode) {
            $subQueryAlias = 'fm_' . $node->field . uniqid();       // Unique alias for subquery
            $motCleAlias = 'mc_' . $node->field . uniqid();         // Unique alias for motCle join
            $parameterName = 'motCle' . uniqid();        // Unique parameter name for each reference
            // Create a subquery to check for a specific motCle reference
            $subQuery = $this->getEntityManager()->createQueryBuilder()
                ->select('1')
                ->from('App\Entity\FicheMotCle', $subQueryAlias)  // Subquery on FicheMotCle
                ->innerJoin("$subQueryAlias.motCle", $motCleAlias) // Join motCle with unique alias
                ->andWhere("$subQueryAlias.fiche = f.id")           // Link with main Fiche entity
                ->andWhere("$motCleAlias.reference = '" . $node->field . "'");
            // ->setParameter($parameterName, $node->field);       // Set the reference parameter

            // Generate EXISTS expression with the subquery DQL
            return $expr->exists($subQuery->getDQL());
        } elseif ($node instanceof OperatorNode) {
            // Handle operators (AND, OR, NOT) with recursive expressions
            if ($node->operator === 'ET') {
                return $expr->andX(
                    $this->applyNodeToQuery($queryBuilder, $node->left),
                    $this->applyNodeToQuery($queryBuilder, $node->right)
                );
            } elseif ($node->operator === 'OU') {
                return $expr->orX(
                    $this->applyNodeToQuery($queryBuilder, $node->left),
                    $this->applyNodeToQuery($queryBuilder, $node->right)
                );
            } elseif ($node->operator === 'NOT') {
                // Handle NOT operator (negation of an existing expression)
                $leftExpr = $this->applyNodeToQuery($queryBuilder, $node->left);
                return $expr->not($leftExpr);  // Correct negation handling using notX
            }
        }
        // Handle unexpected node type
        throw new \Exception("Unknown node type: " . get_class($node));
    }
}

// Define the AST node classes
class FieldNode
{
    public $field;

    public function __construct($field)
    {
        $this->field = $field;
    }
}

class OperatorNode
{
    public $operator;
    public $left;
    public $right;

    public function __construct($operator, $left, $right = null)
    {
        $this->operator = $operator;
        $this->left = $left;
        $this->right = $right;
    }
}
