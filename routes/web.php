<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index']);
// Route::get('/contact-us',[FrontendController::class,'contact']);
Route::get('/shop',[FrontendController::class,'shop']);
Route::get('/return-process',[FrontendController::class,'returnProcess']);


Route::get('/category-products',[FrontendController::class,'categoryProducts']);
Route::get('/subcategory-products',[FrontendController::class,'subcategoryProducts']);
