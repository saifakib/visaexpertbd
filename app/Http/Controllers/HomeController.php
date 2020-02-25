<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\CandidateDetails;
use App\Category;
use App\Contact;
use App\Visa;
use App\Blog;
use App\ApplyVisa;
use Cassandra\Date;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\User;
use App\Agent;
use App\AgentDetails;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visas = Visa::paginate(5);
        $latest = Visa::latest()->first();
        $categorys = Category::get();
        return view('home',compact('visas','latest','categorys'));
    }

    public function agentStart()
    {
        return view('agentStart');
    }

    public function candidateStart()
    {
        return view('candidateStart');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function ourServices()
    {
        return view('ourServices');
    }

    public function contactUs()
    {
        return view('contactUs');
    }
    public function contactUsPost(Request $request)
    {
//        {"_token":"DoiMDenkEWxDCT8M4t9ngb7iGlYjjUxIBpHGhUiw",
//            "name":"testing candidate","email":"azim@gmail.com","subect":"fd","message":"v"}
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->created_at = Carbon::now();
        $contact->save();

        return redirect()->route('contact-us');
    }

    public function visaCategory()
    {
        $categorys = Category::get();
        return view('visaCategory',compact('categorys'));
    }
    public function viewVisaOffers()
    {
        $latest = Visa::latest()->first();
        $visas = Visa::paginate(10);
        return view('viewVisaOffers',compact('visas','latest'));
    }

    public function profile()
    {
        $user = User::where('user_id', Auth::id())->first();
        if($user->role_id == 1)
        {
            return view('layouts.visa24.agent.profile',compact('user'));
        }else {
            return view('layouts.visa24.candidate.profile',compact('user'));
        }

    }
    public function editProfile($id) {
        $user = User::where('user_id', $id)->first();
        if($user->role_id == 1) {
            return view('layouts.visa24.agent.editProfile',compact('user'));
        } else {
            return view('layouts.visa24.candidate.editProfile',compact('user'));
        }

    }

    public function updateProfile(Request $request) {
        //return $request;
        // $this->validate($request, [
        //     'id' => 'required',
        //     'full_name' => 'required',
        //     'username' => 'required',
        //     'agent_name' => 'required|unique:agents',
        //     'title' => 'required',
        //     'details' => 'required',
        //     'license' => 'required',
        //     'location' => 'required',
        //     'logo' => 'required|mimes:jpeg,jpg,JPG,bmp,png,wepp'
        // ]);
        $user = User::where('user_id', $request->id)->first();
        if($user->role_id == 1)
        {
            $agent = Agent::where('user_id', $request->id)->first();
            DB::beginTransaction();
            if($agent)
            {
                $user = User::where('user_id', $request->id)->first();
                $user->full_name = $request->full_name;
                $user->username = $request->username;
                $user->updated_at = carbon::now();
                $user->save();

                DB::commit();

                if($user) {
                    $agent->agent_name = $request->agent_name;
                    $agent->status = 1;
                    $agent->updated_at = Carbon::now();
                    $agent->save();

                    $agentU = AgentDetails::where('user_id', $user->user_id)->first();
                    $agentU->agent_name = $request->agent_name;
                    $agentU->title = $request->title;
                    $agentU->details = $request->details;
                    $agentU->license = $request->license;
                    $agentU->location = $request->location;
                    $agentU->updated_at = Carbon::now();
                    $agentU->save();

                    if ($request->hasFile('logo'))
                    {
                        $aimage = $request->file('logo');
                        $fileName =$request->id . '-' .$request->agent_name. '-' .time() . '.' . $aimage->getClientOriginalExtension();
                        Image::make($aimage)->resize(225, 225)->save(public_path('assets/img/visaAgent/' . $fileName));
                        if($fileName != null){
                            AgentDetails::where('user_id', $user->user_id)
                                ->update([
                                    'logo' => $fileName
                                ]);
                        }
                    }
                    Session::flash('success', 'Agent Update Successfull !!');
                    DB::commit();
                } else {
                    Session::flash('error', 'Something Went Wrong !!');
                    DB::rollBack();
                }
            } else {
                Session::flash('error', 'Something Went Wrong !!');
                DB::rollBack();
            }

        } else {
            $candidate = Candidate::where('user_id', $request->id)->first();
            DB::beginTransaction();
            if($candidate)
            {
                $user = User::where('user_id', $request->id)->first();
                $user->full_name = $request->full_name;
                $user->username = $request->username;
                $user->updated_at = Date('Y-m-d');
                $user->save();

                if($user){
                    $candidate->full_name = $request->full_name;
                    $candidate->user_name = $request->username;
                    $candidate->updated_at = Date('Y-m-d');
                    $candidate->status = 1;
                    $candidate->save();

                    $candidateU = CandidateDetails::where('user_id', $user->user_id)->first();
                    $candidateU->full_name = $request->full_name;
                    $candidateU->user_name = $request->username;
                    $candidateU->DOB = $request->dob;
                    $candidateU->occupation = $request->occupation;
                    $candidateU->presently_in_job = $request->presently_in_job;
                    $candidateU->sector = $request->sector;
                    $candidateU->job_experience = $request->job_experience;
                    $candidateU->skill = $request->skill;
                    $candidateU->visa_need = $request->visa_need;
                    $candidateU->visa_on_passport = $request->visa_on_passport;
                    $candidateU->visa_type = $request->visa_type;
                    $candidateU->expired_passport_date = $request->expired_passport_date;
                    $candidateU->country_apply = $request->country_apply;
                    $candidateU->budget = $request->budget;
                    $candidateU->present_location = $request->present_location;
                    $candidateU->permanent_location = $request->permanent_location;
                    $candidateU->education = $request->education;
                    $candidateU->bio = $request->bio;
                    $candidateU->updated_at = Carbon::now();
                    $candidateU->save();

                    if (strlen($request->file('candidate_image')) > 0) {
                        $oldImage = $candidateU->candidate_image;
                        $folderPath = 'images/candidate/';
                        $aimage = $request->file('candidate_image');
                        $fileName = $user . '-' . time() . '.' . $aimage->getClientOriginalExtension();
                        $img = Image::make($aimage)->resize(350, 360)->save(public_path('assets/img/candidate' . $fileName));
                        if ($fileName != null) {
                            $updateAgentImage = CandidateDetails::where('user_id', $user)
                                ->update([
                                    'candidate' => $fileName
                                ]);
                            if (file_exists(public_path() . '/' . $folderPath . '/' . $fileName)) {
                                if (file_exists(public_path() . '/' . $folderPath . $oldImage)) {
                                    unlink(public_path() . '/' . $folderPath . $oldImage);
                                }
                            }
                        }
                    }

                    DB::commit();

                } else {
                    Session::flash('error', 'Something Went Wrong !!');
                    DB::rollBack();
                }
            } else {
                Session::flash('error', 'Something Went Wrong !!');
                DB::rollBack();
            }
        }

        return redirect()->route('profile');

    }

    public function candidateResumes() {
        $candidates = User::where('role_id',2)->paginate(10);
        //return $candidates;
        return view('candidateResumes',compact('candidates'));
    }

    public function candidateResumeDetails($id)
    {
        $candidate = Candidate::where('user_id', $id)->first();
        return view('candidateResumeDetails', compact('candidate'));
    }

    public function createVisaCategory() {
        return view('layouts.visa24.admin.createVisaCategory');
    }
    public function postVisaCategory(Request $request)
    {

         $this->validate($request, [
             'category_name' => 'required',
             'image' => 'required|image'
         ]);
         $category = Category::insertGetId([
             'category_name' => $request->category_name,
             'created_by' => Auth::id(),
             'created_at' => Carbon::now(),
         ]);
        //Image upload
        if ($request->hasFile('image'))
        {
            $aimage = $request->file('image');
            $fileName = $request->category_name. '-' .time() . '.' . $aimage->getClientOriginalExtension();
            Image::make($aimage)->resize(225, 225)->save(public_path('assets/img/visaCategories/' . $fileName));
            if($fileName != null){
                 Category::where('category_id', $category)
                    ->update([
                        'image' => $fileName
                    ]);
            }
        }
        Session::flash('success', 'Category Create Successfull !!');
        return redirect()->route('visacategory');
    }

    public function visaCategories()
    {
        $categories = Category::get();
        return view('layouts.visa24.admin.viewVisaCategoryList',compact('categories'));
    }

    public function editCategory($id)
    {
        $category = Category::where('category_id', $id)->first();
        return view('layouts.visa24.admin.editCategory',compact('category'));
    }

    public function updateCategory(Category $id, Request $request)
    {
        //return $id + $request;
        $id->category_name = $request->category_name;
        $id->updated_at = Carbon::now();
        $id->save();
        if ($request->hasFile('image'))
        {
            $oldImage = $id->image;
            $folderPath = 'assets/img/visaCategories';
            if (file_exists(public_path() . '/' . $folderPath . $oldImage)) {
                unlink(public_path() . '/' . $folderPath . $oldImage);
            }

            $newImage = $request->file('image');
            $fileName = $request->category_name. '-' .time() . '.' . $newImage->getClientOriginalExtension();
            Image::make($newImage)->resize(225, 225)->save(public_path('assets/img/visaCategories/' . $fileName));
            if($fileName != null){
                 $id->image = $fileName;
                 $id->save();
            }
        }
        return redirect()->route('admin.visaCategories');
    }

    public function deleteCategorie(Category $id)
    {
        $id->delete();
        return redirect()->back();
    }





    public function createVisa()
    {
        $categories = Category::get();
        $agents = Agent::get();
        //return $categories;
        return view('layouts.visa24.admin.createVisa', compact('categories','agents'));
    }
    public function postVisa(Request $request)
    {
        $visa = Visa::insertGetId([
            'title' => $request->title,
            'category_id' => $request->category,
            'agent_id' => $request->agent_id,
            'visa_authority' => $request->visa_authority,
            'offered_country' => $request->offered_country,
            'per_month_salary' => $request->per_month_salary,
            'contact_years' => $request->contact_years,
            'processing_time' => $request->processing_time,
            'visa_payment' => $request->visa_payment,
            'age_limit' => $request->age_limit,
            'education' => $request->education,
            'language' => $request->language,
            'language_test' => $request->language_test,
            'study_gap' => $request->study_gap,
            'discount_visa24_clint' => $request->discount_visa24_clint,
            'payment_system' => $request->payment_system,
            'security_type' => $request->security_type,
            'visa_possible_rate'  => $request->visa_possible,
            'decription'  => $request->decription,
            'created_at' => Carbon::now(),
        ]);

        //Image upload
        if ($request->hasFile('logo'))
        {
            $aimage = $request->file('logo');
            $currentDate = Carbon::now()->toDateString();
            $fileName = $request->category. '-' .$request->agent_id. '-' .$currentDate. '.' . $aimage->getClientOriginalExtension();
            Image::make($aimage)->resize(225, 225)->save(public_path('assets/img/visaOffers/' . $fileName));
            if($fileName != null){
                 Visa::where('visa_id', $visa)
                    ->update([
                        'logo' => $fileName
                    ]);
            }
        }
        Session::flash('success', 'Visa Post Successfull !!');
        return redirect()->back();
    }



    public function visaAgents()
    {
        $agents = Agent::get();
        return view('visaAgents',compact('agents'));
    }

    public function visaAgent($id) {
        $agent = Agent::where('agent_id', $id)->first();
        return view('visaAgentDetails',compact('agent'));
    }
    public function agentVisa($id)
    {
        $visas = Visa::where('agent_id',$id)->paginate(10);
        $latest = Visa::where('agent_id',$id)->first();
        return view('viewVisaOffers',compact('visas','latest'));
    }

    public function visaDetails($id)
    {
        $visa = Visa::where('visa_id', $id)->first();
        $visas = Visa::where('agent_id',$visa->agent_id)->inRandomOrder()->limit(2)->get();
        return view('visaDetails', compact('visa','visas'));
        //dd($visa);
    }

    public function categoryVisa($id)
    {
        $latest = Visa::latest()->first();
        $visas = Visa::where('category_id',$id)->paginate(10);
        return view('viewVisaOffers',compact('visas','latest'));
    }

    public function control()
    {
        $user = User::where('user_id',Auth::id())->first();
        if($user->role_id == 0)
        {
            return redirect()->route('admin.visaCategories');
        }elseif ($user->role_id == 1 )
        {
            return redirect()->route('profile');
        } elseif($user->role_id == 2)
        {
            return redirect()->route('profile');
        }
        else{
            return redirect()->back();
        }
    }

    public function agentviewVisa($id){
        $visas = Visa::Where('agent_id', $id)->get();
        return view('layouts.visa24.agent.viewVisa',compact('visas'));
    }

    public function adminviewVisa() {
        $visas = Visa::get();
        // return $visas;
        return view('layouts.visa24.admin.viewVisa', compact('visas'));
    }

    public function editVisa($id)
    {
        $visa = Visa::where('visa_id',$id)->first();
        $categories = Category::get();
        return view('layouts.visa24.admin.editVisa', compact('visa','categories'));
    }
    public function updateVisa(Request $request, $id)
    {
        $visa = Visa::where('visa_id', $id)->first();
        $visa->title = $request->title;
        $visa->category_id = $request->category;
        //$visa->agent_id = Auth::user()->agent->agent_id ;
        $visa->visa_authority = $request->visa_authority;
        $visa->offered_country = $request->offered_country;
        $visa->per_month_salary =$request->per_month_salary ;
        $visa->contact_years = $request->contact_years;
        $visa->processing_time = $request->processing_time;
        $visa->visa_payment = $request->visa_payment;
        $visa->age_limit = $request->age_limit;
        $visa->education = $request->education;
        $visa->language = $request->language;
        $visa->language_test = $request->language_test;
        $visa->study_gap = $request->study_ga;
        $visa->discount_visa24_clint = $request->discount_visa24_clint;
        $visa->payment_system = $request->payment_system;
        $visa->security_type = $request->security_type;
        $visa->visa_possible_rate = $request->visa_possible;
        $visa->decription = $request->decription;
        $visa->updated_at = Carbon::now();
        $visa->save();

        if ($request->hasFile('logo'))
        {
            $oldImage = $visa->logo;
            $folderPath = 'assets/img/visaOffers/';
            if (file_exists(public_path() . '/' . $folderPath . $oldImage)) {
                unlink(public_path() . '/' . $folderPath . $oldImage);
            }

            $newImage = $request->file('logo');
            $currentDate = Carbon::now()->toDateString();
            $fileName = $request->category. '-' .$currentDate. '.' . $newImage->getClientOriginalExtension();
            Image::make($newImage)->resize(225, 225)->save(public_path('assets/img/visaOffers/' . $fileName));
            if($fileName != null){
                $visa->logo = $fileName;
                $visa->save();
            }
        }
        Session::flash('success', 'Visa Update Successfull !!');
        return redirect()->back();
    }

    public function deleteVisa(Visa $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function applyVisa($idv)
    {
        if(!Auth::user())
        {
            return redirect()->route('login');
        } else {
            if(Auth::user()->role->role_id == 0) {
                return redirect()->back();
            } elseif(Auth::user()->role->role_id == 1){
                return redirect()->back();
            } else {
                $visa = Visa::where('visa_id', $idv)->first();
                return view('applyVisa',compact('visa'));
            }
        }
    }
    public function applyVisaPost(Request $request, $id)
    {
        if(!Auth::user())
        {
            return redirect()->route('login');
        } else {
            $visa = Visa::where('visa_id', $id)->first();
            ApplyVisa::insert([
                'visa_id' => $id,
                'candidate_id' => Auth::id(),
                'agent_id' => $visa->agent_id,
                'mobile' => $request->mobile,
                'apply_date' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);
        }
        return redirect()->route('viewvisaoffers');
    }
    public function viewApplicant($id)
    {
        $applies = ApplyVisa::where('agent_id',$id)->get();
        return view('layouts.visa24.agent.viewApplicant',compact('applies'));
    }
    public function deleteApplicant(ApplyVisa $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function agents() {
        $agents = AgentDetails::get();
        return view('layouts.visa24.admin.viewAgent',compact('agents'));
    }
    public function candidates() {
        $candidates = CandidateDetails::get();
        return view('layouts.visa24.admin.viewCandidate',compact('candidates'));
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('layouts.visa24.admin.viewContact',compact('contacts'));
    }

    public function deleteAgent(User $id)
    {
        $id->delete();
        return redirect()->back();
    }
    public function deleteContact(Contact $id)
    {
        $id->delete();
        return redirect()->back();
    }
    public function deleteCandidate(User $id)
    {
        $id->delete();
        return redirect()->back();
    }


    public function extraOne()
    {
        return view('signUpFreeGetVisa');
    }
    public function extraTwo()
    {
        return view('hireUsForVisa');
    }
    public function extraThree()
    {
        return view('purchaseTicket');
    }

    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }

    public function createPost()
    {
        return view('layouts.visa24.admin.createPost');
    }

    public function blog()
    {
        $blogs = Blog::get();
        return view('blog',compact('blogs'));
    }

    public function postBlog(Request $request)
    {

        $slug = preg_replace('/\s+/u', '-', trim($request->title));
        $post = Blog::insertGetId([
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->body,
            'Created_at' => Carbon::now()
            ]);
        //Image upload
        if ($request->hasFile('image'))
        {
            $aimage = $request->file('image');
            $currentDate = Carbon::now()->toDateTimeLocalString();
            $random = mt_rand(00000, 99999);
            $fileName = $random . $currentDate. '.' . $aimage->getClientOriginalExtension();
            Image::make($aimage)->resize(300, 350)->save(public_path('assets/img/visaCategories/' . $fileName));
            if($fileName != null){
                Blog::where('post_id', $post)
                    ->update([
                        'image' => $fileName
                    ]);
            }
        }
        return redirect()->back()->with('success','Blog Posted');
    }

    public function blogPosts()
    {
        $blogs = Blog::all();
        return view('layouts.visa24.admin.viewPosts',compact('blogs'));

    }

    public function editPost(Request $request)
    {
        $blog = Blog::where('post_id',$request->id)->get();

        return view('layouts.visa24.admin.editPost',compact('blog'));;

    }
    public function updatePost(Request $request)
    {
        return $request->id;
    }
    public function deletePost(Request $request)
    {
        $post = Blog::where('post_id', $request->id)->delete();
        return redirect()->back();

    }
    public function singlePost(Request $request)
    {
        $post = Blog::where('post_id',$request->id)->first();
        return view('singlePost',compact('post'));
    }

    public function clear()
    {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        return redirect()->back();
    }

    public function media()
    {
    }
}
