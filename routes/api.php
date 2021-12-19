<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
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
 Route::get('laptop',[LaptopController::class,'index']);
 Route::post('laptop',[LaptopController::class,'create']);
 Route::put('/laptop/{id_laptop}',[LaptopController::class,'update']);
 Route::delete('/laptop/{id_laptop}',[LaptopController::class,'delete']);   
