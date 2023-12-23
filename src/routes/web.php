<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;

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


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin']);
});


Route::get('/',[AuthController::class,'index']);
Route::get('/confirm',[AuthController::class,'confirm']);
Route::get('/thanks',[AuthController::class,'thanks']);