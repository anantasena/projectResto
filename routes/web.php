<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[HomeController::class,"index"]);


Route::get('/user',[AdminController::class,"user"]);

Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);

Route::get('/menu',[AdminController::class,"menu"]);

Route::post('/uploadmakanan',[AdminController::class,"upload"]);

Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::get('/updateview/{id}',[AdminController::class,"updateview"]);

Route::post('/updatemenu/{id}',[AdminController::class,"update"]);






Route::get('/redirects',[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
