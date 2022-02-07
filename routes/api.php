<?php

use App\Http\Controllers\API\AdminAPIController;
use App\Http\Controllers\API\LoginAPIController;
use App\Http\Controllers\API\ModeratorAPIController;
use App\Http\Controllers\API\PostsAPIController;
use App\Http\Controllers\API\RegisterAPIController;
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



Route::post('/users/register',[RegisterAPIController::class,'register']);
Route::post('/users/login',[LoginAPIController::class,'login']);

Route::middleware('auth:api')->group(function(){
    Route::apiResource('/posts',PostsAPIController::class);
    Route::apiResource('/admin',AdminAPIController::class)->middleware('admin');
    Route::apiResource('/moderator',ModeratorAPIController::class)->middleware('moderator');
});


