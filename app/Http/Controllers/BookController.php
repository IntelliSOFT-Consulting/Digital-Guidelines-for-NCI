<?php

namespace BookStack\Http\Controllers;


use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use BookStack\Actions\ActivityQueries;
use BookStack\Actions\ActivityType;
use BookStack\Actions\View;
use BookStack\Auth\User;
use BookStack\CenterRating;
use BookStack\Entities\Models\PageContent_model;
use BookStack\Entities\Tools\NextPreviousContentLocator;
use BookStack\Entities\Tools\PageContent;
use BookStack\Entities\Models\Counties_model;
use BookStack\Entities\Models\CancerApplication_model;
use BookStack\Entities\Models\Bookshelf;
use BookStack\Entities\Models\CancerApplicationfiles_model;
use BookStack\Entities\Models\Ratings_model;
use BookStack\Entities\Models\ApprovedCancerCenter_models;
use BookStack\Entities\Models\Counties_model as ModelsCounties_model;
use BookStack\Entities\Models\PercountyCenters_model;
use BookStack\Entities\Repos\BookRepo;
use BookStack\Entities\Tools\BookContents;
use BookStack\Entities\Tools\Cloner;
use BookStack\Entities\Tools\HierarchyTransformer;
use BookStack\Entities\Tools\PermissionsUpdater;
use BookStack\Entities\Tools\ShelfContext;
use BookStack\Exceptions\ImageUploadException;
use BookStack\Exceptions\NotFoundException;
use BookStack\Facades\Activity;
use BookStack\WebsiteRating;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    protected $bookRepo;
    protected $entityContextManager;

    public function __construct(ShelfContext $entityContextManager, BookRepo $bookRepo)
    {
        $this->bookRepo = $bookRepo;
        $this->entityContextManager = $entityContextManager;
    }

    /**
     * Display a listing of the book.
     */
    public function index()
    {
        $view = setting()->getForCurrentUser('books_view_type');
        $sort = setting()->getForCurrentUser('books_sort', 'id');
        $order = setting()->getForCurrentUser('books_sort_order', 'desc');

        $books = $this->bookRepo->getAllPaginated(18, $sort, $order);
        $recents = $this->isSignedIn() ? $this->bookRepo->getRecentlyViewed(4) : false;
        $popular = $this->bookRepo->getPopular(4);
        $new = $this->bookRepo->getRecentlyCreated(4);
        $this->entityContextManager->clearShelfContext();
        $this->setPageTitle(trans('entities.books'));
        return view('books.index1', [
            'books'   => $books,
            'recents' => $recents,
            'popular' => $popular,
            'new'     => $new,
            'view'    => $view,
            'sort'    => $sort,
            'order'   => $order,
        ]);
    }

    /**
     * Show the form for creating a new book.
     */
    public function create(string $shelfSlug = null)
    {
        $this->checkPermission('book-create-all');

        $bookshelf = null;
        if ($shelfSlug !== null) {
            $bookshelf = Bookshelf::visible()->where('slug', '=', $shelfSlug)->firstOrFail();
            $this->checkOwnablePermission('bookshelf-update', $bookshelf);
        }

        $this->setPageTitle(trans('entities.books_create'));

        return view('books.create', [
            'bookshelf' => $bookshelf,
            'reqs' => '',
            'cancer' => '',
        ]);
    }
    public function cancer(string $cancer)
    {
        $this->checkPermission('book-create-all');
        $this->setPageTitle(trans('entities.books_create'));

        return view('books.create', [
            'cancer' => $cancer,
            'reqs' => ''
        ]);
    }
    public function create_requirements(string $requirements)
    {
        // dd($requirements);
        //$this->checkPermission('book-create-all');
        // creating requirement
        // $view = setting()->getForCurrentUser('books_view_type');
        // $sort = setting()->getForCurrentUser('books_sort', 'name');
        // $order = setting()->getForCurrentUser('books_sort_order', 'asc');

        // $books = $this->bookRepo->getAllReq(18, $sort, $order);

        // end of initial function
        $view = setting()->getForCurrentUser('books_view_type');
        $sort = setting()->getForCurrentUser('books_sort', 'id');
        $order = setting()->getForCurrentUser('books_sort_order', 'asc');

        $books = $this->bookRepo->getAllPaginated(18, $sort, $order);
        $books = $this->bookRepo->getAllPaginated(18, $sort, $order);
        // foreach ($books as $book) {

        //     $books = (new BookContents($book))->getTree(true);
        // }
        $recents = $this->isSignedIn() ? $this->bookRepo->getRecentlyViewed(4) : false;
        $popular = $this->bookRepo->getPopular(4);
        $new = $this->bookRepo->getRecentlyCreated(4);

        $this->entityContextManager->clearShelfContext();

        $this->setPageTitle('Consideration Requirements');

        return view('books.create', [
            'reqs' => $requirements,
            'cancer' => '',
            'books' => $books,
            'view'    => $view,
        ]);
    }
    /**
     * Store a newly created book in storage.
     *
     * @throws ImageUploadException
     * @throws ValidationException
     */
    public function store(Request $request, string $shelfSlug = null)
    {
        $this->checkPermission('book-create-all');
        $requirements = $request->requirement;
        if ($requirements == '') {
            # code...
            // dd($requirements);
            $validated = $this->validate($request, [
                'name'        => ['required', 'string', 'max:255'],
                'description' => ['string', 'max:1000'],
                'image'       => array_merge(['nullable'], $this->getImageValidationRules()),
                'tags'        => ['array'],
            ]);
        } else {

            $validated = $this->validate($request, [
                'requirement' => ['integer'],
                'name'        => ['required', 'string', 'max:255'],
                'description' => ['string', 'max:1000'],
                'image'       => array_merge(['nullable'], $this->getImageValidationRules()),
                'tags'        => ['array'],
            ]);
            //dd($validated);
        }
        //dd($request->image);

        $bookshelf = null;
        if ($shelfSlug !== null) {
            $bookshelf = Bookshelf::visible()->where('slug', '=', $shelfSlug)->firstOrFail();
            $this->checkOwnablePermission('bookshelf-update', $bookshelf);
        }

        $book = $this->bookRepo->create($validated);

        if ($bookshelf) {
            $bookshelf->appendBook($book);
            Activity::add(ActivityType::BOOKSHELF_UPDATE, $bookshelf);
        }

        return redirect($book->getUrl());
    }

    /**
     * Display the specified book.
     */
    public function show(Request $request, ActivityQueries $activities, string $slug)
    {
        $book = $this->bookRepo->getBySlug($slug);
        $bookChildren = (new BookContents($book))->getTree(true);
        $bookParentShelves = $book->shelves()->scopes('visible')->get();
        // foreach ($books as $book) {

        $books = (new BookContents($book))->getTree(true);
        // }
        View::incrementFor($book);
        if ($request->has('shelf')) {
            $this->entityContextManager->setShelfContext(intval($request->get('shelf')));
        }

        $this->setPageTitle($book->getShortName());
        //dd($books);
        return view('books.show1', [
            'bookd'              => $books,
            'book'              => $book,
            'current'           => $books,
            'bookChildren'      => $bookChildren,
            'bookParentShelves' => $bookParentShelves,
            'activity'          => $activities->entityActivity($book, 20, 1),
        ]);
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(string $slug)
    {
        $book = $this->bookRepo->getBySlug($slug);
        $this->checkOwnablePermission('book-update', $book);
        $this->setPageTitle(trans('entities.books_edit_named', ['bookName' => $book->getShortName()]));

        return view('books.edit', ['book' => $book, 'current' => $book]);
    }

    /**
     * Update the specified book in storage.
     *
     * @throws ImageUploadException
     * @throws ValidationException
     * @throws Throwable
     */
    public function update(Request $request, string $slug)
    {
        $book = $this->bookRepo->getBySlug($slug);
        $this->checkOwnablePermission('book-update', $book);

        $validated = $this->validate($request, [
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:1000'],
            'image'       => array_merge(['nullable'], $this->getImageValidationRules()),
            'tags'        => ['array'],
        ]);

        if ($request->has('image_reset')) {
            $validated['image'] = null;
        } elseif (array_key_exists('image', $validated) && is_null($validated['image'])) {
            unset($validated['image']);
        }

        $book = $this->bookRepo->update($book, $validated);

        return redirect($book->getUrl());
    }


    /**
     * Shows the page to confirm deletion.
     */
    public function showDelete(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('book-delete', $book);
        $this->setPageTitle(trans('entities.books_delete_named', ['bookName' => $book->getShortName()]));

        return view('books.delete', ['book' => $book, 'current' => $book]);
    }

    /**
     * Remove the specified book from the system.
     *
     * @throws Throwable
     */
    public function destroy(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('book-delete', $book);

        $this->bookRepo->destroy($book);

        return redirect('/books');
    }

    /**
     * Show the permissions view.
     */
    public function showPermissions(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('restrictions-manage', $book);

        return view('books.permissions', [
            'book' => $book,
        ]);
    }

    /**
     * Set the restrictions for this book.
     *
     * @throws Throwable
     */
    public function permissions(Request $request, PermissionsUpdater $permissionsUpdater, string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('restrictions-manage', $book);

        $permissionsUpdater->updateFromPermissionsForm($book, $request);

        $this->showSuccessNotification(trans('entities.books_permissions_updated'));

        return redirect($book->getUrl());
    }

    /**
     * Show the view to copy a book.
     *
     * @throws NotFoundException
     */
    public function showCopy(string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('book-view', $book);

        session()->flashInput(['name' => $book->name]);

        return view('books.copy', [
            'book' => $book,
        ]);
    }

    /**
     * Create a copy of a book within the requested target destination.
     *
     * @throws NotFoundException
     */
    public function copy(Request $request, Cloner $cloner, string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('book-view', $book);
        $this->checkPermission('book-create-all');

        $newName = $request->get('name') ?: $book->name;
        $bookCopy = $cloner->cloneBook($book, $newName);
        $this->showSuccessNotification(trans('entities.books_copy_success'));

        return redirect($bookCopy->getUrl());
    }

    /**
     * Convert the chapter to a book.
     */
    public function convertToShelf(HierarchyTransformer $transformer, string $bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $this->checkOwnablePermission('book-update', $book);
        $this->checkOwnablePermission('book-delete', $book);
        $this->checkPermission('bookshelf-create-all');
        $this->checkPermission('book-create-all');

        $shelf = $transformer->transformBookToShelf($book);

        return redirect($shelf->getUrl());
    }
    // nci changes
    public function nci_basic_c_Center()
    {
        $view = setting()->getForCurrentUser('books_view_type');
        $sort = setting()->getForCurrentUser('books_sort', 'name');
        $order = setting()->getForCurrentUser('books_sort_order', 'asc');

        $books = $this->bookRepo->getAllPaginated(18, $sort, $order);
        $recents = $this->isSignedIn() ? $this->bookRepo->getRecentlyViewed(4) : false;
        $popular = $this->bookRepo->getPopular(4);
        $new = $this->bookRepo->getRecentlyCreated(4);

        $this->entityContextManager->clearShelfContext();

        $this->setPageTitle(trans('entities.books', [
            'books'   => $books,
            'recents' => $recents,
            'popular' => $popular,
            'new'     => $new,
            'view'    => $view,
            'sort'    => $sort,
            'order'   => $order,
        ]));
        return view('types_of_cancer/nci_basic_cancer_center');
    }
    public function nci_mlevel_c_Center()
    {
        return view('types_of_cancer/nci_mlevel_cancer_center');
    }
    public function nci_comprehensive_c_Center()
    {
        $centers = ApprovedCancerCenter_models::groupBy('County')->get();
        $per = array();
        //foreach ($centers  as $cen){

        // }
        $coun = count($centers);
        return view('types_of_cancer/nci_approved_cancer_center', ['centers' => $centers, 'coun' => $coun]);
    }
    public function addCountUpdates(Request $request, ApprovedCancerCenter_models $capproved)
    {

        $country = $request->country;
        $facility = $request->facility;
        $newcounty = $request->newcounty;
        $modalities = $request->modalities;
        $physical = $request->physical;

        $exist = $capproved->where('County', $country)->get();
        //dd($request->all());
        //if (isset($exist)) {
        # code...
        if (!isset($newcounty) && isset($country)) {
            foreach ($facility as $perc)
                PercountyCenters_model::create([
                    'Facility' => $perc,
                    'county_id' => $country,
                    'Cancer_Treatment_Modalities' => $modalities,
                    'Physical_Address' => $physical,
                    'Designation' => $request->designation
                ]);
            $message = 'county center added successfully';
        } else {
            # code...
            ApprovedCancerCenter_models::create([
                //'Facility'=> $country->Facility,
                'County' => $newcounty,
                //'Designation'=> $country->Designation
            ]);
            foreach ($facility as $newperc) {
                PercountyCenters_model::create([
                    'Facility' => $newperc,
                    'county_id' => $newcounty,
                    'Cancer_Treatment_Modalities' => $modalities,
                    'Physical_Address' => $physical,
                    'Designation' => $request->designation
                ]);
            }
            $message = 'county and cancer center added successfully';
        }


        //}
        return redirect()->back()->with('message', $message);
    }
    public function updateexternal_link(Request $request)
    {

        $approved = new ApprovedCancerCenter_models();
        $percounty = new PercountyCenters_model();
        $facility_id = $request->facility_id;
        $county = $request->county;
        $facility = $request->facility;
        $addres = $request->addres;
        $modality = $request->modality;
        $cid = $request->ci;
        $exurlink = $request->exurlink;
        $countyy = $approved->where('id', $cid)->get()->first();
        //update(['County'=>$county])->where('County',$county);

        if ($countyy) {
            ApprovedCancerCenter_models::where('County', $countyy)->where('id', $cid)->update(['County' => $county]);
        }


        if (isset($facility_id)) {
            $percountie = $percounty->where('id', $facility_id);
            //dd($percountie);
            if ($percountie) {
                PercountyCenters_model::where('id', $facility_id)->update(['ext_link' => $exurlink, 'Physical_Address' => $addres, 'Cancer_Treatment_Modalities' => $modality, 'Facility' => $facility]);
                //dd($percountie);
            }
        }
        return redirect()->back()->with('message', 'Cancer center updated succesful');
    }
    public function nci_customer_ratings()
    {
        //load all cancer ratings
        $data['centers'] = CenterRating::getAllRatings();

        $onetofive = ['1', '2', '3', '4', '5'];
        $onetoten = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        $purpose = ['Educational', 'Medical', 'Setting up a cancer centre', 'General knowledge'];
        $yesno = ['Yes', 'No'];
        //display from very easy to difficult
        $user_friendly = ['Very Easy', 'Easy', 'Moderate', 'Difficult', 'Very Difficult'];


        $experience = [];
        $purposedata = [];
        $helpfuldata = [];
        $how_helpfuldata = [];
        $treatement = [];
        $purpose_achieveddata = [];
        $attention = [];
        $response_time = [];
        $easy_understand = [];
        $need_accommodation = [];
        $satisfied = [];
        foreach ($onetofive as $key => $value) {
            $experience[] = WebsiteRating::where('experience', '=', $value)->count();
            $response_time[] = CenterRating::where('response_time', '=', $value)->count();
            $need_accommodation[] = CenterRating::where('need_accommodation', '=', $value)->count();
            $satisfied[] = CenterRating::where('satisfied', '=', $value)->count();
        }
        foreach ($purpose as $key => $value) {
            $purposedata[] = WebsiteRating::where('purpose', '=', $value)->count();
        }
        foreach ($yesno as $key => $value) {
            $helpfuldata[] = WebsiteRating::where('helpful', '=', $value)->count();
            $purpose_achieveddata[] = WebsiteRating::where('purpose_achieved', '=', $value)->count();
            $treatement[] = CenterRating::where('treatement', '=', $value)->count();
            $attention[] = CenterRating::where('attention', '=', $value)->count();
            $easy_understand[] = CenterRating::where('easy_understand', '=', $value)->count();
        }
        foreach ($onetoten as $value) {
            $how_helpfuldata[] = WebsiteRating::where('how_helpful', '=', $value)->count();
        }




        //load all website rating
        $data['website'] = WebsiteRating::getAllRatings();
        $data['onetofive'] = json_encode($onetofive, JSON_NUMERIC_CHECK);
        $data['onetoten'] = json_encode($onetoten, JSON_NUMERIC_CHECK);
        $data['experience'] = json_encode($experience, JSON_NUMERIC_CHECK);
        $data['purpose'] = json_encode($purpose, JSON_NUMERIC_CHECK);
        $data['purposedata'] = json_encode($purposedata, JSON_NUMERIC_CHECK);
        $data['yesno'] = json_encode($yesno, JSON_NUMERIC_CHECK);
        $data['helpfuldata'] = json_encode($helpfuldata, JSON_NUMERIC_CHECK);
        $data['how_helpfuldata'] = json_encode($how_helpfuldata, JSON_NUMERIC_CHECK);
        $data['purpose_achieveddata'] = json_encode($purpose_achieveddata, JSON_NUMERIC_CHECK);
        // centers
        $data['treatement'] = json_encode($treatement, JSON_NUMERIC_CHECK);
        $data['attention'] = json_encode($attention, JSON_NUMERIC_CHECK);
        $data['response_time'] = json_encode($response_time, JSON_NUMERIC_CHECK);
        $data['easy_understand'] = json_encode($easy_understand, JSON_NUMERIC_CHECK);
        $data['need_accommodation'] = json_encode($need_accommodation, JSON_NUMERIC_CHECK);
        $data['satisfied'] = json_encode($satisfied, JSON_NUMERIC_CHECK);
        $data['user_friendly'] = json_encode($user_friendly, JSON_NUMERIC_CHECK);


        // $filename = 'nci_customer_ratings'.date('Y-m-d H:m');
        // $vie=new DomPDF();
        // $pdf = PDF::loadView('exports/website_ratings',$data);

        // $dompdf = new DomPDF();
        // $dompdf->load_html($pdf); 
        // return $dompdf->render();


    //    return $this->dompdf->stream($pdf, array("Attachment" => 0));

       // $pdf = PDF::loadView('exports/website_ratings',$data);
       // return $pdf->download($filename.'.pdf');


        return view('types_of_cancer/nci_customer_satisfaction_ratings', $data);
    }
    public function nci_cancer_forms()
    {
        return view('types_of_cancer/cancer_center_patients_form');
    }
    public function nci_operation_consideration_req()
    {
        // $book = $this->bookRepo->getBySlug($slug);
        // $bookChildren = (new BookContents($book))->getTree(true);
        // $bookParentShelves = $book->shelves()->scopes('visible')->get();
        // // foreach ($books as $book) {

        //     $books = (new BookContents($book))->getTree(true);
        // // }
        // View::incrementFor($book);
        // if ($request->has('shelf')) {
        //     $this->entityContextManager->setShelfContext(intval($request->get('shelf')));
        // }

        // $this->setPageTitle($book->getShortName());
        //dd($books);
        return view('types_of_cancer/bcc/chemoteraphy');
    }
    public function nci_chemotherapy()
    {
        return view('types_of_cancer/bcc/chemoteraphy');
    }
    public function chemoteraphy_considerations()
    {
        return view('types_of_cancer/bcc/chemoteraphy_considerations');
    }
    public function add_user_ratings(Request $request)
    {

        $ratings = CenterRating::createRating($request);
        # code...
        return redirect('/nci/customer/satisfaction/ratings')->with('message', 'Thanks for your feedback and your comment!');
    }
    public function add_user_web_ratings(Request $request)
    {
        //website ratings
        $ratings = WebsiteRating::createRating($request);
        return redirect('/nci/customer/satisfaction/ratings')->with('message', 'Thanks for your feedback and your comment!');

        // $ratings = new Ratings_model();
        // $ratings->additional_comments = $request->comment;
        // $ratings->experience_rating = $request->difficult;
        // $ratings->empathetic_rating = $request->empathetic;
        // $ratings->doctor_attends_rating = $request->long;
        // $ratings->satisfied_doctor_rating = $request->satisfied;
        // $ratings->user_id = auth()->user()->id;
        // $rates = $ratings->save();
        // if ($rates) {
        //     # code...
        //     return redirect('/nci/customer/satisfaction/ratings')->with('message', 'Thanks for your feedback and your comment!');
        // }
    }
    public function dataAjax(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = PageContent_model::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data);
    }
    public  function apply_here(Request $request)
    {
        $validate = $this->validate($request, [
            'head_email'    => ['required', 'email', 'max:255', 'unique:cancer_application_models'],
            'depart_email'    => ['required', 'email', 'max:255', 'unique:cancer_application_models'],
            'inst_email'    => ['required', 'email', 'max:255', 'unique:cancer_application_models'],
        ]);

        if (!$validate) {
            return redirect()->back();
        }
        $center = $request->center;
        $paddress = $request->paddress;
        $email = $request->email;
        $service_c = $request->service_c;
        $institute_name = $request->institute_name;
        $head_email = $request->head_email;
        $con_email = $request->con_email;
        $inst_email = $request->inst_email;
        $manager_name = $request->manager_name;
        $depart_email = $request->depart_email;
        $department_phone = $request->department_phone;
        $depart1_email = $request->depart1_email;
        $prevention = $request->prevention;
        $pre_cancerous = $request->pre_cancerous;
        $inpatient_wards = $request->inpatient_wards;
        $outpatient = $request->outpatient;
        $pathology = $request->pathology;
        $radiology = $request->radiology;
        $surgical = $request->surgical;
        $radiotherapy = $request->radiotherapy;
        $oncology = $request->oncology;
        $chemotherapy = $request->chemotherapy;
        $therapy = $request->therapy;
        $hormonal = $request->hormonal;
        $immunotherapy = $request->immunotherapy;
        $transplants = $request->transplants;
        $palliative = $request->palliative;
        $assessment = $request->assessment;
        $sychosocial = $request->sychosocial;
        $rehabilitation = $request->rehabilitation;
        $survivorship = $request->survivorship;
        $care = $request->care;
        $registration = $request->registration;
        $comprehensive_lab = $request->comprehensive_lab;
        $comprehensive_radiology = $request->comprehensive_radiology;
        $radiation_oncology = $request->radiation_oncology;
        $nuclear_medicine = $request->nuclear_medicine;
        $oncology_training = $request->oncology_training;
        $cancer_research = $request->cancer_research;
        $others = $request->others;
        $mechanism = $request->mechanism;
        $routine = $request->routine;
        $Physical = $request->Physical;
        $symptoms = $request->symptoms;
        $support = $request->support;
        $incorporate = $request->incorporate;
        $inadequately = $request->inadequately;
        $coordination = $request->coordination;
        $oncology_related = $request->oncology_related;
        $relevant = $request->relevant;
        $Clinical = $request->Clinical;
        $academic = $request->academic;
        $Professional = $request->Professional;
        $certificates = $request->certificates;
        $plans = $request->plans;
        $disposal = $request->disposal;
        $compliance = $request->compliance;
        $applicant_name = $request->applicant_name;
        $designation = $request->designation;
        $application_date = $request->application_date;
        $officer_name = $request->officer_name;
        $off_designation = $request->off_designation;
        $off_date = $request->off_date;
        $apply = new CancerApplication_model();
        $apply->user_id = auth()->user()->id;
        $apply->center = $center;
        $apply->paddress = $paddress;
        $apply->email = $email;
        $apply->service_c = $service_c;
        $apply->institute_name = $institute_name;
        $apply->head_email = $head_email;
        $apply->con_email = $con_email;
        $apply->inst_email = $inst_email;
        $apply->manager_name = $manager_name;
        $apply->depart_email = $depart_email;
        $apply->department_phone = $department_phone;
        $apply->depart1_email = $depart1_email;
        $apply->prevention = $prevention;
        $apply->pre_cancerous = $pre_cancerous;
        $apply->inpatient_wards = $inpatient_wards;
        $apply->outpatient = $outpatient;
        $apply->pathology = $pathology;
        $apply->radiology = $radiology;
        $apply->surgical = $surgical;
        $apply->radiotherapy = $radiotherapy;
        $apply->oncology = $oncology;
        $apply->chemotherapy = $chemotherapy;
        $apply->therapy = $therapy;
        $apply->hormonal = $hormonal;
        $apply->immunotherapy = $immunotherapy;
        $apply->transplants = $transplants;
        $apply->palliative = $palliative;
        $apply->assessment = $assessment;
        $apply->sychosocial = $sychosocial;
        $apply->rehabilitation = $rehabilitation;
        $apply->survivorship = $survivorship;
        $apply->care = $care;
        $apply->registration = $registration;
        $apply->comprehensive_lab = $comprehensive_lab;
        $apply->comprehensive_radiology = $comprehensive_radiology;
        $apply->radiation_oncology = $radiation_oncology;
        $apply->nuclear_medicine = $nuclear_medicine;
        $apply->oncology_training = $oncology_training;
        $apply->cancer_research = $cancer_research;
        $apply->others = $others;
        $apply->mechanism = $mechanism;
        $apply->routine = $routine;
        $apply->Physical = $Physical;
        $apply->symptoms = $symptoms;
        $apply->support = $support;
        $apply->incorporate = $incorporate;
        $apply->inadequately = $inadequately;
        $apply->coordination = $coordination;
        $apply->oncology_related = $oncology_related;
        $apply->relevant = $relevant;
        //$apply->Clinical=$Clinical;
        //$apply->academic=$academic;
        //$apply->Professional=$Professional;
        //$apply->certificates=$certificates;
        //$apply->plans=$plans;
        //$apply->disposal=$disposal;
        //$apply->compliance=$compliance;
        $apply->applicant_name = $applicant_name;
        $apply->designation = $designation;
        $apply->application_date = $application_date;
        $apply->officer_name = $officer_name;
        $apply->off_designation = $off_designation;
        $apply->off_date = $off_date;
        //dd($apply);
        if ($apply->save()) {


            if ($request->hasfile('Clinical')) {
                foreach ($request->file('Clinical') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'Clinical';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
                //dd($imagefiles);
            }
            if ($request->hasfile('academic')) {
                foreach ($request->file('academic') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'academic';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
            }
            if ($request->hasfile('Professional')) {
                foreach ($request->file('Professional') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'Professional';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
            }
            if ($request->hasfile('certificates')) {
                foreach ($request->file('certificates') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'certificates';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
            }
            if ($request->hasfile('plans')) {
                foreach ($request->file('plans') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'plans';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
            }
            if ($request->hasfile('compliance')) {
                foreach ($request->file('compliance') as $key => $file) {
                    $imagefiles = new CancerApplicationfiles_model();
                    $path = $file->store('public/files');
                    $name = $file->getClientOriginalName();
                    $imagefiles->file_name = $name;
                    $imagefiles->store_path = $path;
                    $imagefiles->document_type = 'compliance';
                    $imagefiles->application_id = $apply->id;
                    $imagefiles->save();
                }
            }

            //dd($imagefiles);
        }
        //dd([$apply,$imagefiles]);
        return redirect()->back();
    }
}
