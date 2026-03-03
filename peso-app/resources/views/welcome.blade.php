<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PESO Job Portal System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 min-h-screen font-sans">

        {{-- ========== NAVIGATION ========== --}}
        <nav class="peso-nav">
            <div class="nav-container">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-3">
                        <div class="logo-circle">
                            <span class="logo-text">P</span>
                        </div>
                        <span class="text-white font-bold text-xl tracking-wide">PESO Job Portal</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-6">
                        <a href="#home" class="nav-link-active">Home</a>
                        <a href="#about" class="nav-link">About</a>
                        <a href="#services" class="nav-link">Services</a>
                        <a href="#jobs" class="nav-link">Job Listings</a>
                        <a href="#contact" class="nav-link">Contact</a>
                        <a href="#" class="btn-login">Login</a>
                        <a href="#" class="btn-outline-white">Register</a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- ========== HERO SECTION ========== --}}
        <section id="home" class="hero-section">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 bg-red-500 rounded-full -translate-y-1/2 translate-x-1/3"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-red-600 rounded-full translate-y-1/3 -translate-x-1/4"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="hero-badge">
                            <span class="hero-badge-dot"></span>
                            <span class="hero-badge-text">Public Employment Service Office</span>
                        </div>
                        <h1 class="hero-title">
                            Find Your <span class="text-red-400">Dream Job</span> Today
                        </h1>
                        <p class="hero-subtitle">
                            Connecting Filipino jobseekers with verified employers. Access thousands of local and overseas job opportunities through PESO.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#" class="btn-primary">Browse Jobs</a>
                            <a href="#" class="btn-outline-hero">Post a Vacancy</a>
                        </div>
                        <div class="flex items-center gap-8 mt-10 text-blue-200">
                            <div>
                                <span class="stat-value">5,000+</span>
                                <span class="text-sm">Active Jobs</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div>
                                <span class="stat-value">2,500+</span>
                                <span class="text-sm">Employers</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div>
                                <span class="stat-value">10,000+</span>
                                <span class="text-sm">Jobseekers</span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center">
                        <div class="relative">
                            <div class="w-80 h-80 bg-blue-600/30 rounded-3xl rotate-6"></div>
                            <div class="absolute inset-0 w-80 h-80 bg-white/10 backdrop-blur-sm rounded-3xl -rotate-3 flex items-center justify-center">
                                <div class="text-center p-8">
                                    <svg class="w-20 h-20 mx-auto mb-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-white font-bold text-xl">Start Your Career</p>
                                    <p class="text-blue-200 text-sm mt-2">Register now to get matched with the best opportunities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ========== SERVICES SECTION ========== --}}
        <section id="services" class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="text-center mb-16">
                    <h2 class="section-heading">Our <span class="text-blue-700">Services</span></h2>
                    <p class="section-subheading max-w-2xl mx-auto">PESO provides comprehensive employment facilitation services for jobseekers and employers.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Jobseeker Card -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="service-title">For Jobseekers</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Register & Build Profile</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> View & Apply for Jobs</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Track Application Status</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> View PESO Clearance</li>
                        </ul>
                    </div>
                    <!-- PESO Admin Card -->
                    <div class="service-card-admin">
                        <div class="service-card-admin-badge">ADMIN</div>
                        <div class="service-icon-red">
                            <svg class="service-icon-svg text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="service-title">PESO Admin</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> Employer Verification</li>
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> Job Referral & Tracking</li>
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> PESO Clearance Issuance</li>
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> LRA / SRA Approvals</li>
                        </ul>
                    </div>
                    <!-- Employer Card -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="service-title">For Employers</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Post Job Vacancies</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Review Referred Applicants</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Interview / Hire / Decide</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Request LRA / SRA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- ========== HOW IT WORKS ========== --}}
        <section class="py-20 bg-white">
            <div class="nav-container">
                <div class="text-center mb-16">
                    <h2 class="section-heading">How It <span class="text-red-600">Works</span></h2>
                    <p class="section-subheading">Simple steps to find your next opportunity</p>
                </div>
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="step-box bg-blue-700">1</div>
                        <h4 class="step-title">Register</h4>
                        <p class="step-description">Create your account as a Jobseeker or Employer</p>
                    </div>
                    <div class="text-center">
                        <div class="step-box bg-blue-600">2</div>
                        <h4 class="step-title">Build Profile</h4>
                        <p class="step-description">Complete your profile or post job vacancies</p>
                    </div>
                    <div class="text-center">
                        <div class="step-box bg-red-600">3</div>
                        <h4 class="step-title">Get Matched</h4>
                        <p class="step-description">PESO reviews and refers qualified applicants</p>
                    </div>
                    <div class="text-center">
                        <div class="step-box bg-red-700">4</div>
                        <h4 class="step-title">Get Hired</h4>
                        <p class="step-description">Interview, get hired, and receive your PESO clearance</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ========== CTA SECTION ========== --}}
        <section class="cta-section">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="cta-title">Ready to Start Your Career Journey?</h2>
                <p class="cta-subtitle">Join thousands of Filipinos who found employment through PESO Job Portal System.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="btn-cta-primary">Register as Jobseeker</a>
                    <a href="#" class="btn-cta-outline">Register as Employer</a>
                </div>
            </div>
        </section>

        {{-- ========== FOOTER ========== --}}
        <footer class="peso-footer">
            <div class="nav-container">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="logo-circle">
                                <span class="logo-text">P</span>
                            </div>
                            <span class="font-bold text-xl">PESO</span>
                        </div>
                        <p class="text-blue-300 text-sm">Public Employment Service Office - Connecting jobseekers with opportunities.</p>
                    </div>
                    <div>
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="space-y-2 text-blue-300 text-sm">
                            <li><a href="#" class="footer-link">Home</a></li>
                            <li><a href="#" class="footer-link">Job Listings</a></li>
                            <li><a href="#" class="footer-link">About PESO</a></li>
                            <li><a href="#" class="footer-link">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer-title">For Jobseekers</h4>
                        <ul class="space-y-2 text-blue-300 text-sm">
                            <li><a href="#" class="footer-link">Register</a></li>
                            <li><a href="#" class="footer-link">Browse Jobs</a></li>
                            <li><a href="#" class="footer-link">Track Application</a></li>
                            <li><a href="#" class="footer-link">PESO Clearance</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer-title">For Employers</h4>
                        <ul class="space-y-2 text-blue-300 text-sm">
                            <li><a href="#" class="footer-link">Post a Job</a></li>
                            <li><a href="#" class="footer-link">Review Applicants</a></li>
                            <li><a href="#" class="footer-link">Request LRA/SRA</a></li>
                            <li><a href="#" class="footer-link">Announcements</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} PESO Job Portal System. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </body>
</html>
