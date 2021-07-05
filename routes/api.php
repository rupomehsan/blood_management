<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsermessegeController;
use App\Http\Controllers\Admin\AlldonerController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-district/{id}',[HomeController::class,'get_district_by_divition_id']);
Route::get('/get-station/{id}',[HomeController::class,'get_station_by_district_id']);
Route::get('/get-message',[UsermessegeController::class,'get_message'])->name('api.get-message');
Route::post('/seen-message/{id}',[UsermessegeController::class,'seen_message'])->name('api.seen-message');

Route::get('/get-doner',[AlldonerController::class,'get_doner'])->name('api.get-doner');
Route::post('/seen-doner/{id}',[AlldonerController::class,'seen_doner'])->name('api.seen-doner');
Route::get('/search-message',[UsermessegeController::class,'search_message'])->name('api.search_message');
Route::get('/search-doner',[AlldonerController::class,'search_doner'])->name('api.search_doner');
