<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\CandidateDetails;
use App\Category;
use App\Visa;
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
        return view('home');
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

    public function visaCategory()
    {
        $categorys = Category::get();
        return view('visaCategory',compact('categorys'));
    }
    public function viewVisaOffers()
    {
        $latest = Visa::latest()->first();
        $visas = Visa::get();
        return view('viewVisaOffers',compact('visas','latest'));
    }

    public function profile()
    {
        $user = User::where('user_id', Auth::id())->first();
        return view('layouts.visa24.agent.profile',compact('user'));
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

                    if (strlen($request->file('logo')) > 0) {
                        $oldImage = $agentU->logo;
                        $folderPath = 'images/agent/';
                        $aimage = $request->file('logo');
                        $fileName = $user . '-' . time() . '.' . $aimage->getClientOriginalExtension();
                        $img = Image::make($aimage)->resize(350, 360)->save(public_path('assets/img/agent/' . $fileName));
                        if ($fileName != null) {
                            $updateAgentImage = AgentDetails::where('user_id', $user)
                                ->update([
                                    'logo' => $fileName
                                ]);
                            if (file_exists(public_path() . '/' . $folderPath . '/' . $fileName)) {
                                if (file_exists(public_path() . '/' . $folderPath . $oldImage)) {
                                    unlink(public_path() . '/' . $folderPath . $oldImage);
                                }
                            }
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
        $candidates = User::where('role_id',2)->get();
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
//         $this->validate($request, [
//             'category_name' => 'required',
//             'image' => 'required|image'
//         ]);
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
        //return $categories;
        return view('layouts.visa24.agent.createVisa', compact('categories'));
    }
    public function postVisa(Request $request)
    {
        $visa = Visa::insertGetId([
            'title' => $request->title,
            'category_id' => $request->category,
            'agent_id' => Auth::user()->agent->agent_id,
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
            $fileName = $request->category. '-' .$currentDate. '.' . $aimage->getClientOriginalExtension();
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

    public function visaDetails($id)
    {
        $visa = Visa::where('visa_id', $id)->first();
        $visas = Visa::where('agent_id',$visa->agent_id)->inRandomOrder()->limit(2)->get();
        return view('visaDetails', compact('visa','visas'));
    }

    public function categoryVisa($id)
    {
        $latest = Visa::latest()->first();
        $visas = Visa::where('category_id',$id)->get();
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
            return $user;
        }
        else{
            return redirect()->back();
        }
    }

    public function agentviewVisa($id){
        $visas = Visa::Where('agent_id', $id)->get();
        return view('layouts.visa24.agent.viewVisa',compact('visas'));
    }

    public function editVisa($id)
    {
        $visa = Visa::where('visa_id',$id)->first();
        $categories = Category::get();
        return view('layouts.visa24.agent.editVisa', compact('visa','categories'));
    }
    public function updateVisa(Request $request, $id)
    {
        $visa = Visa::where('visa_id', $id)->first();
        $visa->title = $request->title;
        $visa->category_id = $request->category;
        $visa->agent_id = Auth::user()->agent->agent_id ;
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


    public function clear()
    {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        return redirect()->back();
    }
}
