<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class HomeController extends Controller
{

    public $timestamps = false; 
 
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        return view('welcome', ["user_id"=>$user_id]);
    }
}
