<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
##################### Admin Login Routes ############################
Route::group(['namespace'   => 'Admin','middleware' => 'guest:admin'],function(){
    Route::get('login',[LoginController::class,'getLogin'])->name('get.admin.login');
    Route::post('login',[LoginController::class,'login'])->name('admin.login');
});
