@extends('layouts.app')

@section('nav-home', 'nav-link-active')

@section('content')

        {{-- ========== HERO SECTION ========== --}}
        <section id="home" class="hero-section">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 bg-red-500 rounded-full -translate-y-1/2 translate-x-1/3"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-red-600 rounded-full translate-y-1/3 -translate-x-1/4"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20 lg:py-32">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="hero-badge">
                            <span class="hero-badge-dot"></span>
                            <span class="hero-badge-text">Public Employment Service Office</span>
                        </div>
                        <h1 class="hero-title">
                            Imong trabaho,<span class="text-red-400"> imong kaugmaon </span> 
                        </h1>
                        <p class="hero-subtitle">
                            Connecting Filipino jobseekers with verified employers. Access thousands of local and overseas job opportunities through PESO.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#jobs" class="btn-primary">Browse Jobs</a>
                            <a href="#" class="btn-outline-hero">Post a Vacancy</a>
                        </div>
                        <div class="grid grid-cols-3 gap-4 sm:flex sm:items-center sm:gap-8 mt-8 sm:mt-10 text-blue-200">
                            <div class="text-center sm:text-left">
                                <span class="block text-xl sm:text-3xl font-extrabold text-white">5,000+</span>
                                <span class="text-xs sm:text-sm">Active Jobs</span>
                            </div>
                            <div class="text-center sm:text-left">
                                <span class="block text-xl sm:text-3xl font-extrabold text-white">2,500+</span>
                                <span class="text-xs sm:text-sm">Employers</span>
                            </div>
                            <div class="text-center sm:text-left">
                                <span class="block text-xl sm:text-3xl font-extrabold text-white">10,000+</span>
                                <span class="text-xs sm:text-sm">Jobseekers</span>
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

        {{-- ========== JOB LISTINGS ========== --}}
        <section id="jobs" class="py-16 sm:py-20 bg-white">
            <div class="nav-container">
                <div class="text-center mb-10 sm:mb-14">
                    <h2 class="section-heading">Job <span class="text-blue-700">Listings</span></h2>
                    <p class="section-subheading max-w-2xl mx-auto">Browse the latest job opportunities posted through PESO Manolo Fortich</p>
                </div>

                {{-- Filter Bar --}}
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 rounded-2xl p-4 sm:p-6 mb-8">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                        <select class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option class="text-gray-800">All Categories</option>
                            <option class="text-gray-800">Administrative</option>
                            <option class="text-gray-800">IT / Technical</option>
                            <option class="text-gray-800">Education</option>
                            <option class="text-gray-800">Healthcare</option>
                            <option class="text-gray-800">Agriculture</option>
                            <option class="text-gray-800">Construction</option>
                            <option class="text-gray-800">Sales & Marketing</option>
                        </select>
                        <select class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option class="text-gray-800">All Locations</option>
                            <option class="text-gray-800">Manolo Fortich</option>
                            <option class="text-gray-800">Malaybalay</option>
                            <option class="text-gray-800">Valencia</option>
                            <option class="text-gray-800">Cagayan de Oro</option>
                            <option class="text-gray-800">Bukidnon</option>
                        </select>
                        <select class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option class="text-gray-800">All Companies</option>
                            <option class="text-gray-800">Del Monte Philippines</option>
                            <option class="text-gray-800">LGU Manolo Fortich</option>
                            <option class="text-gray-800">Dole Philippines</option>
                        </select>
                    </div>
                </div>

                {{-- Filter Labels --}}
                <div class="hidden sm:grid sm:grid-cols-12 gap-4 px-4 mb-3 text-xs text-gray-400 font-semibold uppercase tracking-wider">
                    <div class="col-span-5">Showing: All Categories</div>
                    <div class="col-span-3">All Locations</div>
                    <div class="col-span-2">All Companies</div>
                    <div class="col-span-2 text-right">Date</div>
                </div>

                {{-- Job List --}}
                <div class="bg-white rounded-2xl border border-gray-200 divide-y divide-gray-100 shadow-sm">
                    {{-- Job Item 1 --}}
                    <a href="#" class="flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group">
                        <div class="sm:col-span-5">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-500 text-sm">&#9733;</span>
                                <h4 class="font-bold text-gray-900 group-hover:text-blue-700 transition text-sm sm:text-base">(URGENT) Administrative Assistant</h4>
                            </div>
                            <p class="text-gray-500 text-xs sm:text-sm mt-0.5">LGU Manolo Fortich</p>
                        </div>
                        <div class="sm:col-span-3 flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                            <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            Manolo Fortich
                        </div>
                        <div class="sm:col-span-2 text-gray-500 text-xs sm:text-sm">LGU Manolo Fortich</div>
                        <div class="sm:col-span-2 text-right text-gray-400 text-xs sm:text-sm">Mar 1</div>
                    </a>

                    {{-- Job Item 2 --}}
                    <a href="#" class="flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group">
                        <div class="sm:col-span-5">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-500 text-sm">&#9733;</span>
                                <h4 class="font-bold text-gray-900 group-hover:text-blue-700 transition text-sm sm:text-base">(URGENT) Farm Technician</h4>
                            </div>
                            <p class="text-gray-500 text-xs sm:text-sm mt-0.5">Del Monte Philippines</p>
                        </div>
                        <div class="sm:col-span-3 flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                            <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            Manolo Fortich
                        </div>
                        <div class="sm:col-span-2 text-gray-500 text-xs sm:text-sm">Del Monte Philippines</div>
                        <div class="sm:col-span-2 text-right text-gray-400 text-xs sm:text-sm">Feb 28</div>
                    </a>

                    {{-- Job Item 3 --}}
                    <a href="#" class="flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group">
                        <div class="sm:col-span-5">
                            <h4 class="font-bold text-gray-900 group-hover:text-blue-700 transition text-sm sm:text-base">Elementary School Teacher</h4>
                            <p class="text-gray-500 text-xs sm:text-sm mt-0.5">DepEd Manolo Fortich</p>
                        </div>
                        <div class="sm:col-span-3 flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                            <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            Manolo Fortich
                        </div>
                        <div class="sm:col-span-2 text-gray-500 text-xs sm:text-sm">DepEd</div>
                        <div class="sm:col-span-2 text-right text-gray-400 text-xs sm:text-sm">Feb 26</div>
                    </a>

                    {{-- Job Item 4 --}}
                    <a href="#" class="flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group">
                        <div class="sm:col-span-5">
                            <h4 class="font-bold text-gray-900 group-hover:text-blue-700 transition text-sm sm:text-base">Registered Nurse</h4>
                            <p class="text-gray-500 text-xs sm:text-sm mt-0.5">Bukidnon Provincial Hospital</p>
                        </div>
                        <div class="sm:col-span-3 flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                            <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            Malaybalay
                        </div>
                        <div class="sm:col-span-2 text-gray-500 text-xs sm:text-sm">Provincial Hospital</div>
                        <div class="sm:col-span-2 text-right text-gray-400 text-xs sm:text-sm">Feb 24</div>
                    </a>

                    {{-- Job Item 5 --}}
                    <a href="#" class="flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group">
                        <div class="sm:col-span-5">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-500 text-sm">&#9733;</span>
                                <h4 class="font-bold text-gray-900 group-hover:text-blue-700 transition text-sm sm:text-base">Sales & Marketing Associate</h4>
                            </div>
                            <p class="text-gray-500 text-xs sm:text-sm mt-0.5">Dole Philippines</p>
                        </div>
                        <div class="sm:col-span-3 flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                            <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            Manolo Fortich
                        </div>
                        <div class="sm:col-span-2 text-gray-500 text-xs sm:text-sm">Dole Philippines</div>
                        <div class="sm:col-span-2 text-right text-gray-400 text-xs sm:text-sm">Feb 20</div>
                    </a>
                </div>

                {{-- View All --}}
                <div class="text-center mt-8">
                    <a href="#" class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold text-sm transition">
                        View All Job Listings
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- ========== JOB FAIRS & EVENTS ========== --}}
        <section class="py-16 sm:py-20 bg-gray-50">
            <div class="nav-container">
                <div class="text-center mb-10 sm:mb-14">
                    <h2 class="section-heading">Job Fairs & <span class="text-red-600">Events</span></h2>
                    <p class="section-subheading max-w-2xl mx-auto">Stay updated with upcoming PESO events, job fairs, and skills training programs</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    {{-- Event Card 1 --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
                        <div class="bg-gradient-to-r from-blue-700 to-blue-600 p-5 sm:p-6 relative">
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full">UPCOMING</div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white rounded-xl p-3 text-center min-w-[60px]">
                                    <span class="block text-2xl font-extrabold text-blue-700 leading-none">15</span>
                                    <span class="block text-xs font-semibold text-blue-500 uppercase">Mar</span>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold text-base sm:text-lg leading-snug">Peso Job Fair 2026</h3>
                                    <p class="text-blue-200 text-xs sm:text-sm mt-1">Municipal Gymnasium</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-gray-600 text-sm mb-4">Join the biggest job fair in Manolo Fortich featuring 20+ companies with hundreds of job openings for all skill levels.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-full">Job Fair</span>
                                <span class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Free Admission</span>
                            </div>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    8:00 AM - 5:00 PM
                                </span>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>

                    {{-- Event Card 2 --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
                        <div class="bg-gradient-to-r from-red-600 to-red-500 p-5 sm:p-6 relative">
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full">UPCOMING</div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white rounded-xl p-3 text-center min-w-[60px]">
                                    <span class="block text-2xl font-extrabold text-red-600 leading-none">22</span>
                                    <span class="block text-xs font-semibold text-red-400 uppercase">Mar</span>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold text-base sm:text-lg leading-snug">Skills Training: Computer Literacy</h3>
                                    <p class="text-red-200 text-xs sm:text-sm mt-1">PESO Office, Municipal Hall</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-gray-600 text-sm mb-4">Free computer literacy training covering Microsoft Office, email, and basic digital skills for jobseekers.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-red-100 text-red-700 text-xs font-semibold px-2.5 py-1 rounded-full">Training</span>
                                <span class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Free</span>
                                <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2.5 py-1 rounded-full">Limited Slots</span>
                            </div>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    9:00 AM - 4:00 PM
                                </span>
                                <a href="#" class="text-red-600 hover:text-red-800 font-semibold">Register &rarr;</a>
                            </div>
                        </div>
                    </div>

                    {{-- Event Card 3 --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
                        <div class="bg-gradient-to-r from-blue-800 to-blue-700 p-5 sm:p-6 relative">
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full">APRIL</div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white rounded-xl p-3 text-center min-w-[60px]">
                                    <span class="block text-2xl font-extrabold text-blue-800 leading-none">05</span>
                                    <span class="block text-xs font-semibold text-blue-500 uppercase">Apr</span>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold text-base sm:text-lg leading-snug">Career Counseling Day</h3>
                                    <p class="text-blue-200 text-xs sm:text-sm mt-1">PESO Office, Municipal Hall</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-gray-600 text-sm mb-4">One-on-one career counseling sessions with PESO staff to help you plan your career path and job search strategy.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-full">Counseling</span>
                                <span class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Walk-in</span>
                            </div>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    8:00 AM - 12:00 PM
                                </span>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ========== FEATURES SECTION ========== --}}
        <section id="services" class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="text-center mb-16">
                    <h2 class="section-heading">Portal <span class="text-blue-700">Features</span></h2>
                    <p class="section-subheading max-w-2xl mx-auto">Discover the powerful features of the PESO Job Portal System designed to connect jobseekers and employers seamlessly.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Job Matching -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="service-title">Job Matching</h3>
                        <p class="text-gray-600 text-sm mb-4">Automatically match jobseekers with the most relevant job openings based on skills, experience, and preferences.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Skill-based matching</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Location preference filtering</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Real-time job recommendations</li>
                        </ul>
                    </div>
                    <!-- Job Referral & Tracking -->
                    <div class="service-card-admin">
                        <div class="service-card-admin-badge">CORE</div>
                        <div class="service-icon-red">
                            <svg class="service-icon-svg text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="service-title">Job Referral & Tracking</h3>
                        <p class="text-gray-600 text-sm mb-4">PESO reviews applications and refers qualified candidates to employers with full status tracking.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> PESO-facilitated referrals</li>
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> Application status tracking</li>
                            <li class="flex items-start gap-2"><span class="check-red">&#10003;</span> Interview scheduling</li>
                        </ul>
                    </div>
                    <!-- Online Job Posting -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <h3 class="service-title">Online Job Posting</h3>
                        <p class="text-gray-600 text-sm mb-4">Employers can easily post job vacancies online and reach thousands of registered jobseekers instantly.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Quick vacancy posting</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Applicant management</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> LRA / SRA requests</li>
                        </ul>
                    </div>
                </div>
                <!-- Second Row -->
                <div class="grid md:grid-cols-3 gap-8 mt-8">
                    <!-- PESO Clearance -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="service-title">PESO Clearance</h3>
                        <p class="text-gray-600 text-sm mb-4">Generate and manage PESO clearance certificates digitally — no more manual paperwork.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Digital clearance issuance</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Downloadable certificates</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Verification system</li>
                        </ul>
                    </div>
                    <!-- Profile Management -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="service-title">Profile Management</h3>
                        <p class="text-gray-600 text-sm mb-4">Jobseekers can build comprehensive profiles showcasing their skills, education, and work experience.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Skills & experience builder</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Resume upload</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Profile visibility control</li>
                        </ul>
                    </div>
                    <!-- Employer Verification -->
                    <div class="service-card">
                        <div class="service-icon-blue">
                            <svg class="service-icon-svg text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="service-title">Employer Verification</h3>
                        <p class="text-gray-600 text-sm mb-4">PESO verifies employer legitimacy to ensure jobseekers are connected with trusted companies.</p>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Business permit validation</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Verified employer badge</li>
                            <li class="flex items-start gap-2"><span class="check-blue">&#10003;</span> Safe hiring guarantee</li>
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

        {{-- ========== REPUBLIC ACT NO. 8759 ========== --}}
        <section id="ra8759" class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="max-w-4xl">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6 text-left">REPUBLIC ACT NO. 8759</h2>
                    <p class="text-gray-500 uppercase tracking-wide text-sm md:text-base mb-8">
                        AN ACT INSTITUTIONALIZING A NATIONAL FACILITATION SERVICE NETWORK THROUGH THE ESTABLISHMENT OF A PUBLIC EMPLOYMENT SERVICE OFFICE IN EVERY PROVINCE, KEY CITY AND OTHER STRATEGIC AREAS THROUGHOUT THE COUNTRY.
                    </p>
                   
                    <p class="text-gray-700 text-base leading-relaxed">
                        Approved: February 14, 2000.
                    </p>
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

@endsection

