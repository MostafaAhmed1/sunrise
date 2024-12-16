<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/admin'], function () {
    
    Route::get('/', [HomeController::class, 'login_view']);
    Route::post('/', [HomeController::class, 'login'])->name('login');
});

Route::group(['prefix' => '/dashboard'], function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::group(['prefix' => '/posts'], function () {
        
        Route::get('/', [DashboardController::class, 'create_post'])->name('posts.create');
        Route::get('/{id}', [DashboardController::class, 'show_post'])->name('posts.show');
        Route::post('/', [DashboardController::class, 'add_post'])->name('posts.add');
        Route::delete('/{id}', [DashboardController::class, 'delete_post'])->name('posts.del');
    });

    Route::group(['prefix' => '/jobs'], function () {
        
        Route::get('/', [DashboardController::class, 'create_job'])->name('job.create');
        Route::post('/', [DashboardController::class, 'add_job'])->name('job.add');
        Route::delete('/{id}', [DashboardController::class, 'delete_job'])->name('job.del');
    });
});
