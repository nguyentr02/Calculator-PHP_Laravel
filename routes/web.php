<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\WelcomeController;
use App\Http\Controllers\CongController;

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
    return view('sum');
});


Route::post('/',[CongController::class,'tinhtong']);
// Route::get('/welcome',[WelcomeController::class,'xinchao']);
// Route::get('/b12',[WelcomeController::class,'chuyen']);