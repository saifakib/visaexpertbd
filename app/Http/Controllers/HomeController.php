<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\User;
use App\Agent;
use App\AgentDetails;
use DateTime;
use Image;
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
        return view('visaCategory');
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
        return view('layouts.visa24.agent.editProfile',compact('user'));
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
                        Image::make($aimage)->resize(350, 360)->save(public_path('images/agent/' . $fileName));
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
                    $img = Image::make($aimage)->resize(350, 360)->save(public_path('images/agent/' . $fileName));
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
        return redirect()->route('profile');
        
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
