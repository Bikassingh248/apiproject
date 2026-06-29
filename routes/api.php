<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/signup',[App\Http\Controllers\API\AuthController::class,'signup']);
Route::post('/login',[App\Http\Controllers\API\AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[App\Http\Controllers\API\AuthController::class,'logout']);
    Route::apiResource('/posts',App\Http\Controllers\API\PostContoller::class);
});
