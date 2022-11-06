<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
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


// Route::get('/data',[dummyAPI::class,'getData']);

// Route::get("/users",[UserController::class,'list']);

// Route::get("users/{user}",[UserController::class,'findById']);

// Route::get("users/{user}/tasks",[UserController::class,'userTask']);

// Route::post("users/add",[UserController::class,'addUser']);

// Route::put("/users/{user}/update",[UserController::class,'update1']);

// Route::post('/products',[ProductController::class,'creatANewProduct']);

// Route::get('/products',[ProductController::class,'index']);

// Route::get('/products/{product}',[ProductController::class,'show']);


//Public Route

Route::get('/products',[ProductController::class,'index']);

Route::get('/products/{product}',[ProductController::class,'show']);

Route::get('/products/search/{name}',[ProductController::class,'search']);

Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class,'login']);


//Route::resource('products',ProductController::class);



//Protected Route

Route::group(['middleware'=>['auth:sanctum']],function(){

    Route::post('/products',[ProductController::class,'store']);

    Route::put('/products/{product}',[ProductController::class,'update']);

    Route::delete('/products/{product}',[ProductController::class,'destroy']);

    Route::post('/logout',[AuthController::class,'logout']);
});