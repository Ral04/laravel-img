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

/*
Route::get('/', function () {
    return view('welcome');
});
*/




Route::get('/', ['as' => '', 'uses' => 'ImageAssistant@index']);
Route::get('profile', ['as' => 'profile', 'uses' => 'ImageAssistant@profile']);
Route::get('enumeration', ['as' => 'enumeration', 'uses' => 'ImageAssistant@enumeration']);

// Ajax route
// User del
Route::post('linkdel', array('before'=>'csrf-ajax', 'as'=>'linkdel', 'uses'=>'ImageAssistant@deluser'));
// Up photo
Route::post('upimg', array('before'=>'csrf-ajax', 'as'=>'upimg', 'uses'=>'ImageAssistant@upimg'));
// Get photo
Route::post('getimgs', array('before'=>'csrf-ajax', 'as'=>'getimgs', 'uses'=>'ImageAssistant@getimgs'));
// Del photo
Route::post('delimgs', array('before'=>'csrf-ajax', 'as'=>'delimgs', 'uses'=>'ImageAssistant@delimgs'));


Route::auth();

//Route::get('/home', 'HomeController@index');