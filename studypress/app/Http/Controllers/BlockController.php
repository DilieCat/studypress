<?php

namespace App\Http\Controllers;

use App\block;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('block');
    }

    public function getBlock1()
    {
    	return view('block1');
    }

    public function getBlock2()
    {
    	return view('block2');
    }

    public function getBlock3()
    {
    	return view('block3');
    }

    public function getBlock4()
    {
    	return view('block4');
    }
}
