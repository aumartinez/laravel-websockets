<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessagesApiController;

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

Route::get('/messages', [MessagesApiController::class, 'index']);
Route::post('/messages', [MessagesApiController::class, 'store']);
Route::get('/messages/{message}', [MessagesApiController::class, 'show']);
Route::put('/messages/{message}', [MessagesApiController::class, 'update']);
Route::delete('/messages/{message}', [MessagesApiController::class, 'destroy']);