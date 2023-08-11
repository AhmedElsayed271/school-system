<?php

use App\SmResultStore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showResultController;

if (config('app.app_sync')) {
    Route::get('/', 'LandingController@index')->name('/');
}

if (moduleStatusCheck('Saas')) {
    Route::group(['middleware' => ['subdomain'], 'domain' => '{subdomain}.' . config('app.short_url')], function ($routes) {
        require('tenant.php');
    });

    Route::group(['middleware' => ['subdomain'], 'domain' => '{subdomain}'], function ($routes) {
        require('tenant.php');
    });
}




Route::get('testing', function () {



    // $result = SmResultStore::with(['studentInfo','subject'])->where('email','student_64d3e37bc884d@infixedu.com')->get();


    $result = SmResultStore::with(['studentInfo','subject'])->whereHas('studentInfo', function($q){
        $q->where('email', '=', 'student_64d3e37bc884d@infixedu.com');
    })->get();

    return $result[0];

    return "test test";

});

Route::get('tester', function () {


    return view("backEnd.Result.pdf-templade");
});


Route::group(['middleware' => ['subdomain']], function ($routes) {
    require('tenant.php');
});

Route::get('migrate', function () {
    if(Auth::check() && Auth::id() == 1){
        \Artisan::call('migrate', ['--force' => true]);
        \Brian2694\Toastr\Facades\Toastr::success('Migration run successfully');
        return redirect()->to(url('/admin-dashboard'));
    }
   abort(404);
});
