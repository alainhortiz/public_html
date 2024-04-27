<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private $dompdf;
    public function __construct(){
        $this->dompdf = new Dompdf();

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $this->dompdf->setOptions($pdfOptions);
    }

    public function showPdfFile($html): void
    {
        $this->dompdf->loadHtml(utf8_decode($html));
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("details.pdf", array("Attachment" => false));
    }

    public function generateBinaryPDF($html): void
    {
        $this->dompdf->loadHtml(utf8_decode($html));
        $this->dompdf->render();
        $this->dompdf->output();
    }

}