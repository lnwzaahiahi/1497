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
    return redirect('/index');
});

Auth::routes();

Route::get('pages-login', 'HphController@index');
Route::get('pages-register', 'HphController@index');
Route::get('pages-404', 'HphController@index');
Route::get('pages-500', 'HphController@index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
   

});
Route::resource('subject','SubjectController');
 Route::resource('permission','PermissionController');
Route::get('{any}', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');