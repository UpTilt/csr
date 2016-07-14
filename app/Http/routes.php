<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/test', [
   'as' => 'test',
    'uses' => 'HomeController@getTest'
]);

Route::get('/testIndex', [
    'as' => 'test',
    'uses' => 'HomeController@testIndex'
]);

Route::get('/route', function () {
    $user = \App\User::find(1);
    dd($user->metricsGraphWidthForType(7));
});

Route::get('/route2', function () {
    $user = \App\User::find(1);
    
    //$activities = \App\Activity::where('created_at', '>=', \Carbon\Carbon::today())->byCurrentUser()->get();

    $activities = $user->activitiesEnteredToday;
    
    
    foreach($activities as $act) {
        $act->te();
    }

    //$activities->where('created_at', '>=', \Carbon\Carbon::today());
    
    dd($activities);
});
