<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;
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

Route::get('jokes', [JokeController::class, 'index']);
Route::get('jokes/theme/{id}', [JokeController::class, 'showTheme']);
Route::get('jokes/theme/random/{id}', [JokeController::class, 'joke']);
Route::post('jokes', [JokeController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
