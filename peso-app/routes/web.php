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

Route::get('/about/historical-background', function () {
    return view('about.historicalbackground');
});

Route::get('/about/objective', function () {
    return view('about.objective');
});

Route::get('/about/org-chart', function () {
    return view('about.orgchart');
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

    // No backend yet — accept any credentials and store in session
    session(['employer' => [
        'email'   => $request->email,
        'company' => 'My Company',
    ]]);

    return redirect()->route('employer.dashboard');
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

// ── Employer Job Postings (session-based, no DB yet) ──────────────────────────

Route::get('/employer/jobs', function () {
    if (!session('employer')) return redirect()->route('employer.login');
    return view('employer.jobs.index');
})->name('employer.jobs.index');

Route::get('/employer/jobs/create', function () {
    if (!session('employer')) return redirect()->route('employer.login');
    return view('employer.jobs.create');
})->name('employer.jobs.create');

Route::post('/employer/jobs', function (\Illuminate\Http\Request $request) {
    if (!session('employer')) return redirect()->route('employer.login');

    $data = $request->validate([
        'title'             => 'required|string|max:255',
        'description'       => 'required|string|max:5000',
        'nature_of_work'    => 'nullable|array',
        'nature_of_work.*'  => 'string',
        'location'          => 'required|string|max:255',
        'salary'            => 'nullable|string|max:255',
        'slots'             => 'required|integer|min:1',
        'work_experience'   => 'nullable|string|max:255',
        'requirements'      => 'nullable|string|max:3000',
        'accepts_pwd'       => 'nullable|in:yes,no',
        'pwd_types'         => 'nullable|array',
        'pwd_types.*'       => 'string',
        'pwd_other'         => 'nullable|string|max:255',
        'accepts_ofw'       => 'nullable|in:yes,no',
        'educational_level' => 'nullable|string|max:255',
        'course_strand'     => 'nullable|string|max:255',
        'eligibility'       => 'nullable|string|max:255',
        'language_dialect'  => 'nullable|string|max:255',
        'license'           => 'nullable|string|max:255',
        'certification'     => 'nullable|string|max:255',
        'posting_date'      => 'nullable|date',
        'deadline'          => 'nullable|date',
        'authorized_rep'    => 'nullable|string|max:255',
        'auth_date'         => 'nullable|date',
    ]);

    $logo = null;
    if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
        $file = $request->file('logo');
        $logo = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file->path()));
    }

    $jobs = session('employer_jobs', []);
    $jobs[] = array_merge($data, [
        'id'         => uniqid(),
        'status'     => 'active',
        'posted_at'  => now()->format('M d, Y'),
        'applicants' => 0,
        'logo'       => $logo,
    ]);
    session(['employer_jobs' => $jobs]);

    return redirect()->route('employer.jobs.index')->with('success', 'Job posting published successfully!');
})->name('employer.jobs.store');

Route::post('/employer/jobs/{id}/delete', function ($id) {
    if (!session('employer')) return redirect()->route('employer.login');

    $jobs = collect(session('employer_jobs', []))->reject(fn($j) => $j['id'] === $id)->values()->all();
    session(['employer_jobs' => $jobs]);

    return redirect()->route('employer.jobs.index')->with('success', 'Job posting removed.');
})->name('employer.jobs.delete');

Route::post('/employer/jobs/{id}/toggle', function ($id) {
    if (!session('employer')) return redirect()->route('employer.login');

    $jobs = collect(session('employer_jobs', []))->map(function ($j) use ($id) {
        if ($j['id'] === $id) {
            $j['status'] = $j['status'] === 'active' ? 'closed' : 'active';
        }
        return $j;
    })->all();
    session(['employer_jobs' => $jobs]);

    return redirect()->route('employer.jobs.index')->with('success', 'Job status updated.');
})->name('employer.jobs.toggle');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::post('/register/employer', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'business_name'   => 'required|string|max:255',
        'employer_type'   => 'required|string',
        'workforce_size'  => 'required|string',
        'line_of_business'=> 'required|string|max:255',
        'street'          => 'required|string|max:255',
        'barangay'        => 'required|string|max:255',
        'municipal_city'  => 'required|string|max:255',
        'province'        => 'required|string|max:255',
        'owner_name'      => 'required|string|max:255',
        'contact_person'  => 'required|string|max:255',
        'position'        => 'required|string|max:255',
        'mobile'          => 'required|string|max:20',
        'email'           => 'required|email|max:255',
        'password'        => 'required|string|min:8|confirmed',
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
