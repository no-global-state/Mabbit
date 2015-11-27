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

Route::get('/', 'Home@indexAction');
Route::get('/issues', 'Issues@displayGridAction');
Route::get('/issues/add', 'Issues@addViewAction');
Route::post('/issues/add.ajax', 'Issues@addAction');
Route::get('/issues/edit/{id}', 'Issues@editViewAction');
Route::post('/issues/update/{id}', 'Issues@update');
Route::get('/issues/view/{id}', 'Issues@viewAction');
Route::post('/issues/destroy/{id}', 'Issues@destroy');
Route::get('/issues/filter.ajax', 'Issues@filterAction');

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
