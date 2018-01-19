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
            if (Auth::check())
            {
                $opleiding = DB::table('opleiding')->where('id', Auth::user()->opleiding_id)->first();
                $klas = DB::table('klas')->where('id', Auth::user()->klas_id)->first();
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

