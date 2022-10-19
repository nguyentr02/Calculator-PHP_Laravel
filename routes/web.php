<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\WelcomeController;
use App\Http\Controllers\CongController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\VerifyController;

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
Route::get('/welcome',[GroupController::class,'getIndex']);
// Route::get('/b12',[WelcomeController::class,'chuyen']);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/user1',[GroupController::class,'user1']);
    Route::get('/user2',[GroupController::class,'user2']);
    Route::get('/user3',[GroupController::class,'user3']);
});

Route::get('/verify',[VerifyController::class,'display']);
Route::post('/verify',[VerifyController::class,'check']);