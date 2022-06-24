<?php

use Illuminate\Support\Facades\Route;
use App\Issue;

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

Route::view('/issues', 'issues.index');

Route::post('issues/store', 'IssuesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('services', 'services');

Route::get('custom/login', 'CustomAuthController@login');
Route::get('custom/login/{id}', 'CustomAuthController@CustomLogin');

Route::get('test', 'IssuesController@test');

Route::get('issues/list', 'IssuesController@list');
Route::post('issues/import', 'IssuesController@importFromExcel');

Route::get('users', 'UsersController@export');

Route::view('issue-form', 'excel-import');
