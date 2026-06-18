<?php

namespace App\Service;

use App\Entity\Fiche;
use App\Repository\SavRequeteRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class WordService extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fiche::class);
    }
    public function generateFicheWordDoc(object $fiche): string
{
    // Create a new PHPWord instance
    $phpWord = new PhpWord();
    

    // Define styles
    $headerStyle = ['name' => 'Calibri', 'size' => 14, 'color' => '2A6EBB'];
    $subheaderStyle = ['name' => 'Calibri', 'size' => 12];
    $normalStyle = ['name' => 'Calibri', 'size' => 10];

    // Add a section to the document
    $section = $phpWord->addSection();

    // Add fiche header
    $section->addText('Fiche: ' . $this->cleanText($fiche->getRefer()), $headerStyle);

    // Add additional attributes
    $section->addText('Dénomination: ' . $this->cleanText($fiche->getDenomination()), $subheaderStyle);
    $section->addText('Texte: ' . $this->cleanText($fiche->getTexte()), $subheaderStyle);
    $section->addText('Traduction: ' . $this->cleanText($fiche->getTraduction()), $subheaderStyle);
    $section->addText('Edition: ' . $this->cleanText($fiche->getEdition()), $subheaderStyle);
    $section->addText('Commentaires: ' . $this->cleanText($fiche->getCommentaire()), $subheaderStyle);
    $section->addText('Notes: ' . $this->cleanText($fiche->getNotes()), $subheaderStyle);
    $section->addText('Statut: ' . $this->cleanText($fiche->getStatut()), $subheaderStyle);

    // Add Mot Clés section
    $section->addText('Mot Clés:', $headerStyle);
    $motCles = $fiche->getMotCles(); // PersistentCollection
    if (!empty($motCles)) {
        foreach ($motCles as $motCle) {
            $section->addText(
                '- ' . $this->cleanText($motCle->getReference()) . ': ' . $this->cleanText($motCle->getDenomination()),
                $normalStyle
            );
        }
    } else {
        $section->addText('Cette fiche ne contient pas de mots clés', $normalStyle);
    }

    // Add a page break
    $section->addPageBreak();

    // Generate the Word document content
    ob_start();
    try {
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save('php://output');
    } catch (\Exception $e) {
        ob_end_clean();
        throw new \RuntimeException('Failed to generate Word document: ' . $e->getMessage());
    }

    return ob_get_clean();
}
//     public function generateFicheWordDoc(object $fiche): string
// {
//     // Start HTML content with proper XML declaration and UTF-8 encoding
//     $htmlContent = '<html xmlns:w="urn:schemas-microsoft-com:office:word">';
//     $htmlContent .= '<head><meta charset="UTF-8">';
//     $htmlContent .= '<style>';
//     $htmlContent .= 'body { font-family: Calibri, sans-serif; font-size: 10pt; line-height: 1.5; }';
//     $htmlContent .= 'h3 { color: #2A6EBB; }';
//     $htmlContent .= 'p { margin: 5px 0; }';
//     $htmlContent .= 'hr { border: 0.5px solid #ccc; margin: 20px 0; }';
//     $htmlContent .= '.mot-cles-section { page-break-inside: avoid; }';
//     $htmlContent .= '</style></head><body>';

//     $htmlContent .= '<div class="fiche-container">';

//     // Fiche header
//     $htmlContent .= '<h3>Fiche: ' . $this->cleanText($fiche->getRefer()) . '</h3>';

//     // Additional attributes
//     $htmlContent .= '<p><strong>Dénomination:</strong> ' . $this->cleanText($fiche->getDenomination()) . '</p>';
//     $htmlContent .= '<p><strong>Texte:</strong> ' . $this->cleanText($fiche->getTexte()) . '</p>';
//     $htmlContent .= '<p><strong>Traduction:</strong> ' . $this->cleanText($fiche->getTraduction()) . '</p>';
//     $htmlContent .= '<p><strong>Edition:</strong> ' . $this->cleanText($fiche->getEdition()) . '</p>';
//     $htmlContent .= '<p><strong>Commentaires:</strong> ' . $this->cleanText($fiche->getCommentaire()) . '</p>';
//     $htmlContent .= '<p><strong>Notes:</strong> ' . $this->cleanText($fiche->getNotes()) . '</p>';
//     $htmlContent .= '<p><strong>Statut:</strong> ' . $this->cleanText($fiche->getStatut()) . '</p>';

//     // Mot Clés section
//     $htmlContent .= '<h4>Mot Clés:</h4>';
//     $motCles = $fiche->getMotCles(); // PersistentCollection
//     if (!empty($motCles)) {
//         $htmlContent .= '<ul class="mot-cles-section">';
//         foreach ($motCles as $motCle) {
//             $htmlContent .= '<li>' 
//                 . $this->cleanText($motCle->getReference()) . ': ' 
//                 . $this->cleanText($motCle->getDenomination()) 
//                 . '</li>';
//         }
//         $htmlContent .= '</ul>';
//     } else {
//         $htmlContent .= '<p>Cette fiche ne contient pas de mots clés</p>';
//     }

//     // Separator
//     $htmlContent .= '<hr style="border: 1px solid #000;">';

//     $htmlContent .= '</div>';
//     $htmlContent .= '</body></html>';

//     return $htmlContent;
// }


public function generateWordDocWithDenomContent(array $fiches): string
{
    // Create a new PHPWord object
    $phpWord = new PhpWord();
    // $phpWord->getSettings()->setEncodeUTF8(true); 
    $section = $phpWord->addSection();

    // Set global styles
    $headerStyle = ['name' => 'Calibri', 'size' => 14, 'color' => '2A6EBB'];
    $subheaderStyle = ['name' => 'Calibri', 'size' => 12];
    $normalStyle = ['name' => 'Calibri', 'size' => 10];

    foreach ($fiches as $fiche) {
        // Add fiche header
        $section->addText(
            'Fiche: ' . $this->cleanText($fiche['refer'] ?? ''),
            $headerStyle
        );
    
        // Additional attributes
        $section->addText(
            'Dénomination: ' . $this->cleanText($fiche['denomination']),
            $subheaderStyle
        );
        $section->addText(
            'Texte: ' . $this->cleanText($fiche['texte']),
            $subheaderStyle
        );
        $section->addText(
            'Traduction: ' . $this->cleanText($fiche['traduction']),
            $subheaderStyle
        );
        $section->addText(
            'Edition: ' . $this->cleanText($fiche['edition']),
            $subheaderStyle
        );
        $section->addText(
            'Commentaires: ' . $this->cleanText($fiche['commentaire']),
            $subheaderStyle
        );
        $section->addText(
            'Notes: ' . $this->cleanText($fiche['notes']),
            $subheaderStyle
        );
        $section->addText(
            'Statut: ' . $this->cleanText($fiche['statut']),
            $subheaderStyle
        );
    
        // Mot Clés section
        $section->addText('Mot Clés:', $headerStyle);
        if (!empty($fiche['motCles'])) {
            $references = explode(',', $fiche['motCles']);
            foreach ($references as $reference) {
                $section->addText(
                    $this->cleanText(trim($reference)),
                    $normalStyle
                );
            }
        } else {
            $section->addText(
                'Cette fiche ne contient pas de mots clés',
                $normalStyle
            );
        }
    
        $section->addPageBreak();
    }

    $content = '';
    ob_start();
    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save('php://output');
    $content = ob_get_clean();
    
    return $content; // Return binary content
}

public function generateWordDocWithOnlyRefContent(array $fiches): string
{
    // Create a new PHPWord object with UTF-8 enforcement
    $phpWord = new PhpWord();
    $headerStyle = ['name' => 'Calibri', 'size' => 14, 'color' => '2A6EBB'];
    $subheaderStyle = ['name' => 'Calibri', 'size' => 12];
    $normalStyle = ['name' => 'Calibri', 'size' => 10];
    $section = $phpWord->addSection();
    
    foreach ($fiches as $fiche) {
        // Add fiche data with cleaned text
        $section->addText(
            "Fiche: " . $this->cleanText($fiche['refer'] ?? null), 
            $headerStyle
        );
        $section->addText(
            "Référence: " . $this->cleanText($fiche['refer'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Dénomination: " . $this->cleanText($fiche['denomination'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Texte: " . $this->cleanText($fiche['texte'] ?? null), 
            $subheaderStyle  // Added missing style parameter
        );
        $section->addText(
            "Traduction: " . $this->cleanText($fiche['traduction'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Edition: " . $this->cleanText($fiche['edition'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Commentaires: " . $this->cleanText($fiche['commentaire'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Notes: " . $this->cleanText($fiche['notes'] ?? null), 
            $subheaderStyle
        );
        $section->addText(
            "Statut: " . $this->cleanText($fiche['statut'] ?? null), 
            $subheaderStyle
        );
        
        // Mot Clés section
        $section->addText("Mot Clés:", $headerStyle);
        if (!empty($fiche['motCles'])) {
            $motCles = explode(',', $fiche['motCles']);
            foreach ($motCles as $motCle) {
                $parts = explode(':', trim($motCle), 2);
                $reference = $this->cleanText(trim($parts[0] ?? ''));
                $section->addText('- ' . $reference, $normalStyle);
            }
        } else {
            $section->addText(
                "Cette fiche ne contient pas de mots clés", 
                $normalStyle
            );
        }

        $section->addPageBreak();
    }

    // Generate content with XML validation
    ob_start();
    try {
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
       
        $writer->save('php://output');
    } catch (\Exception $e) {
        ob_end_clean();
        throw new \RuntimeException('Failed to generate Word document: ' . $e->getMessage());
    }
    
    return ob_get_clean();
}

private function cleanText(?string $text): string
{
    $text = $text ?? 'Non spécifié';
    $text = htmlspecialchars($text, ENT_COMPAT | ENT_XML1, 'UTF-8');
    $text = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $text); // Remove control characters
    return $text;
}
    /**
     * Generate a ZIP file containing both Word documents
     */
    public function generateWordFilesInZip(array $fiches): Response
    {
        $docWithDenom = $this->generateWordDocWithDenomContent($fiches);
        $docWithOnlyRef = $this->generateWordDocWithOnlyRefContent($fiches);

        $zip = new \ZipArchive();
        $zipFileName = tempnam(sys_get_temp_dir(), 'fiches') . '.zip';

        if ($zip->open($zipFileName, \ZipArchive::CREATE) === true) {
            $zip->addFromString('ReferencesWithDenominations.docx', $docWithDenom);
            $zip->addFromString('ReferencesOnly.docx', $docWithOnlyRef);
            $zip->close();

            return new Response(
                file_get_contents($zipFileName),
                200,
                [
                    'Content-Type' => 'application/zip',
                    'Content-Disposition' => 'attachment; filename="fiches.zip"',
                ]
            );
        }

        throw new \RuntimeException('Failed to create ZIP file');
    }
    // Helper function to generate each section of the fiche with a dynamic value
    private function generateSection($label, $value)
    {
        $value = $value ?: 'Non spécifié'; // Default if null
        return '<div class="sectionn"><h3>' . $label . '</h3><p>' . $value . '</p></div>';
    }
}