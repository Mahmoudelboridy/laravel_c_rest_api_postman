<?php

use App\Http\Controllers\apicontroller;
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


Route::get('/read', [apicontroller::class, 'index']);
Route::post('/read', [apicontroller::class, 'create']);
Route::get('/read/{id}', [apicontroller::class, 'show']);
Route::post('/read/{id}', [apicontroller::class, 'update']);
Route::post('/readn/{id}', [apicontroller::class, 'delete']);