<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class securityTestController extends Controller
{
    public function index(Request $request){

    	$answer = null;
    	if ($request->has('test1')) {
            $boolean = true;
            $answer = $request->input('test1');
        } else {
        	$boolean = false;
        }

    	return view('testCase', ['boolean' => $boolean], ['answer' => $answer]);
    }
}
