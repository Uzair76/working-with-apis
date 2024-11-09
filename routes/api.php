<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use App\Http\Controllers\Api\PostController;

Route::post('/signup',[AuthController::class,'signup']);
Route::post('/login',[AuthController::class,'login']);
// Route::post('/post',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');


Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');
Route::apiResource('store', PostController::class)->middleware('auth:sanctum');
Route::apiResource('update', PostController::class)->middleware('auth:sanctum');
