<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index']);
Route::get('/contact-us',[FrontendController::class,'contact']);
Route::get('/shop',[FrontendController::class,'shop'])
