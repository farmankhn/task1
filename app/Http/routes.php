<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','Base@index');
Route::get('about-us','Main@about');
Route::get('services','Main@services');
Route::get('contact','Main@contact');
Route::get('portfolio','Main@portfolio');
Route::get('portfolio-item/{id}','Main@showPortfolio');
Route::get('blog','Main@blog');
Route::get('blog/{id}','Main@show');
Route::get('faq','Main@faq');

Route::get('weather','Main@weather');
Route::post('getDetails','Main@getDetails');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



