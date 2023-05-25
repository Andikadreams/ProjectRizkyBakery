<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // // public function __construct()
    // // {
    //     $this->middleware('auth');
    // // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index_pelanggan');
    }

    public function adminHome()
    {
        return view('dashboard_admin');
    }

    public function pelangganHome()
    {
        return view('index_pelanggan');
    }
}
