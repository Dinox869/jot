<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::post('/contacts',[ContactController::class,'store']);

Route::get('/contacts/{id}',[ContactController::class,'show']);

Route::get('/contact/destroy/{id}',[ContactController::class,'destroy']);

Route::put('/contacts/edit/{contact}',[ContactController::class,'update']);

Route::get('/index',[ContactController::class,'index']);

Route::post('/logout', function (){ request()->session()->invalidate();});

Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any','.*');;
