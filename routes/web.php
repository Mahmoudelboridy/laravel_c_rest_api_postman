<?php

use App\Http\Controllers\rcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [rcontroller::class, 'index']);
Route::post('/create', [rcontroller::class, 'create'])->name('create');
Route::post('/delete/{id}', [rcontroller::class, 'delete'])->name('delete');
Route::get('update/{id}', [rcontroller::class, 'update']);
Route::post('update/{id}', [rcontroller::class, 'update2'])->name('update');