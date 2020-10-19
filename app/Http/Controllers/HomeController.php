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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['logs'] = \DB::table('logs')
                        ->get();
        return view('home', $data);
    }
    
    // public function logs()
    // {
        
    //     return view('logs.logs', $data);
    // }
}
