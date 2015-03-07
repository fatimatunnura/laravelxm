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

// Provide controller methods with object instead of ID

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('/blog', 'BlogController@index');

Route::model('candidates', 'Task');
Route::model('voters', 'Project');
// Use slugs rather than IDs in URLs
Route::bind('candidates', function($value, $route) {
    return App\Candidate::where($value)->first();
});
Route::bind('voters', function($value, $route) {
    return App\Voters::where($value)->first();
});

Route::resource('voters', 'VotersController');
Route::resource('voters.candidates', 'CandidatesController');