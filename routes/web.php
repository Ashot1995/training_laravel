<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//stript payment
Route::get('stripe', [StripePaymentController::class, 'index']);
Route::post('payment-process', [StripePaymentController::class, 'process']);

//chat
Route::get('/chats', [ChatController::class, 'index']);
Route::get('/messages', [ChatController::class, 'fetchAllMessages']);
Route::post('/messages', [ChatController::class, 'sendMessage']);


//notification
Route::get('send', [NotificationController::class,'sendNotification']);
