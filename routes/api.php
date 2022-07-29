<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController; // ig tab pag type sa model/controller name para mabutang dd
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//URI an "admin/retrieve", nano na controller, function sa controller
Route::get("admin/retrieve_all", [AdminController::class, "retrieveAll"]); 
Route::get("admin/retrieve/{id}", [AdminController::class, "show"]);   //pag mayda ka specific id na kukuhaon bale api/admin/1 for example
Route::post("admin/create", [AdminController::class, "create"]); 
Route::put("admin/update/{id}", [AdminController::class, "update"]); 
Route::delete("admin/delete/{id}", [AdminController::class, "delete"]); 

Route::get("admin/get_admin", [AdminController::class, "getAdmin"]);    //for retrieving admin(id = 1)
Route::put("admin/update_admin1", [AdminController::class, "updateAdmin1"]); 

Route::get("employee/retrieve_all", [EmployeeController::class, "retrieveAll"]); 
Route::get("employee/retrieve/{id}", [EmployeeController::class, "show"]); 
Route::post("employee/create", [EmployeeController::class, "create"]); 
Route::put("employee/update/{id}", [EmployeeController::class, "update"]); 
Route::delete("employee/delete/{id}", [EmployeeController::class, "delete"]); 

Route::get("category/retrieve_all", [CategoryController::class, "retrieveAll"]);
Route::get("category/retrieve/{id}", [CategoryController::class, "show"]);
Route::post("category/create", [CategoryController::class, "create"]);
Route::put("category/update/{id}", [CategoryController::class, "update"]);
Route::delete("category/delete/{category_id}", [CategoryController::class, "delete"]); 

Route::get("product/retrieve_all", [ProductController::class, "retrieveAll"]); 
Route::get("product/retrieve/{id}", [ProductController::class, "show"]); 
Route::post("product/create", [ProductController::class, "create"]); 
Route::put("product/update/{id}", [ProductController::class, "update"]); 
Route::delete("product/delete/{product_id}", [ProductController::class, "delete"]); 

Route::get("table/retrieve_all", [TableController::class, "retrieveAll"]); 
Route::get("table/retrieve/{id}", [TableController::class, "show"]); 
Route::post("table/create", [TableController::class, "create"]); 
Route::put("table/update/{id}", [TableController::class, "update"]); 
Route::delete("table/delete/{id}", [TableController::class, "delete"]); 

Route::get("meal/retrieve_all", [MealController::class, "retrieveAll"]); 
Route::get("meal/retrieve/{id}", [MealController::class, "show"]); 
Route::post("meal/create", [MealController::class, "create"]); 
Route::put("meal/update/{meal_id}", [MealController::class, "update"]); 
Route::delete("meal/delete/{id}", [MealController::class, "delete"]); 

Route::get("booking/retrieve_all", [BookingController::class, "retrieveAll"]); 
Route::get("booking/retrieve/{id}", [BookingController::class, "show"]); 
Route::post("booking/create", [BookingController::class, "create"]);
Route::put("booking/update/{id}", [BookingController::class, "update"]); 
Route::delete("booking/delete/{id}", [BookingController::class, "delete"]);




//For Products
// Route::get("/getAllProducts", [ProductController::class, "getAllProducts"]);  //for retrieving data via api route
// Route::get("addProduct", [ProductController::class, "addProduct"]);
// Route::post('storeProduct', [ProductController::class, 'storeProduct']);
 
// Route::get('editProduct/{product_id}', [ProductController::class, 'editProduct']);
// Route::put('updateProduct', [ProductController::class, 'updateProduct']);

// Route::post("product/create/{category_id}/{meal_id}", [ProductController::class, "create"]); -> for thunder client use

// Route::post("booking/create/{id}", [BookingController::class, "create"]); for thunder client use