<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/* 
============================================
                Frontend
============================================
*/
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/project', [FrontendController::class, 'project']);
Route::get('/team',[FrontendController::class,'team']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/service',[FrontendController::class,'service']);

 
/* 
============================================
                backend
============================================
*/

Route::get('/admin', function () {
    return view('backend.home');
});