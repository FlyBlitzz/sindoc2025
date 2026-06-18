<?php

// namespace App\Service;

// use Dompdf\Dompdf;
// use Dompdf\Options;

// class PdfService {
//     private $domPdf;

//     public function __construct() {
//         $this->domPdf = new Dompdf();

//         $pdfOptions = new Options();
//         $pdfOptions->set('defaultFont', 'Garamond');
//         $this->domPdf->setOptions($pdfOptions);
//     }

//     public function showPdfFile($html) {
//         $this->domPdf->loadHtml($html);
//         $this->domPdf->render();
//         $this->domPdf->stream("details.pdf", [
//             'Attachment' => false
//         ]);
//     }

//     public function generateBinaryPDF($html, $outputFile = null) {
//         $this->domPdf->loadHtml($html);
//         $this->domPdf->render();
        
//         if ($outputFile) {
//             $this->domPdf->output($outputFile, 'F'); // Utilisation de 'F' pour spécifier la sortie vers un fichier
//         } else {
//             return $this->domPdf->output();
//         }
//     }
// } 
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;

class PdfService {
    private $defaultOptions;

    public function __construct() {
        // Configure default options once
        $this->defaultOptions = new Options();
        $this->defaultOptions->set('defaultFont', 'Garamond');
        $this->defaultOptions->set('isHtml5ParserEnabled', true); // Enable HTML5 parsing
        $this->defaultOptions->set('isPhpEnabled', true); // Enable PHP rendering
    }

    private function createDomPdf(): Dompdf {
        // Create a new Dompdf instance with default options
        $domPdf = new Dompdf();
        $domPdf->setOptions($this->defaultOptions);
        $domPdf->setPaper('A4', 'portrait');
        return $domPdf;
    }

    public function showPdfFile($html) {
        $domPdf = $this->createDomPdf(); // Create a fresh instance
        $domPdf->loadHtml($html);

        $domPdf->render();
        $domPdf->stream("details.pdf", [
            'Attachment' => false,
        ]);
    }

    public function generateBinaryPDF($html, $outputFile = null) {
        $domPdf = $this->createDomPdf(); // Create a fresh instance
        $domPdf->loadHtml($html);
        $domPdf->render();

        if ($outputFile) {
            file_put_contents($outputFile, $domPdf->output()); // Save output to file
        } else {
            return $domPdf->output(); // Return binary content
        }
    }
    public function generatePdfResponse($html, $filename = 'document.pdf'): Response {
        $domPdf = $this->createDomPdf(); // Create a fresh instance
        $domPdf->loadHtml($html);
        $domPdf->render();

        // Get the PDF content as a binary string
        $pdfContent = $domPdf->output();

        // Return the PDF content as a Response for downloading
        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control' => 'no-store, no-cache, must-revalidate', // To avoid caching
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }
}
