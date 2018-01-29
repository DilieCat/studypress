<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class leerlingBeheerController extends Controller
{
    //With this function the teachers can only acces this controller/all pages with this
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles');
    }

    public function index(){
    	//only retrieve the student profiles, the reason for that is so the teachers--
    	//can't edit the teachers.
    	$users = User::where('userlevel', '<', 1)->get();

    	return view('leerlingen', ['users' => $users]);
    }

    public function edit(Request $request){
    	//get user id from the url
    	$user_id = $request->query('userid');

    	//search for the user that have the equal id from the url
    	$user = User::where('id', '=', $user_id)->get();


    	return view('leerlingedit', ['user' => $user]);
    }

    public function update(Request $request, $id){

                $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'adres' => 'required',
            'woonplaats' => 'required',
            'telnummer' => 'required',
        ]);
        
        //get post data
        $postData = $request->all();

        //update post data
        $user = User::find($id)->update($postData);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->save();

        return redirect('/leerlingen');
    }
}
