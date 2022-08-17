<?php

use Illuminate\Support\Facades\Route;

include('custom_routes/admin.php');

\Illuminate\Support\Facades\Auth::routes();

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/home','HomeController@index')->name('/');

require __DIR__.'/auth.php';
