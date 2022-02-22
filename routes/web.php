<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/home', [indexController::class, 'index']);
Route::get('/project',[IndexController::class, 'project']);
Route::get('/about',[IndexController::class, 'about']);
Route::get('/login',[IndexController::class, 'auth']);
