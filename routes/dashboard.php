<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguagesController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
define('PAGINATION_COUNT',10);
##################### Admin Login Routes ############################
Route::group(['middleware' => 'guest:admin'],function()
{
    Route::get('login',[LoginController::class,'getLogin'])->name('get.cp.login');
    Route::post('login',[LoginController::class,'login'])->name('cp.login');
});
##################### Dashboard Routes ##############################
Route::group(['middleware'  => 'auth:admin'], function()
{
    Route::get('/',[DashboardController::class , 'index'])->name('cp.index');
    ###################### Langs Routes #############################
    Route::group(['prefix'=> 'languages'],function(){
        Route::get('/',[LanguagesController::class,'index'])->name('cp.languages');
    });
});
