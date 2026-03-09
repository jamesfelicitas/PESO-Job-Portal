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

Route::get('/login/employer', function () {
    return view('employer.login');
})->name('employer.login');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::post('/register/employer', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'company_name' => 'required|string|max:255',
        'industry'     => 'required|string',
        'address'      => 'required|string|max:255',
        'first_name'   => 'required|string|max:255',
        'last_name'    => 'required|string|max:255',
        'phone'        => 'required|string|max:20',
        'email'        => 'required|email|max:255',
        'password'     => 'required|string|min:8|confirmed',
    ]);

    // TODO: Store employer registration when backend is ready
    return back()->with('success', 'Registration submitted successfully! PESO will review your account.');
})->name('employer.register.post');

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
