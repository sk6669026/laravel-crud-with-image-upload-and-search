<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\ShowController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/UploadPage',[UploadDataController::class, 'index']);
Route::post('/UploadData',[UploadDataController::class, 'store']);
Route::get('/show',[ShowController::class, 'show']);
Route::get('/search',[ShowController::class, 'search']);
Route::get('/delete/{id}',[ShowController::class, 'delete']);
Route::get('/editpage/{id}',[UploadDataController::class, 'editpage']);
Route::post('/update/{id}',[UploadDataController::class, 'update']);