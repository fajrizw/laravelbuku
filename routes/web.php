<?php


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
//routes/web.php
use App\Http\Controllers\BukuController;

Route::resource('buku', BukuController::class); 

Route::get('/',[BukuController::class,'index']);

Route::get('/buku/add',[BukuController::class,'create']);

Route::put('/buku/{id}',[BukuController::class,'update']);

Route::delete('/buku/{id}', [BookController::class, 'destroy']);

Route::post('/buku',[BukuController::class,'store']);

Route::post('/buku',[BukuController::class,'store']);

Route::get('/buku/detail/{id}',[BukuController::class,'show']);