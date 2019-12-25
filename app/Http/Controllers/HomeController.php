<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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


    public function clear()
    {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        return redirect()->back();
    }
}
