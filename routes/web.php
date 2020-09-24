<?php

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
    return view('layouts.adminPanel');
});

Route::get('/freelancerCategories','SkillsController@index');
Route::get('/competition', 'CompetitionController@index');
Route::get('/user', 'UserController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/freelancers', 'FreelancersController@index');
//Route::get('/createCategories','SkillsController@create');
//Route::patch('/Skills/{id}', 'SkillsController@update');
Route::resource('Freelancers', 'FreelancersController');
Route::resource('Projects', 'ProjectsController');
Route::resource('User', 'UserController');
Route::resource('Skills', 'SkillsController');
Route::resource('Competition', 'CompetitionController');






