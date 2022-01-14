<?php

use App\Http\Controllers\BohzApiController;
use App\Http\Controllers\deviceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data', [BohzApiController::class, 'getapi']);

Route::get('list/{name?}', [deviceController::class, 'list']);

Route::post('add', [deviceController::class, 'add']);