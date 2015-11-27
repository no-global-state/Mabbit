<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Home@index');
Route::get('/issues', 'Issues@grid');
Route::get('/issues/create', 'Issues@create');
Route::post('/issues/store', 'Issues@store');
Route::get('/issues/edit/{id}', 'Issues@edit');
Route::post('/issues/update/{id}', 'Issues@update');
Route::get('/issues/show/{id}', 'Issues@show');
Route::post('/issues/destroy/{id}', 'Issues@destroy');
Route::get('/issues/filter', 'Issues@filter');

Route::get('/tags', 'Tag@index');
Route::get('/tags/create', 'Tag@create');
Route::post('/tags/store', 'Tag@store');
Route::get('/tags/edit/{id}', 'Tag@edit');
Route::post('/tags/update/{id}', 'Tag@update');
Route::post('/tags/destroy/{id}', 'Tag@destroy');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
