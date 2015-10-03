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
Route::get('/issues', 'Issue@displayGridAction');
Route::get('/issue/add', 'Issue@addViewAction');
Route::post('/issue/add.ajax', 'Issue@addAction');
Route::get('/issue/edit/{id}', 'Issue@editViewAction');
