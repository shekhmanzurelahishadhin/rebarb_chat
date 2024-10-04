<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::post('/chat/room', [ChatController::class,'chatroom'])->name('chatroom');
Route::post('/fire/message', [ChatController::class,'fireMessage'])->name('sent.message');

