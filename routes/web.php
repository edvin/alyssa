<?php

use App\Models\Quote;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('quote.show', ['quote' => Quote::select('id')->inRandomOrder()->first()['id']]);
});

Route::get('/quote/{quote}', function (Quote $quote) {
    return inertia('Main', ['quote' => $quote]);
})->name('quote.show');
