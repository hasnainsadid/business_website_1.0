<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProjectController;
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
Route::get('/team',[FrontendController::class, 'team']);
Route::get('/service',[FrontendController::class, 'service']);
Route::get('/contact',[ContactController::class, 'create']);


/* 
============================================
                backend
============================================
*/

Route::redirect('./admin', './admin/dashboard');
Route::group(['prefix'=>'admin', 'middleware'=>'auth', ], function() {
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

require __DIR__.'/auth.php';