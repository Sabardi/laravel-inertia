<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/profile', function () {
    return Inertia::render('UserProfile', [
        'user' => "asep"
    ]);
});

// or
Route::inertia('/profile1', 'UserProfile', ['user' => "burhan"] );

Route::get('/tes', function () {
    return Inertia::render('Layouts');
});
