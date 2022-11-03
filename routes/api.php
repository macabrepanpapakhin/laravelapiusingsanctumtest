<?php

use App\Http\Controllers\dummyAPI;
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

Route::get('/data',[dummyAPI::class,'getData']);


Route::get("/users",[UserController::class,'list']);

Route::get("users/{user}",[UserController::class,'findById']);

Route::get("users/{user}/tasks",[UserController::class,'userTask']);

Route::post("users/add",[UserController::class,'addUser']);

Route::put("/users/{user}/update",[UserController::class,'update1']);