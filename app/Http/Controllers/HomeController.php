<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\CandidateDetails;
use App\Category;
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
        return view('viewVisaOffers');
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
            if(!$agent)
            {
                $user = User::where('user_id', $request->id)->first();
                $user->full_name = $request->full_name;
                $user->username = $request->username;
                //$user->updated_at = getTimestamp();
                $user->save();

                if($user) {
                    $agentC = Agent::insertGetId([
                        'user_id' => $user->user_id,
                        'agent_name' => $request->agent_name,
                        'status' => '1',
                    ]);
                    if($agentC){
                        $agentDetais = AgentDetails::insert([
                            'agent_id' => $agentC,
                            'user_id' => $user->user_id,
                            'agent_name' => $request->agent_name,
                            'title' => $request->title,
                            'details' => $request->details,
                            'license' => $request->license,
                            'location' => $request->location,
                        ]);
                        //Image upload and update path at Agent
                        if ($request->hasFile('logo'))
                        {
                            $aimage = $request->file('logo');
                            $fileName = $user. '-' .time() . '.' . $aimage->getClientOriginalExtension();
                            Image::make($aimage)->resize(350, 360)->save(public_path('assets/img/agent' . $fileName));
                            if($fileName != null){
                                $agentDetais = AgentDetails::where('agent_id', $agentC)
                                    ->update([
                                        'logo' => $fileName
                                    ]);
                            }
                        }
                        DB::commit();
                    } else{
                        Session::flash('error', 'Something Went Wrong !!');
                        DB::rollBack();
                    }
                    Session::flash('success', 'Agent Update Successfull !!');
                    DB::commit();
                } else {
                    Session::flash('error', 'Something Went Wrong !!');
                    DB::rollBack();
                }
            } else {
                $user = User::where('user_id', $request->id)->first();
                $user->full_name = $request->full_name;
                $user->username = $request->username;
                $user->save();

                if($user){
                    $agent->agent_name = $request->agent_name;
                    $agent->status = 1;
                    $agent->save();

                    $agentU = AgentDetails::where('user_id', $user->user_id)->first();
                    $agentU->agent_name = $request->agent_name;
                    $agentU->title = $request->title;
                    $agentU->details = $request->details;
                    $agentU->license = $request->license;
                    $agentU->location = $request->location;
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

                    DB::commit();

                } else {
                    Session::flash('error', 'Something Went Wrong !!');
                    DB::rollBack();
                }
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
             'created_at' => Date('Y-m-d')
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
        return view('layouts.visa24.admin.viewVisaCategoryList',comapact('categories'));
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
