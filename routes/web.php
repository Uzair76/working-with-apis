<?php
use App\Http\Resources\UserResource;
use App\Models\User;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('user',UserController::class);
Route::get('/user', function () {
    return UserResource::collection(User::all());
});
