<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::group(['prefix'=>'admin'], function() {
    $variable = [
        'dashboard' => AdminController::class,
        'team' => TeamController::class,
        'service' => ServiceController::class,
        'category' => CategoryController::class,
        'client' => ClientController::class,
        'project' => ProjectController::class,
        'contact' => ContactController::class,
    ];
    
    foreach ($variable as $key => $value) {
        Route::resource($key, $value);
    }
});