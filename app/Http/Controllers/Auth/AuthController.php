<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\AgentDetails;
use Auth;
use App\Candidate;
use App\CandidateDetails;
use DB;

class AuthController extends Controller
{
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'type' => 'required'

        ]);

        DB::beginTransaction();
        $user = User::insertGetId([
                'username' => $request->username,
                'full_name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role_id' => $request->type,
                'remember_token' => $request->_token,
        ]);

         if($user && $request->type == 2)
         {
             if($user)
             {
                 $candidate = Candidate::insertGetId([
                     'user_id' => $user,
                     'user_name' => $request->username,
                     'full_name' => $request->name,
                     'status' => 1,
                     'created_at' => date('Y-m-d')
                 ]);
                 DB::commit();

                 if($candidate)
                 {
                     $candidatedetails = CandidateDetails::insert([
                         'candidate_id' => $candidate,
                         'user_id' => $user,
                         'user_name' => $request->username,
                         'full_name' => $request->name,
                         'created_at' => date('Y-m-d')
                     ]);
                     Session::flash('success', 'Candidate Create Successfull !!');
                     DB::commit();
                 }
             } else {
                 DB::rollback();
             }
         } elseif($user && $request->type == 1) {
             if($user)
             {
                 $agent = Agent::insertGetId([
                     'user_id' => $user,
                     'agent_name' => "Agent Name",
                     'status' => 1,
                     'created_at' => date('Y-m-d')
                 ]);
                 DB::commit();

                 if($agent)
                 {
                     $agentdetails = AgentDetails::insert([
                         'agent_id' => $agent,
                         'user_id' => $user,
                         'agent_name' => "Agent Name",
                         'title' => 'Title',
                         'details' => 'Details',
                         'license' => 'license',
                         'location' => 'Dhaka',
                         'logo' => 'diamond.png',
                         'created_at' => date('Y-m-d')
                     ]);
                     Session::flash('success', 'Candidate Create Successfull !!');
                     DB::commit();
                 }
             } else {
                 DB::rollback();
             }
         } else {
             DB::rollback();
         }

        return redirect()->route('login');


        // DB::beginTransaction();
        // if($request->type == 1)
        // {
        //     $user = User::insertGetId([
        //         'username' => $request->username,
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => bcrypt($request->password),
        //         'role_id' => $request->type,
        //         'remember_token' => $request->_token,

        //     ]);
        //     DB::commit();

        //     if($user)
        //     {
        //         $agent = Agent::insertGetId([
        //             'user_id' => $user,
        //         ]);
        //         DB::commit();

        //         if($agent)
        //         {
        //             $agentdetails = AgentDetails::insert([
        //                 'agent_id' => $agent,
        //                 'user_id' => $user,

        //             ]);
        //         }
        //     } else {
        //         DB::rollback();
        //     }
        // } else {

        // }
        // $user = new User ();
        // $user->name = $request->get ( 'username' );
        // $user->email = $request->get ( 'email' );
        // $user->password = Hash::make ( $request->get ( 'password' ) );
        // $user->remember_token = $request->get ( '_token' );
        // $user->save ();
        // return redirect ( '/' );
    }

    public function postLogin(Request $request) {

        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }
            // return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
            return redirect()->route('home');
    }



    public function getLogout() {
        //Session::flush ();
        Auth::logout ();
        return redirect()->route('login');
    }
}
