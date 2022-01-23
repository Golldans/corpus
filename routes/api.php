<?php

use App\Http\Controllers\LudensController;
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



Route::group(['prefix' => 'ludens'], function (){
    Route::get('index', [LudensController::class, 'index']);
    Route::post('store', [LudensController::class, 'store']);
    Route::get('find/{id}', [LudensController::class, 'find']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
