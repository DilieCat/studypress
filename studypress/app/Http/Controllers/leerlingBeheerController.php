<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class leerlingBeheerController extends Controller
{
    public function index(){

    	$users = User::where('userlevel', '<', 1)->get();

    	return view('leerlingen', ['users' => $users]);
    }

    public function edit(Request $request){

    	$user_id = $request->query('userid');
    	$user = User::where('id', '=', $user_id)->get();
    	return view('leerlingedit', ['user' => $user]);
    }
}
