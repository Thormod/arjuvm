<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trainingPlans', function () {
    return view('classes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Exchange List
Route::get('/exchangeList', 'ExchangeListController@index')->name('exchangeList')->middleware('auth');
// Training plan
Route::get('/trainingPlan', 'TrainingPlanController@index')->name('trainingPlan');
Route::get('/trainingPlan/{id}', 'TrainingPlanController@detail')->name('trainingPlan.detail');
// User profile
Route::get('/profile/{id}', 'UserController@profile')->name('profile')->middleware('auth');
