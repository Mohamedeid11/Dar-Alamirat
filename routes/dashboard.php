<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\SettingsController;

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('index');
});

Route::group(['as' => 'auth.'], function () {
    Route::get('/login', [AuthController::class , 'showLoginForm' ])->name('login');
    Route::post('/login', [AuthController::class , 'login' ])->name('login');
    Route::get('/register', [AuthController::class , 'register' ])->name('register');
});

Route::group(['middleware' => 'admin' ,'prefix' => 'settings', 'as' => 'settings.',] , function (){
   Route::get('/', [SettingsController::class , 'companyInfo'])->name('index');
});
