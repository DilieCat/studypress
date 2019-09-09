<?php

namespace App\Http\Controllers;

use Request;
use App\profile;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\user; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klas_id = Auth::user()->klas_id;
        $klas = DB::select('select * from klas where id = ' . $klas_id); 

        return view('profile', ['klas_id' => $klas_id], ['klas' => $klas]);
    }

    public function edit() 
    { 

        $user = Auth::user();
    
        $user->telnummer = Request::input('tel');
        $user->email = Request::input('mail');

        $user->save();

       return redirect('/profile');
    } 
}
