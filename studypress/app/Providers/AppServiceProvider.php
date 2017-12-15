<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    function boot()
{
    view()->composer('*', function ($view) 
    {
        Schema::defaultStringLength(191);

        //We look in the user table for the opleiding_id in the user table to compare it to the ID in the opleiding table.
        if(Auth::check()){
        $opleiding_id = Auth::user()->opleiding_id;
        $opleiding = DB::select('select * from opleiding where id = ' . $opleiding_id);

        $klas_id = Auth::user()->klas_id;
        $klas = DB::select('select * from klas where id = ' . $klas_id);
     

        
        View::share('opleiding', $opleiding);
        View::share('klas', $klas);
           }


    });
}



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
