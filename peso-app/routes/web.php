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
    if (session('employer')) {
        return redirect()->route('employer.dashboard');
    }
    return view('employer.login');
})->name('employer.login');

Route::post('/login/employer', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required|string',
    ]);

    // Static demo credentials — replace with real auth when backend is ready
    $demoEmail    = 'employer@peso.gov.ph';
    $demoPassword = 'password123';

    if ($request->email === $demoEmail && $request->password === $demoPassword) {
        session(['employer' => ['email' => $request->email, 'company' => 'Demo Company']]);
        return redirect()->route('employer.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
})->name('employer.login.post');

Route::get('/employer/dashboard', function () {
    if (!session('employer')) {
        return redirect()->route('employer.login');
    }
    return view('employer.dashboard');
})->name('employer.dashboard');

Route::post('/employer/logout', function () {
    session()->forget('employer');
    return redirect()->route('employer.login');
})->name('employer.logout');

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
    return redirect()->route('employer.login')->with('success', 'Registration submitted! Please log in to your account.');
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
