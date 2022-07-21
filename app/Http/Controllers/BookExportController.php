<?php

namespace BookStack\Http\Controllers;

use BookStack\Entities\Repos\BookRepo;
use BookStack\Entities\Tools\ExportFormatter;
use Throwable;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;
class BookExportController extends Controller
{
    protected $bookRepo;
    protected $exportFormatter;

    /**
     * BookExportController constructor.
     */
    public function __construct(BookRepo $bookRepo, ExportFormatter $exportFormatter)
    {
        $this->bookRepo = $bookRepo;
        $this->exportFormatter = $exportFormatter;
        $this->middleware('can:content-export');
    }

    /**
     * Export a book as a PDF file.
     *
     * @throws Throwable
     */
    public function pdf(string $bookSlug)
    {
      $book = $this->bookRepo->getBySlug($bookSlug);
      $pdfContent = $this->exportFormatter->bookToPdf($book);
      return $this->download()->directly($pdfContent, $bookSlug . '.pdf');
    }
    public function ppeToPdf()
    {
       // return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);
        $pdfContent = $this->exportFormatter->ppeToPdf();

        return $this->download()->directly($pdfContent,'ppe' . '.pdf');
    }
    public function nci_kPdf()
    {
        $vie=new DomPDF();
        $pdf = PDF::loadView('exports.nci_kPdf');
        return $pdf->download('Application_form_to_NCI_K.pdf');
        //return $pdf->stream("Halloa.pdf");
        //return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);Application form to NCI-K
        //$pdfContent = $this->exportFormatter->nci_kPdf();

       // return $this->download()->directly($pdfContent,'Application_form_to_NCI_K' . '.pdf');
    }
    public function nci_Checklis_Forms()
    {
        $vie=new DomPDF();
        $pdf = PDF::loadView('exports.nci_cheklist');
        return $pdf->download('Application_form_to_NCI_K.pdf');
        //return $pdf->stream("Halloa.pdf");
        //return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);Application form to NCI-K
        //$pdfContent = $this->exportFormatter->nci_kPdf();

       // return $this->download()->directly($pdfContent,'Application_form_to_NCI_K' . '.pdf');
    }
    public function nci_cyclotronPdf()
    {
        //return view('exports.nci_cyclotron_form');
        $vie=new DomPDF();
        $pdf = PDF::loadView('exports.nci_cyclotron_form');
       //return return $pdf->download('INSPECTION_OF_MEDICAL_CYCLOTRON_FACILITY.pdf');
        return $pdf->stream("Halloa.pdf");
        //return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);Application form to NCI-K
        //$pdfContent = $this->exportFormatter->nci_kPdf();

       // return $this->download()->directly($pdfContent,'Application_form_to_NCI_K' . '.pdf');
    }
    /**
     * Export a book as a contained HTML file.
     *
     * @throws Throwable
     */
    public function html(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $htmlContent = $this->exportFormatter->bookToContainedHtml($book);

        return $this->download()->directly($htmlContent, $bookSlug . '.html');
    }

    /**
     * Export a book as a plain text file.
     */
    public function plainText(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $textContent = $this->exportFormatter->bookToPlainText($book);

        return $this->download()->directly($textContent, $bookSlug . '.txt');
    }

    /**
     * Export a book as a markdown file.
     */
    public function markdown(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $textContent = $this->exportFormatter->bookToMarkdown($book);

        return $this->download()->directly($textContent, $bookSlug . '.md');
    }
}
