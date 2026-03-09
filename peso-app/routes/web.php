<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/history', function () {
    return view('about.history');
});

Route::get('/about/mission', function () {
    return view('about.mission');
});

Route::get('/about/vision', function () {
    return view('about.vision');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register/employer', function () {
    return view('employer.register');
})->name('employer.register');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:2000',
    ]);

    // TODO: Store inquiry or send email notification here

    return back()->with('success', 'Your inquiry has been sent successfully! We will get back to you soon.');
});
