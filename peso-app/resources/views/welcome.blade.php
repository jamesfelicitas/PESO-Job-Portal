@extends('layouts.app')

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

                {{-- Search Bar --}}
                <div class="mb-6">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <input id="job-search" type="text" placeholder="Search jobs by title, company, or keyword..." class="w-full pl-12 pr-12 py-4 rounded-2xl border-2 border-gray-200 bg-white text-gray-900 text-sm sm:text-base font-medium focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition shadow-sm placeholder:text-gray-400">
                        <button id="job-search-clear" class="absolute inset-y-0 right-0 pr-4 items-center text-gray-400 hover:text-gray-600 transition hidden" title="Clear search">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Filter Bar --}}
                <div class="bg-linear-to-r from-blue-700 to-blue-600 rounded-2xl p-4 sm:p-6 mb-8">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                        <select id="filter-category" class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option value="" class="text-gray-800">All Categories</option>
                            <option value="Administrative" class="text-gray-800">Administrative</option>
                            <option value="IT / Technical" class="text-gray-800">IT / Technical</option>
                            <option value="Education" class="text-gray-800">Education</option>
                            <option value="Healthcare" class="text-gray-800">Healthcare</option>
                            <option value="Agriculture" class="text-gray-800">Agriculture</option>
                            <option value="Construction" class="text-gray-800">Construction</option>
                            <option value="Sales & Marketing" class="text-gray-800">Sales & Marketing</option>
                        </select>
                        <select id="filter-location" class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option value="" class="text-gray-800">All Locations</option>
                            <option value="Manolo Fortich" class="text-gray-800">Manolo Fortich</option>
                            <option value="Malaybalay" class="text-gray-800">Malaybalay</option>
                            <option value="Valencia" class="text-gray-800">Valencia</option>
                            <option value="Cagayan de Oro" class="text-gray-800">Cagayan de Oro</option>
                            <option value="Bukidnon" class="text-gray-800">Bukidnon</option>
                        </select>
                        <select id="filter-company" class="w-full px-4 py-3 rounded-xl bg-white/20 text-white border border-white/30 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-white/50 appearance-none cursor-pointer">
                            <option value="" class="text-gray-800">All Companies</option>
                            <option value="Del Monte Philippines" class="text-gray-800">Del Monte Philippines</option>
                            <option value="LGU Manolo Fortich" class="text-gray-800">LGU Manolo Fortich</option>
                            <option value="Dole Philippines" class="text-gray-800">Dole Philippines</option>
                            <option value="DepEd" class="text-gray-800">DepEd</option>
                            <option value="Provincial Hospital" class="text-gray-800">Provincial Hospital</option>
                        </select>
                    </div>
                </div>

                {{-- Active Filters & Results Count --}}
                <div id="job-filter-status" class="flex flex-wrap items-center justify-between gap-2 mb-4">
                    <p class="text-sm text-gray-500"><span id="job-results-count" class="font-bold text-gray-800">5</span> jobs found</p>
                    <button id="job-clear-filters" class="text-sm text-blue-600 hover:text-blue-800 font-semibold hidden transition">Clear all filters</button>
                </div>

                {{-- Job List --}}
                <div id="job-list" class="bg-white rounded-2xl border border-gray-200 divide-y divide-gray-100 shadow-sm">
                    {{-- Job Item 1 --}}
                    <a href="#" class="job-item flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group" data-title="Administrative Assistant" data-category="Administrative" data-location="Manolo Fortich" data-company="LGU Manolo Fortich">
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
                    <a href="#" class="job-item flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group" data-title="Farm Technician" data-category="Agriculture" data-location="Manolo Fortich" data-company="Del Monte Philippines">
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
                    <a href="#" class="job-item flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group" data-title="Elementary School Teacher" data-category="Education" data-location="Manolo Fortich" data-company="DepEd">
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
                    <a href="#" class="job-item flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group" data-title="Registered Nurse" data-category="Healthcare" data-location="Malaybalay" data-company="Provincial Hospital">
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
                    <a href="#" class="job-item flex flex-col sm:grid sm:grid-cols-12 gap-2 sm:gap-4 items-start sm:items-center px-4 sm:px-6 py-4 hover:bg-blue-50 transition group" data-title="Sales & Marketing Associate" data-category="Sales & Marketing" data-location="Manolo Fortich" data-company="Dole Philippines">
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

                {{-- No Results Message --}}
                <div id="job-no-results" class="hidden text-center py-12">
                    <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <h3 class="text-lg font-bold text-gray-500 mb-1">No jobs found</h3>
                    <p class="text-sm text-gray-400">Try adjusting your search or filters</p>
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
        
        {{-- ========== FEATURES SECTION ========== --}}
        <section id="services" class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="text-center mb-16">
                    <h2 class="section-heading">Portal <span class="text-blue-700">Features</span></h2>
                    <p class="section-subheading max-w-2xl mx-auto">Discover the powerful features of the PESO Job Portal System designed to connect jobseekers and employers seamlessly.</p>
                </div>
                
                <div class="container mx-auto px-4 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Jobseeker Card -->
                        <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="absolute inset-0 bg-linear-to-br from-blue-500/5 to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <div class="relative p-6">
                                <!-- Icon -->
                                <div class="w-14 h-14 bg-linear-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                
                                <!-- Title -->
                                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                                    Jobseeker Portal
                                </h3>
                                
                                <!-- Features List -->
                                <ul class="space-y-2 text-sm text-gray-600 mb-4">
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Register & Build Profile</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>View & Apply for Jobs</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Track Applications</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>View PESO Clearance Issued</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Receive Notifications & Alerts</span>
                                    </li>
                                </ul>
                                
                                <!-- Button -->
                                <button class="w-full bg-blue-50 text-blue-600 font-semibold py-2.5 px-4 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                                    <span>Register Now</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- PESO Admin Card -->
                        <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="absolute inset-0 bg-linear-to-br from-green-500/5 to-emerald-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <div class="relative p-6">
                                <!-- Badge -->
                                <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-2.5 py-1 rounded-full">
                                    CORE
                                </div>
                                
                                <div class="w-14 h-14 bg-linear-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                
                                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                                    PESO Admin
                                </h3>
                                
                                <ul class="space-y-2 text-sm text-gray-600 mb-4">
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Employer Verification (DTI, POEA)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Review & Refer Applications</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>PESO Clearance Issuance</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>LRA / SRA Approvals</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Track Applicant Status</span>
                                    </li>
                                </ul>
                                
                                <button class="w-full bg-green-50 text-green-600 font-semibold py-2.5 px-4 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                                    <span>Admin Portal</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Employer Card -->
                        <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="absolute inset-0 bg-linear-to-br from-orange-500/5 to-red-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <div class="relative p-6">
                                <div class="w-14 h-14 bg-linear-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                
                                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-orange-600 transition-colors">
                                    Employer Portal
                                </h3>
                                
                                <ul class="space-y-2 text-sm text-gray-600 mb-4">
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Post Job Vacancies</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Review Applicants</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Decide: Interview / Hire</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Request LRA</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Receive Notifications & Alerts</span>
                                    </li>
                                </ul>
                                
                                <button class="w-full bg-orange-50 text-orange-600 font-semibold py-2.5 px-4 rounded-lg hover:bg-orange-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                                    <span>Post a Job</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

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

        {{-- ========== SCROLL SPY SCRIPT ========== --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all sections that have an ID
                const sections = document.querySelectorAll('section[id], footer[id]');
                
                // Get all navigation links using data attributes
                const navLinks = {
                    home: {
                        desktop: document.querySelector('a[data-nav="home"]'),
                        mobile: document.querySelector('a[data-nav-mobile="home"]')
                    },
                    jobs: {
                        desktop: document.querySelector('a[data-nav="jobs"]'),
                        mobile: document.querySelector('a[data-nav-mobile="jobs"]')
                    },
                    services: {
                        desktop: document.querySelector('a[data-nav="services"]'),
                        mobile: document.querySelector('a[data-nav-mobile="services"]')
                    },
                    contact: {
                        desktop: document.querySelector('a[data-nav="contact"]'),
                        mobile: document.querySelector('a[data-nav-mobile="contact"]')
                    }
                };

                // Function to remove active class from all links
                function removeActiveClasses() {
                    Object.values(navLinks).forEach(linkPair => {
                        if (linkPair.desktop) {
                            linkPair.desktop.classList.remove('nav-link-active');
                            linkPair.desktop.classList.add('nav-link');
                        }
                        if (linkPair.mobile) {
                            linkPair.mobile.classList.remove('bg-blue-700', 'text-white');
                            linkPair.mobile.classList.add('text-blue-200');
                        }
                    });
                }

                // Function to add active class to specific link
                function setActiveLink(linkName) {
                    const linkPair = navLinks[linkName];
                    if (linkPair) {
                        if (linkPair.desktop) {
                            linkPair.desktop.classList.remove('nav-link');
                            linkPair.desktop.classList.add('nav-link-active');
                        }
                        if (linkPair.mobile) {
                            linkPair.mobile.classList.remove('text-blue-200');
                            linkPair.mobile.classList.add('bg-blue-700', 'text-white');
                        }
                    }
                }

                // Scroll spy function
                function scrollSpy() {
                    const scrollPosition = window.scrollY + 150; // Offset for better UX

                    // Default to home if at top
                    if (window.scrollY < 100) {
                        removeActiveClasses();
                        setActiveLink('home');
                        return;
                    }

                    // Check each section
                    let currentSection = 'home';
                    sections.forEach(section => {
                        const sectionTop = section.offsetTop;
                        const sectionHeight = section.offsetHeight;
                        const sectionId = section.getAttribute('id');

                        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                            currentSection = sectionId;
                        }
                    });

                    // Update active link
                    removeActiveClasses();
                    setActiveLink(currentSection);
                }

                // Listen to scroll events with throttle for performance
                let scrollTimeout;
                window.addEventListener('scroll', function() {
                    if (scrollTimeout) {
                        window.cancelAnimationFrame(scrollTimeout);
                    }
                    scrollTimeout = window.requestAnimationFrame(function() {
                        scrollSpy();
                    });
                });

                // Run on page load
                scrollSpy();

                // Smooth scroll for navigation links
                document.querySelectorAll('a[href^="#"], a[href*="/#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        const href = this.getAttribute('href');
                        const hash = href.includes('/#') ? href.split('/#')[1] : href.substring(1);
                        
                        if (hash && document.getElementById(hash)) {
                            e.preventDefault();
                            const target = document.getElementById(hash);
                            const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                            
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });

                            // Close mobile menu if open
                            const mobileMenu = document.getElementById('mobile-menu');
                            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');
                                document.getElementById('hamburger-icon').classList.remove('hidden');
                                document.getElementById('close-icon').classList.add('hidden');
                            }
                        }
                    });
                });
            });
        </script>

@endsection 

