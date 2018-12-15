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
    return view('welcome');
});

Route::get('/biodegradable', function () {
	return view('decomposable');
});
Route::post('/biodegradable/rgsubmit','whichdustbinController@checkDB');
Route::get('/biodegradable/checkmaterial/{object}/{material}', ['uses' => 'whichdustbinController@checkMaterial']);


Route::get('/location', function () {
	return view('discard');
});
Route::get('/location/display/{category}/{subcategory}',['uses' => 'discardController@getlocation']);
Route::get('/location/{id}/{item}', ['uses' => 'discardController@subcategories']);
Route::get('/details/{id}', ['uses' => 'discardController@details']);
Route::post('/usersignup','userlogin@signup');
Route::post('/userlogin','userlogin@login');
Route::get('/logout','userlogin@logout');

Route::post('/addcomments/{refid}', ['uses' => 'userlogin@addcomments']);
