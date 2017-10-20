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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/competitions',[
    'uses' => 'CompetitionController@index',
    'as' => 'competitions'
]);

Route::get('/competitions/create', [
    'uses' => 'CompetitionController@create',
    'as' => 'competitions.create'
]);

Route::post('/competitions/create',[
   'uses' => 'CompetitionController@postCreate',
    'as' => 'competitions.post.create'
]);

Route::get('/competitions/edit/{id}',[
   'uses' => 'CompetitionController@edit',
    'as' => 'competitions.edit'
]);

Route::post('/competitions/update/{id}',[
    'uses' => 'CompetitionController@update',
    'as' => 'competitions.post.update'
]);

Route::get('/competitions/manage/{id}', [
    'uses' => 'CompetitionController@manage',
    'as' => 'competitions.manage'
]);