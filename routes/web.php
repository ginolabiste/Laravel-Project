<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\IncomingStudentsController;
use App\Http\Controllers\ProgramHeadController;
use App\Http\Controllers\SemestersController;
use App\Http\Controllers\StudentsController;
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
    return view('auth.login');
});
//Route::get('/pre-register', 'App\Http\Controllers\IncomingStudentsController::class@register');
Route::resource('/enroll', IncomingStudentsController::class);
Route::get('/sample', function(){ return view('layouts/temp');});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::post('/home', 'App\Http\Controllers\HomeController@add')->name('dashboard');


Route::group(['middleware' => 'auth'], function () {

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);


	Route::resource('/semesters', SemestersController::class);
	Route::resource('/students', StudentsController::class);
	Route::resource('/employees', EmployeesController::class);
	Route::resource('/program-head', ProgramHeadController::class);

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

