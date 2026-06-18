<?php

use App\Repository\SavRequeteRepository;
use App\Service\FieldNode;
use App\Service\OperatorNode;
use App\Service\SearchService;
use Doctrine\Persistence\ManagerRegistry;
use PHPUnit\Framework\TestCase;
use Symfony\Flex\Unpack\Operation;

class SearchServiceTest extends TestCase{

    private $searchService;
    private $savRequeteRepositoryMock;
    private $managerRegistryMock;
    protected function setUp(): void
    {
        $this->managerRegistryMock = $this->createMock(ManagerRegistry::class);
        $this->savRequeteRepositoryMock = $this->createMock(SavRequeteRepository::class);
        $this->searchService = new SearchService($this->managerRegistryMock,$this->savRequeteRepositoryMock);
    }
    public function testTokenize()
    {
        // Test 1: Expression with keywords and parentheses
        $expression1 = "field1 ET 123 OU NOT (field2 OR field3)";
        $expected1 = ['field1', 'ET', '123', 'OU', 'NOT', '(', 'field2', 'OR', 'field3', ')'];
        $result1 = $this->searchService->tokenize($expression1);
        $this->assertEquals($expected1, $result1);

        // Test 2: Simple expression with spaces and parentheses
        $expression2 = "fieldA fieldB (fieldC)";
        $expected2 = ['fieldA', 'fieldB', '(', 'fieldC', ')'];
        $result2 = $this->searchService->tokenize($expression2);
        $this->assertEquals($expected2, $result2);

        // Test 3: Expression with 'AND' operator and parentheses
        $expression3 = "(field1 AND field2)";
        $expected3 = ['(', 'field1', 'AND', 'field2', ')'];
        $result3 = $this->searchService->tokenize($expression3);
        $this->assertEquals($expected3, $result3);
    }
    public function testTokenizeForMultiSearch(){
        $expression1 = "query1";
        $expected1 = [0 => "query1"];
        $result1 = $this->searchService->tokenizeForMultiSearch($expression1);
        $this->assertEquals($expected1, $result1);

        $expression2 = "query1 OU query2";
        $expected2 = [0 =>'query1', 2 =>'query2']; 
        $result2 = $this->searchService->tokenizeForMultiSearch($expression2);
        $this->assertEquals($expected2, $result2);

        $expression3 = "query1 ET query2";
        $expected3 = [0 => "query1", 2 => "query2"]; 
        $result3 = $this->searchService->tokenizeForMultiSearch($expression3);
        $this->assertEquals($expected3, $result3);


    }
    public function testParseOr(){
        $expression = "(field1 OU field2)";
        $tokens = $this->searchService->tokenize($expression);
        $left = new FieldNode("field1");
        $right = new FieldNode("field2");
        $node = new OperatorNode("OU", $left, $right);
        $expr = $this->searchService->parseOr($tokens, null);
      
        $this->assertEquals($node, $expr);
        $expression2 = "(110a OU NOT 340g)";
        $tokens = $this->searchService->tokenize($expression2);
        // Create a FieldNode
        $left = new FieldNode("110a");
        $right = new OperatorNode("NOT", new FieldNode("340g"));
        // Create an OU OperatorNode with left and right
        $node = new OperatorNode("OU", $left, $right);
        $expr = $this->searchService->parseOr($tokens, null);
      
        $this->assertEquals($node, $expr);

    }
    public function testParseEt(){
        $expression1 = "(field1 ET field2)";
        $tokens = $this->searchService->tokenize($expression1);
        $left = new FieldNode("field1");
        $right = new FieldNode("field2");
        $node = new OperatorNode("ET", $left, $right);
        $expr = $this->searchService->parseAnd($tokens, null);
      
        $this->assertEquals($node, $expr);
        $expression2 = "(110a ET NOT 340g)";
        $tokens = $this->searchService->tokenize($expression2);
        // Create a FieldNode
        $left = new FieldNode("110a");
        $right = new OperatorNode("NOT", new FieldNode("340g"));
        // Create an OU OperatorNode with left and right
        $node = new OperatorNode("ET", $left, $right);
        $expr = $this->searchService->parseAnd($tokens, null);
      
        $this->assertEquals($node, $expr);
    }
    public function testParseNot(){
        $expression = "NOT 340g";
        $tokens = $this->searchService->tokenize($expression);
        $left = new FieldNode("340g");
        $node = new OperatorNode("NOT", $left);
        $expr = $this->searchService->parseNot($tokens, new FieldNode(""));
      
        $this->assertEquals($node, $expr);

    }
    public function testParseAtomic(){
        $tokens = ["110a"];
        $node = new FieldNode("110a");
        $expr = $this->searchService->parseAtomic($tokens);
        $this->assertEquals($node, $expr);
    }
    public function testParseAtomicWithEmptyTokens()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Unexpected end of expression");

        $tokens = [];

        // This should throw an exception
        $this->searchService->parseAtomic($tokens);
    }
    public function testParse(){
        $expression = "110a ET 340g";
        $tokens = [ 0 => "110a" ,1=> "ET",  2=> "340g" ];
        $left = new FieldNode("110a");
        $right = new FieldNode("340g");
        $node = new OperatorNode("ET", $left, $right);
        $expr = $this->searchService->parse($tokens);
        $this->assertEquals($node, $expr);
    }

}