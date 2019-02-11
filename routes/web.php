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
    return view('dashboard');
});

Route::get('/table', function () {
    return view('table_viewer');
});

Route::get('/admin/users', 'Admin\UsersController@index');

Route::get('/admin/users/create', 'Admin\UsersController@showCreateForm');
Route::post('/admin/users/create/confirm', 'Admin\UsersController@showCreateConfirm');
Route::post('/admin/users/create', 'Admin\UsersController@create');

Route::get('/admin/users/edit/{id}', 'Admin\UsersController@showEditForm');
Route::post('/admin/users/edit/{id}/confirm', 'Admin\UsersController@showEditConfirm');
Route::post('/admin/users/edit/{id}', 'Admin\UsersController@edit');
