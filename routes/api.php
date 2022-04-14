<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Bitcoin;
use App\Http\Controllers\ApiController;

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

Route::get('/currency', [ApiController::class, "index"]);
Route::post('/currency', [ApiController::class, 'store']);
Route::put('/currency/{currency}', [ApiController::class, 'update']);
Route::delete('/currency/{currency}', [ApiController::class, 'destroy']);