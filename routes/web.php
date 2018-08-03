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
// Training plan
Route::get('/trainingPlan', 'TrainingPlanController@index')->name('trainingPlan');
Route::get('/trainingPlan/{id}', 'TrainingPlanController@detail')->name('trainingPlan.detail');


Route::middleware(['auth'])->group(function () {
    // Exchange List
    Route::get('/exchangeList', 'ExchangeListController@index')->name('exchangeList');
    // -- USER PROFILE --
    // User profile
    Route::get('/profile/{id}', 'UserController@profile')->name('profile');
    // User edit-profile
    Route::get('/edit_profile/{id}', 'UserController@editProfile')->name('editProfile');
    // User update-profile
    Route::post('/updateProfile', 'UserController@updateProfile')->name('updateProfile');
    // -- END OF USER PROFILE --
    // Training plan --dashboard--
    Route::get('/trainingPlan/dashboard/{id}', 'TrainingPlanController@dashboard')->name('dashboard');
});