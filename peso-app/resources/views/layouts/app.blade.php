<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'PESO Job Portal System')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
    </head>
    <body class="bg-white text-gray-900 min-h-screen font-sans pt-16 md:pt-20">

        {{-- ========== NAVIGATION ========== --}}
        <nav class="peso-nav">
            <div class="nav-container">
                <div class="flex justify-between items-center h-16 md:h-20">
                    <div class="flex items-center space-x-2 sm:space-x-3">
                        <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" class="w-10 h-10 sm:w-14 sm:h-14 md:w-18 md:h-18 rounded-full object-cover shadow-sm">
                        <span class="text-white font-bold text-sm sm:text-lg md:text-xl tracking-wide">PESO Manolo Fortich</span>
                    </div>

                    {{-- Desktop Nav --}}
                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="{{ url('/') }}" class="nav-link" data-nav="home">Home</a>
                        <a href="{{ url('/#jobs') }}" class="nav-link" data-nav="jobs">Job Listings</a>
                        <a href="{{ url('/#services') }}" class="nav-link" data-nav="services">Services</a>
                        <a href="{{ url('/contact') }}" class="nav-link" data-nav="contact">Contact</a>
                        <!-- About Dropdown -->
                        <div class="relative group">
                            <button class="nav-link flex items-center gap-1">
                                Get To Know Us
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute left-0 top-full mt-2 w-56 bg-white rounded-lg shadow-xl border border-gray-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <a href="{{ url('/about/historical-background') }}" class="block px-4 py-2.5 text-gray-700 hover:bg-blue-50 hover:text-blue-700 text-sm font-medium transition">Historical Background</a>
                                <a href="{{ url('/about/history') }}" class="block px-4 py-2.5 text-gray-700 hover:bg-blue-50 hover:text-blue-700 text-sm font-medium transition">History of Excellence</a>
                                <a href="{{ url('/about/mission') }}" class="block px-4 py-2.5 text-gray-700 hover:bg-blue-50 hover:text-blue-700 text-sm font-medium transition">Mission</a>
                                <a href="{{ url('/about/vision') }}" class="block px-4 py-2.5 text-gray-700 hover:bg-blue-50 hover:text-blue-700 text-sm font-medium transition">Vision</a>
                                
                                <hr class="my-1 border-gray-100">
                            </div>
                        </div>
                        <a href="#" class="btn-login">Login</a>
                        <a href="#" class="btn-outline-white">Register</a>
                        <a href="{{ route('employer.login') }}" class="inline-flex items-center rounded-lg bg-orange-500 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-600 transition">Employer</a>
                    </div>

                    {{-- Hamburger Button --}}
                    <button id="mobile-menu-btn" class="lg:hidden text-white focus:outline-none p-2" aria-label="Toggle menu">
                        <svg id="hamburger-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden lg:hidden bg-blue-800 border-t border-blue-700">
                <div class="nav-container py-4 space-y-1">
                    <a href="{{ url('/') }}" class="block px-4 py-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg font-medium transition" data-nav-mobile="home">Home</a>
                    <a href="{{ url('/#jobs') }}" class="block px-4 py-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg font-medium transition" data-nav-mobile="jobs">Job Listings</a>
                    <a href="{{ url('/#services') }}" class="block px-4 py-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg font-medium transition" data-nav-mobile="services">Services</a>
                    <a href="{{ url('/contact') }}" class="block px-4 py-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg font-medium transition" data-nav-mobile="contact">Contact</a>

                    {{-- Get To Know Us (collapsible) --}}
                    <div>
                        <button id="mobile-about-btn" class="w-full flex justify-between items-center px-4 py-3 text-blue-200 hover:bg-blue-700 hover:text-white rounded-lg font-medium transition">
                            <span>Get To Know Us</span>
                            <svg id="mobile-about-arrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-about-dropdown" class="hidden pl-4 space-y-1 mt-1">
                            <a href="{{ url('/about/history') }}" class="block px-4 py-2.5 text-blue-300 hover:bg-blue-700 hover:text-white rounded-lg text-sm font-medium transition">History of Excellence</a>
                            <a href="{{ url('/about/mission') }}" class="block px-4 py-2.5 text-blue-300 hover:bg-blue-700 hover:text-white rounded-lg text-sm font-medium transition">Mission</a>
                            <a href="{{ url('/about/vision') }}" class="block px-4 py-2.5 text-blue-300 hover:bg-blue-700 hover:text-white rounded-lg text-sm font-medium transition">Vision</a>
                            <a href="{{ url('/about/historical-background') }}" class="block px-4 py-2.5 text-blue-300 hover:bg-blue-700 hover:text-white rounded-lg text-sm font-medium transition">Historical Background</a>
                        </div>
                    </div>

                    <div class="pt-3 mt-3 border-t border-blue-700 flex flex-col gap-3 px-4">
                        <a href="#" class="btn-login text-center">Login</a>
                        <a href="#" class="btn-outline-white text-center">Register</a>
                        <a href="{{ route('employer.login') }}" class="block w-full rounded-lg bg-orange-500 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-600 transition text-center">Employer</a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- ========== PAGE CONTENT ========== --}}
        @yield('content')

        {{-- ========== FOOTER / CONTACT ========== --}}
        <footer id="contact" class="peso-footer">
            <div class="nav-container">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 items-start">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" class="w-10 h-9 rounded-full object-cover shadow-sm">
                            <h4 class="footer-title mb-0">PESO Manolo Fortich</h4>
                        </div>
                        <p class="text-blue-300 text-sm mb-4">Public Employment Service Office — Connecting jobseekers with opportunities in Manolo Fortich, Bukidnon.</p>
                        <!-- Social Media -->
                        <div class="flex items-center space-x-3 mt-4">
                            <a href="https://www.facebook.com/lgupesomanolofortich" target="_blank" class="flex items-center gap-2 text-blue-300 hover:text-white transition text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span>PESO Manolo Fortich</span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h4 class="footer-title">Contact Us</h4>
                        <ul class="space-y-3 text-blue-300 text-sm">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Motorpool, Manolo Fortich, Bukidnon</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>peso&#64;manolofortich.gov.ph</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>(088) 123-4567</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="space-y-2 text-blue-300 text-sm">
                            <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                            <li><a href="{{ url('/about/history') }}" class="footer-link">About PESO</a></li>
                            <li><a href="{{ url('/#services') }}" class="footer-link">Services</a></li>
                            <li><a href="{{ url('/#jobs') }}" class="footer-link">Job Listings</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="footer-title">Office Hours</h4>
                        <ul class="space-y-2 text-blue-300 text-sm">
                            <li class="flex justify-between"><span>Monday - Friday</span><span class="text-white">8:00 AM - 5:00 PM</span></li>
                            <li class="flex justify-between"><span>Saturday</span><span class="text-white">Closed</span></li>
                            <li class="flex justify-between"><span>Sunday</span><span class="text-white">Closed</span></li>
                        </ul>
                        <div class="mt-4 pt-4 border-t border-blue-800">
                            <a href="https://www.facebook.com/lgupesomanolofortich" target="_blank" class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Visit our Facebook Page
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} PESO Job Portal System — Manolo Fortich, Bukidnon. All rights reserved.</p>
                </div>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>
