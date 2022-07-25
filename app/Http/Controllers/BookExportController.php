<?php

namespace BookStack\Http\Controllers;

use BookStack\Entities\Repos\BookRepo;
use BookStack\Entities\Models\CancerApplication_model;
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
        return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);Application form to NCI-K
        //$pdfContent = $this->exportFormatter->nci_kPdf();

       // return $this->download()->directly($pdfContent,'Application_form_to_NCI_K' . '.pdf');
    }
    public function apply_here()
    {
        
   $application= CancerApplication_model::with('getimages')->get()->first();
   if (isset($application)) {
    # code...
    //dd($application);
    return view('types_of_cancer/bcc/nci_kPdf',compact('application'));
   }
    return view('types_of_cancer/bcc/nci_kPdf');
    }
    public function nci_Checklis_Forms()
    {
        $path = storage_path('app/public/nci/NCI_K_INSPECTION_CHECKLIST.pdf');
        return response()->download($path);
        // $vie=new DomPDF();
        // $pdf = PDF::loadView('exports.nci_cheklist');
        // return $pdf->download('Application_form_to_NCI_K.pdf');
        //return $pdf->stream("Halloa.pdf");
        //return view('exports.nci_kPdf');
        //$book = $this->bookRepo->getBySlug($bookSlug);Application form to NCI-K
        //$pdfContent = $this->exportFormatter->nci_kPdf();

       // return $this->download()->directly($pdfContent,'Application_form_to_NCI_K' . '.pdf');
    }
    public function nci_cyclotronPdf()
    {
        $path = storage_path('app/public/nci/medical_cyclotron_facility.pdf');
        return response()->download($path);
        $vie=new DomPDF();
    //     $pdf = PDF::loadView('exports.nci_cyclotron_form');
    //    return $pdf->download('INSPECTION_OF_MEDICAL_CYCLOTRON_FACILITY.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function nci_chemoterapy_admin_form()
    {
        //return view('exports.nci_cyclotron_form');
        $vie=new DomPDF();
        $pdf = PDF::loadView('exports.chemotarapy_admin_form');
       return $pdf->download('chemoterapy_admin_form.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function cancer_screening_form()
    {
        $path = storage_path('app/public/nci/cancer_screening_form.pdf');
        return response()->download($path);
        //return view('exports.nci_cyclotron_form');
        //$vie=new DomPDF();
        //$pdf = PDF::loadView('exports.cancer_screening_form');
       //return $pdf->download('chemoterapy_admin_form.pdf');
    //    return $pdf->stream("Halloa.pdf");

    }
    public function patient_tools_assesd()
    {
        $path = storage_path('app/public/nci/pain_sassesment_tools.pdf');
        return response()->download($path);
        //return view('exports.nci_cyclotron_form');
    //     $vie=new DomPDF();
    //     $pdf = PDF::loadView('exports.medical_label');
    //    return $pdf->download('medical_label.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function new_patient_form()
    {
        $path = storage_path('app/public/nci/NEW_PATIENT_ONCOLOGY_ASSESSMENT.pdf');
        return response()->download($path);
        //return view('exports.nci_cyclotron_form');
    //     $vie=new DomPDF();
    //     $pdf = PDF::loadView('exports.medical_label');
    //    return $pdf->download('medical_label.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function nci_medical_label()
    {
        $path = storage_path('app/public/nci/medication_label.pdf');
        return response()->download($path);
        //return view('exports.nci_cyclotron_form');
    //     $vie=new DomPDF();
    //     $pdf = PDF::loadView('exports.medical_label');
    //    return $pdf->download('medical_label.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function informed_consent_form()
    {
        //return view('exports.nci_cyclotron_form');
        $vie=new DomPDF();
        $pdf = PDF::loadView('exports.informed_consent_form');
       return $pdf->download('Cancer_Treatment_Informed_Consent_Form.pdf');
       // return $pdf->stream("Halloa.pdf");
    }
    public function radiotherapy_unit(){
        $path = storage_path('app/public/nci/radiation_unit.pdf');
        return response()->download($path);
     }
     public function chemotherapy_unit(){
        $path = storage_path('app/public/nci/chemoterapy_unit.pdf');
        return response()->download($path);
     }
     public function nuclear_unit(){
        $path = storage_path('app/public/nci/nuclear_unit.pdf');
        return response()->download($path);
     }
     public function cancer_abstract_form(){
        $path = storage_path('app/public/nci/cancer_abstract_form.pdf');
        return response()->download($path);
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
