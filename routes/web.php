<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('cancellation-and-refund', function () {
    return view('cancellation-and-refund');
});

Route::get('shipping', function () {
    return view('shipping');
});


Route::get('/booking', [BookingController::class, 'index']);
Route::post('/create-order', [BookingController::class, 'createOrder']);
Route::post('/save-booking', [BookingController::class, 'store']);
Route::get('/booking/success', [BookingController::class, 'success']);
Route::get('/booking/failed', [BookingController::class, 'failed']);
Route::get('/get-available-slots', [BookingController::class, 'getAvailableSlots']);


Route::get('/booking/receipt/{id}', [App\Http\Controllers\BookingController::class, 'downloadReceipt']);

use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/booking/receipt/{id}/download', [App\Http\Controllers\BookingController::class, 'downloadReceiptPdf']);
