<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('tes');
});

Auth::routes();

Route::get('/', 'FrontController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile/update', 'HomeController@updateProfile')->name('updateProfile');
Route::post('/Application/Store-Jobseeker', 'HomeController@appstore')->name('app.store');

Route::get('/report', 'HomeController@report')->name('report');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');
Route::get('/report/export', 'HomeController@export')->name('report.export');

//CRUD JOB
Route::get('/joblist','JobController@joblist')->name('joblist');

Route::get('/jobs','JobController@index')->name('job.index');
Route::get('/jobs/create','JobController@create')->name('job.create');
Route::post('/jobs/store','JobController@store')->name('job.store');
Route::get('/jobs/{id}','JobController@show')->name('job.show');
Route::get('/jobs/{id}/edit','JobController@edit')->name('job.edit');
Route::put('/jobs/{id}/update','JobController@update')->name('job.update');
Route::get('/jobs/{id}/destroy','JobController@destroy')->name('job.destroy');

//CRUD JOBSEEKER
Route::get('/jobseeker','JobseekerController@index')->name('jobseeker.index');
Route::get('/jobseeker/create','JobseekerController@create')->name('jobseeker.create');
Route::post('/jobseeker/store','JobseekerController@store')->name('jobseeker.store');
Route::get('/jobseeker/{id}','JobseekerController@show')->name('jobseeker.show');
Route::get('/jobseeker/{id}/edit','JobseekerController@edit')->name('jobseeker.edit');
Route::put('/jobseeker/update/{id}','JobseekerController@update')->name('jobseeker.update');
Route::get('/jobseeker/destroy/{id}','JobseekerController@destroy')->name('jobseeker.destroy');

//CRUD USER
Route::get('/users','UserController@index')->name('user.index');
Route::get('/users/create','UserController@create')->name('user.create');
Route::post('/users/store','UserController@store')->name('user.store');
Route::get('/users/{id}','UserController@show')->name('user.show');
Route::get('/users/{id}/edit','UserController@edit')->name('user.edit');
Route::put('/users/update/{id}','UserController@update')->name('user.update');
Route::get('/users/destroy/{id}','UserController@destroy')->name('user.destroy');

//CRUD APP
Route::get('/application','ApplicationController@index')->name('application.index');
Route::get('/application/create','ApplicationController@create')->name('application.create');
Route::post('/application/store','ApplicationController@store')->name('application.store');
Route::get('/application/{id}','ApplicationController@show')->name('application.show');
Route::get('/application/{id}/edit','ApplicationController@edit')->name('application.edit');
Route::put('/application/update/{id}','ApplicationController@update')->name('application.update');
Route::get('/application/destroy/{id}','ApplicationController@destroy')->name('application.destroy');
