<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/sistem-imun', 'landing.sistem-imun');
Route::view('/pilek-flu', 'landing.pilek-flu');
Route::view('/kesehatan-kulit', 'landing.kesehatan-kulit');
Route::view('/kesehatan-mulut', 'landing.kesehatan-mulut');
Route::view('/meredakan-alergi', 'landing.meredakan-alergi');
Route::view('/penyembuhan-luka', 'landing.penyembuhan-luka');
Route::view('/diabetes', 'landing.diabetes');

// Checkout
Route::view('/checkout', 'checkout');

Route::post('/checkout', function () {
    // Handle form submission
    $validated = request()->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:500',
        'quantity' => 'required|in:1,3,5,10',
    ]);

    // Calculate price
    $prices = [
        1 => 250000,
        3 => 217000,
        5 => 198000,
        10 => 180000,
    ];

    $quantity = (int) $validated['quantity'];
    $price_per_unit = $prices[$quantity];
    $total_price = $price_per_unit * $quantity;

    // Here you would typically save to database and process the order
    // For now, we'll just redirect with success message

    return redirect('/checkout')->with(
        'success',
        'Terima kasih! Pesanan Anda telah diterima. ' .
            'Total: Rp ' . number_format($total_price, 0, ',', '.') .
            '. Tim kami akan segera menghubungi Anda untuk konfirmasi.'
    );
})->name('checkout.store');
