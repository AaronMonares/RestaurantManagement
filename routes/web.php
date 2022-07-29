<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
Route::get('{any}', function () {
    return view('/page/app');
})->where('any','.*');




// Route::get('/{path}', function () { //path -> dynamic variable  siya an nag ho hold sa extension pagkatapos sa default url
//     return view('app');
// });

// Route::get('/getAllProducts', [ProductController::class, 'getAllProducts']); 

// Route::get('/createProduct', [ProductController::class, 'createProduct']);

// Route::post('/storeProduct', [ProductController::class, 'storeProduct']);

//pag return view gamit an contoller

// Route::get('/home', [EmployeeController::class, 'home']);

// Route::get('/contact', [ContactController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index']);

// Route::get('/userView', function () {
//     return view('userView');
// });