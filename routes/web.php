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
    // -- USERS CRUD --
    Route::get('/admin/users', 'AdminController@users')->name('admin.users');
    Route::get('/admin/users/create', 'UserController@create')->name('users.create');
    Route::post('/admin/users/store', 'UserController@store')->name('users.store');
    Route::post('/admin/users/updateRole/{id}', 'UserController@updateRole')->name('users.updateRole');
    Route::get('/admin/users/show/{id}', 'UserController@show')->name('users.show');              
    Route::delete('/admin/users/delete/{id}', 'UserController@destroy')->name('users.destroy');
    Route::get('/admin/users/plan/show/{id}', 'UserController@showPlan')->name('users.show');    
    Route::get('/admin/users/plan/edit/{id}', 'UserController@editPlan')->name('users.edit');    
    Route::post('/admin/users/plan/update/{id}', 'UserController@updatePlan')->name('users.update'); 
    // -- EXERCISES CRUD --
    Route::get('/admin/exercises', 'AdminController@exercises')->name('admin.exercises');
    Route::get('/admin/exercises/show/{id}', 'ExerciseController@show')->name('exercise.show');
    Route::get('/admin/exercises/edit/{id}', 'ExerciseController@edit')->name('exercise.edit');
    Route::post('/admin/exercises/update/{id}', 'ExerciseController@update')->name('exercise.update');
    Route::get('/admin/exercises/create', 'ExerciseController@create')->name('exercise.create');
    Route::post('/admin/exercises/store', 'ExerciseController@store')->name('exercise.store');
    Route::delete('/admin/exercises/delete/{id}', 'ExerciseController@destroy')->name('exercise.destroy');
    // -- EXCHANGE LIST CRUD --
    Route::get('/admin/exchangeList', 'AdminController@exchangeList')->name('admin.exchangeList');
    Route::get('/admin/exchangeList/show/{id}', 'ExchangeListController@show')->name('exchangeList.show');
    Route::get('/admin/exchangeList/edit/{id}', 'ExchangeListController@edit')->name('exchangeList.edit');
    Route::post('/admin/exchangeList/update/{id}', 'ExchangeListController@update')->name('exchangeList.update');
    Route::get('/admin/exchangeList/create', 'ExchangeListController@create')->name('exchangeList.create');
    Route::post('/admin/exchangeList/store', 'ExchangeListController@store')->name('exchangeList.store');
    Route::delete('/admin/exchangeList/delete/{id}', 'ExchangeListController@destroy')->name('exchangeList.destroy');
    // -- WORKOUT LIST CRUD --
    Route::get('/admin/workout', 'AdminController@workouts')->name('admin.workout');
    Route::get('/admin/workout/show/{id}', 'WorkoutController@show')->name('workout.show');
    Route::get('/admin/workout/edit/{id}', 'WorkoutController@edit')->name('workout.edit');
    Route::get('/admin/workout/exercise/edit/{id}', 'WorkoutController@editExercises')->name('workout.editExercises');
    Route::post('/admin/workout/exercise/update/{id}', 'WorkoutController@updateExercises')->name('workout.updateExercises');
    Route::delete('/admin/workout/exercise/destroy/{id}', 'WorkoutController@destroyExercises')->name('workout.destroyExercises');
    Route::post('/admin/workout/update/{id}', 'WorkoutController@update')->name('workout.update');
    Route::get('/admin/workout/create', 'WorkoutController@create')->name('workout.create');
    Route::post('/admin/workout/store', 'WorkoutController@store')->name('workout.store');
    Route::delete('/admin/workout/delete/{id}', 'WorkoutController@destroy')->name('workout.destroy');
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