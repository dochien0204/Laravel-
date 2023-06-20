<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{userId}/get', [UserController::class, 'show']);
Route::post('/users/create', [UserController::class, 'store']);
Route::put('/users/edit', [UserController::class, 'edit']);
Route::delete('/users/delete', [UserController::class, 'destroy']);

