<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\BroadcastLogController;

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

Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/broadcast-log', [BroadcastLogController::class, 'index'])->name('broadcast-log.index');
Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/messages/create', [MessagesController::class, 'create'])->name('messages.create');
Route::post('/messages', [MessagesController::class, 'store'])->name('messages.store');
Route::get('/messages/{message}', [MessagesController::class, 'show'])->name('messages.show');
Route::get('/messages/{message}/edit', [MessagesController::class, 'edit'])->name('messages.edit');
Route::put('/messages/{message}', [MessagesController::class, 'update'])->name('messages.update');
Route::delete('/messages/{message}', [MessagesController::class, 'destroy'])->name('messages.destroy');


