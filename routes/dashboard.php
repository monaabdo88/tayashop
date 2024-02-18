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
        /*Route::resource('/', LanguagesController::class)->names([
            'index'         => 'cp.languages',
            'create'        => 'cp.languages.create',
            'store'         => 'cp.languages.store',
            'create'        => 'cp.languages.edit',
            'update/{id}'   => 'cp.languages.update',
            'destroy'       => 'cp.languages.delete'
        ]);*/
        Route::get('/',[LanguagesController::class,'index'])->name('cp.languages');
        Route::get('/create',[LanguagesController::class,'create'])->name('cp.languages.create');
        Route::post('/store',[LanguagesController::class,'store'])->name('cp.languages.store');
        Route::get('/edit/{id}',[LanguagesController::class,'edit'])->name('cp.languages.edit');
        Route::put('/update/{id}',[LanguagesController::class,'update'])->name('cp.languages.update');
        Route::get('/delete/{id}',[LanguagesController::class,'destroy'])->name('cp.languages.delete');

    });
});
