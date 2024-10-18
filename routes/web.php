<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    // sleep(2);
    return Inertia::render('About');
})->name('about');

Route::get('/profile', function () {
    // sleep(2);

    return Inertia::render('UserProfile', [
        'user' => "asep"
    ]);
})->name('profile');

// or
Route::inertia('/profile1', 'UserProfile', ['user' => "burhan"] )->name('profile1');


