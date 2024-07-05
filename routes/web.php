<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/* 
============================================
                Frontend
============================================
*/
Route::get('/', [FrontendController::class, 'home']);

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/project', function () {
    return view('frontend.project');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});




/* 
============================================
                backend
============================================
*/

Route::get('/admin', function () {
    return view('backend.home');
});