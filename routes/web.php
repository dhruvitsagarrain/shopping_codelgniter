<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::post('/login', 'Logincontroller@checklogin');
Route::get('/dashboard','Logincontroller@dashboard');
Route::get('/logout','Logincontroller@logout');

Route::get('create_category','CategoryController@create_category');

Route::post('create','CategoryController@create');
Route::get('view_category','CategoryController@display');
Route::get('edit_category/{id}','CategoryController@edit_category');
Route::post('update_category/{id}','CategoryController@update_category');
Route::get('delete_category/{id}','CategoryController@delete_category');