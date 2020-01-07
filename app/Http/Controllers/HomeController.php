<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\User;
use App\Agent;
use App\AgentDetails;
use Auth;

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
        //dd($request);
        // $this->validate($request, [
        //     'id' => 'required',
        //     'full_name' => 'required',
        //     'username' => 'required',
        //     'agent_name' => 'required|unique:agents',
        //     'title' => 'required',
        //     'details' => 'required',
        //     'license' => 'required',
        //     'location' => 'required',
        //     'logo' => 'required|image'
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

            if($user){
                $agent = Agent::insertGetId([
                ]);
            }
            
        } else {

        }
        
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
