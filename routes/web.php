<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFatoorahController;
use App\Models\Payment;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/checkout', [MyFatoorahController::class, 'checkout'])->name('myfatoorah.checkout');
Route::get('/payment', [MyFatoorahController::class, 'index'])->name('myfatoorah.index');
Route::get('/callback', [MyFatoorahController::class, 'callback'])->name('myfatoorah.callback');
// Payment Result Routes
Route::get('/payment/success', function () {
    return view('myfatoorah.success');
})->name('payment.success');

Route::get('/payment/failure', function () {
    return view('myfatoorah.failure');
})->name('payment.failure');

Route::get('/payments', function () {
    $payments = Payment::latest()->get(); // Fetch all existing payments
    return view('payments', compact('payments'));
});
