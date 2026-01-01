<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/booking', [BookingController::class, 'index']);
Route::post('/create-order', [BookingController::class, 'createOrder']);
Route::post('/save-booking', [BookingController::class, 'store']);
Route::get('/booking/success', [BookingController::class, 'success']);
Route::get('/booking/failed', [BookingController::class, 'failed']);
Route::get('/get-available-slots', [BookingController::class, 'getAvailableSlots']);
Route::get('/booking/receipt/{id}', [BookingController::class, 'downloadReceipt']);