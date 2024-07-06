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
 

Route::get('/service', function () {
    return view('frontend.service');
});

 
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/team', function () {
    return view('frontend.team');
});




/* 
============================================
                backend
============================================
*/

Route::get('/admin', function () {
    return view('backend.home');
});