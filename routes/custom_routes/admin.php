<?php

use App\Http\Controllers\Admin\AdminController;

Route::namespace('Admin')->prefix('admin')->middleware(['guest'])->name('admin.')->group(function (){
    Route::get('/', [AdminController::class,'index'])->name('dashboard');
});
