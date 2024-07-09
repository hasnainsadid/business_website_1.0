<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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


Route::resources([
    'teams' => TeamController::class,
    'services' => ServiceController::class,
    'clients' => ClientController::class,
    'projects' => ServiceController::class,
    'contact' => ContactController::class,


]);
 