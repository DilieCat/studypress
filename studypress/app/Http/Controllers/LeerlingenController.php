<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\user; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests;

class LeerlingenController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

	//this function creates new users in the database
    public function create(Request $request)
    {
        //gets file from the upload.blade
        $upload=$request->file('upload-file');

        //getRealPath gets the whole file path from you're pc
        $filePath=$upload->getRealPath();

        //fopen is to open the file, it'll need the filepath to do so. The 'r' stands for read.
        $file=fopen($filePath, 'r');

        //fgetcsv will read the file you just opened and stored in the variable $file. All the information in the csv file is stored here.
        $header= fgetcsv($file);

        //looping through other columns
        while($columns=fgetcsv($file))
        {
           $data= array_combine($header, $columns);
        }

           // Table update
           $name=$data['name'];
           $email=$data['email'];
           $password=$data['password'];
           $telnummer=$data['telnummer'];
           $adres=$data['adres'];
           $woonplaats=$data['woonplaats'];
           $ov_nummer=$data['ov_nummer'];
           $cohort=$data['cohort'];
           $klas_id=$data['klas_id'];
           $opleiding_id=$data['opleiding_id'];
           $userlevel=$data['userlevel'];

           //after all the information has been put into the variables the updating begins
           //it updates the user table> name with the variable $name wich holds the 'name' information from the csv file
           $user= User::firstOrNew([
           	'telnummer'=>$telnummer,
           	'ov_nummer'=>$ov_nummer,
           	'klas_id'=>$klas_id,
           	'opleiding_id'=>$opleiding_id,
           	'userlevel'=>$userlevel]);
           $user->name=$name;
           $user->email=$email;
           $user->password=$password;
           $user->adres=$adres;
           $user->woonplaats=$woonplaats;
           $user->cohort=$cohort;
           $user->save();

    		return redirect('/upload');
    }
}