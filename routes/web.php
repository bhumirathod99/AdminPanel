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
    return view('welcome');
});

Route::get('/admin','AdminController@index');
Route::get('/freelancerCategories','AdminController@freelancerCategories');
Route::get('/create','SkillsController@create');
Route::get('/Skills', 'SkillsController@index');
Route::get('/edit/Skills/{id}','SkillsController@edit');
Route::get('/update/Skills/{id}','SkillsController@update');
Route::delete('/delete/Skills/{id}','SkillsController@destroy');

Route::resource('Skills', 'SkillsController');






