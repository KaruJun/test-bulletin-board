<?php

use App\Http\Controllers\ResponseController;
use App\Http\Controllers\ThreadController;
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

Route::get('/threads', [ThreadController::class, 'index']);
Route::post('/threads', [ThreadController::class, 'store']);
Route::get('/threads/{id}', [ThreadController::class, 'show']);

Route::post('/threads/{threadId}/responses', [ResponseController::class, 'store']);
