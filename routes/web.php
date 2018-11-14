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

//players
Route::get('/players',[
   'uses' => 'PlayersController@index',
    'as' => 'players'
]);
Route::get('/players/create',[
   'uses' => 'PlayersController@create',
    'as' => 'players.create'
]);
Route::post('/players/create',[
   'uses' => 'PlayersController@save',
    'as' => 'players.post.create'
]);

Route::get('/player/edit/{id}',[
   'uses' => 'PlayersController@edit',
    'as' => 'player.edit'
]);

Route::post('/player/edit/{id}',[
   'uses' => 'PlayersController@update',
    'as' => 'players.post.update'
]);


//playoffs
Route::get('/playoff/{id}/create', [
   'uses' => 'PlayoffController@create',
    'as' => 'playoff.create'
]);

Route::post('/playoff/{id}/create',[
   'uses' => 'PlayoffController@postCreate',
    'as' => 'playoff.post.create'
]);

Route::get('playoff/{id}/edit/{pl}',[
   'uses' => 'PlayoffController@edit',
    'as' => 'playoff.edit'
]);

Route::get('/playoff/{id}/delete/{pl}',[
   'uses' => 'PlayoffController@delete',
    'as' => 'playoff.delete'
]);

Route::post('/playoff/{id}/update/{pl}',[
    'uses' => 'PlayoffController@update',
    'as' => 'playoff.post.update'
]);

Route::post('/playoff/kg',[
   'uses' => 'PlayoffController@getKg',
    'as' => 'playoff.get.kg'
]);

Route::post('/playoff/get_players',[
   'uses' => 'PlayoffController@getPlayers',
    'as' => 'playoff.get.players'
]);

Route::post('/playoff/savelist', [
   'uses' => 'PlayoffController@saveList',
    'as' => 'playoff.save.list'
]);

Route::get('/playoff/view/{id}', [
   'uses' => 'PlayoffController@view',
    'as' => 'playoff.view'
]);


Route::resource('photos', 'ClubsController');
Route::resource('coach','CoachController');
