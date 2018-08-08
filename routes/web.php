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

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');
    // -- EXERCISES CRUD --
    Route::get('/admin/exercises', 'AdminController@exercises')->name('exercises');
    Route::get('/admin/exercises/show/{id}', 'ExerciseController@show')->name('exercise.create');
    Route::get('/admin/exercises/edit/{id}', 'ExerciseController@edit')->name('exercise.create');
    Route::post('/admin/exercises/update/{id}', 'ExerciseController@update')->name('exercise.update');
    Route::get('/admin/exercises/create', 'ExerciseController@create')->name('exercise.create');
    Route::post('/admin/exercises/store', 'ExerciseController@store')->name('exercise.store');
    Route::delete('/admin/exercises/delete/{id}', 'ExerciseController@destroy')->name('exercise.destroy');
});

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
    // Workout --index--
    Route::get('/trainingPlan/dashboard/workout/{id}', 'WorkoutController@index')->name('workout');
});