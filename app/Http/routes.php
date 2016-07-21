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

Route::auth();


Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/plans', 'PlanController@index')->name('plans.index');
  Route::get('/plans/{plan}', 'PlanController@show')->name('plans.show');
  Route::get('/braintree/token', 'BraintreeTokenController@token')->name('braintree.token');

});
