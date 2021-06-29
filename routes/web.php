<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Before the laravel 8.X
// Route::get('/', 'HomeController@index');

//after the laravel 8.x
Route::get('/', [HomeController::class,'index']);
Route::post('/create', [MessageController::class,'create']);
Route::get('/message/{id}', [MessageController::class,'view']);
Route::get('/messageDelete/{id}', [MessageController::class,'messageDelete']);