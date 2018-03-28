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


//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'EventControll@index')->name('home');

// Users resource route.
Route::resource('users', 'UserController');

// Roles resource route.
Route::resource('roles', 'RoleController');

// Permissions resource route.
Route::resource('permissions', 'PermissionController');


Route::Resource('/admin/events', 'EventController');
