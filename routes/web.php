<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::post('/login', 'Logincontroller@checklogin');
Route::get('/dashboard','Logincontroller@dashboard');
Route::get('/logout','Logincontroller@logout');

