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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/edit/{id}', [MovieController::class, 'edit']);
Route::get('/show/{id}', [MovieController::class, 'show']);
Route::get('/create', [MovieController::class, 'create']);
Route::post('/store', [MovieController::class, 'store']);
Route::post('/update/{id}', [MovieController::class, 'update']);
Route::post('/delete/{id}', [MovieController::class, 'destroy']);