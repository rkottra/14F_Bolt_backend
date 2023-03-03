<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TermekController;
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

Route::resource("termek", TermekController::class)->except("create", "edit");

Route::post("register", [LoginController::class, 'createUser']);
Route::post("login", [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post("logout", 
    [LoginController::class, 'logout']);

Route::middleware('auth:sanctum')->get("vedett", 
    [LoginController::class, 'VedettAdatok']);