<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PESO Job Portal System</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

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
                <div class="flex justify-between items-center h-20">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" class="w-18 h-18 rounded-full object-cover shadow-sm">
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

        {{-- ========== ABOUT - HISTORY OF EXCELLENCE ========== --}}
        <section id="about" class="py-20 bg-white">
            <div class="nav-container">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">The History of Excellence</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                        The journey of PESO Manolo Fortich — dedicated to bridging the gap between jobseekers and employers in our community since 2005.
                    </p>
                </div>

                <!-- Timeline -->
                <div class="relative max-w-4xl mx-auto">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-blue-200"></div>

                    <!-- Timeline Item 1 - April 2005 -->
                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12 text-right">
                            <h3 class="text-2xl font-bold text-blue-700">April 13, 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">The Beginning</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                The Public Employment Service Office (PESO) of Manolo Fortich commenced its dynamic operations following the approval of Resolution No. 2005-08, which sanctioned the creation of Plantilla positions under the PESO of the Local Government Unit.
                            </p>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12"></div>
                    </div>

                    <!-- Timeline Item 2 - July 2005 -->
                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12">
                            <h3 class="text-2xl font-bold text-blue-700">July 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">Institutionalization</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                Recognizing the need for a dedicated institution to address employment challenges, the Manolo Fortich Municipal Mayor's office institutionalized the PESO through an ordinance under Sangguniang Bayan Resolution No. 2005-94, under the leadership of Mayor Socorro O. Acosta. This marked a significant step towards formalizing the office's role in facilitating employment opportunities and supporting workforce development.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 3 - October 2005 -->
                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12 text-right">
                            <h3 class="text-2xl font-bold text-blue-700">October 26, 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">DOLE Accreditation</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                A pivotal resolution authorized Mayor Acosta to enter into an agreement with the Department of Labor and Employment (DOLE), culminating in the official accreditation of the PESO. This accreditation opened doors for collaboration with DOLE and other government agencies, enhancing the office's capacity to serve the community.
                            </p>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12"></div>
                    </div>

                    <!-- Timeline Item 4 - January 2013 -->
                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12">
                            <h3 class="text-2xl font-bold text-blue-700">January 2013</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">Manpower Skills Registration System</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                As leadership transitioned to Hon. Rogelio N. Guo, the PESO continued its mission to provide quality employment services. A resolution supporting the establishment of the Manpower Skills Registration System underscored the office's commitment to addressing the evolving needs of job seekers.
                            </p>
                        </div>
                    </div>                  
                </div>

                <!-- Mission and Vision -->
                <div class="grid md:grid-cols-2 gap-10 mt-20">
                    <!-- Mission -->
                    <div class="bg-blue-50 rounded-2xl p-10 border border-blue-100">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-800">Mission</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            To promote economic growth and sustainable development in Manolo Fortich through the implementation of the PESO program, providing employment opportunities and skills development for the community.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div class="bg-red-50 rounded-2xl p-10 border border-red-100">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-800">Vision</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            To become the lead municipality in the Philippines by creating a robust local economy that provides decent jobs, promotes entrepreneurship, and enhances the quality of life of the residents of Manolo Fortich.
                        </p>
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
        <section class="py-20 bg-white">
            <div class="nav-container">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">REPUBLIC ACT NO. 8759</h2>
                    <p class="text-gray-500 uppercase tracking-wide text-sm md:text-base mb-8">
                        AN ACT INSTITUTIONALIZING A NATIONAL FACILITATION SERVICE NETWORK THROUGH THE ESTABLISHMENT OF A PUBLIC EMPLOYMENT SERVICE OFFICE IN EVERY PROVINCE, KEY CITY AND OTHER STRATEGIC AREAS THROUGHOUT THE COUNTRY.
                    </p>
                    <p class="text-gray-700 text-base leading-relaxed mb-6">
                        Be it enacted by the Senate and House of Representatives of the Philippines in Congress assembled:
                    </p>
                    <p class="text-gray-700 text-base leading-relaxed mb-6">
                        Section 1– Title. — This Act shall be known as the "Public Employment Service Office Act of 1999."
                    </p>
                    <p class="text-gray-700 text-base leading-relaxed mb-6">
                        Section 2.  Declaration of Policy. - It is a declared policy of the State to promote full employment and equality of employment opportunities for all, and for this purpose, to strengthen and expand the existing employment facilitation service machinery of the government particularly at the local levels.
                    </p>
                    <p class="text-gray-700 text-base leading-relaxed">
                        Approved: February 14, 2000 .
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

        {{-- ========== FOOTER / CONTACT ========== --}}
        <footer id="contact" class="peso-footer">
            <div class="nav-container">
                <div class="grid md:grid-cols-4 gap-8 items-start">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" class="w-10 h-7 rounded-full object-cover shadow-sm">
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
                                <span>Municipal Hall, Manolo Fortich, Bukidnon</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span><peso@manolofortich class="gov ph"></peso@manolofortich></span>
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
                            <li><a href="#home" class="footer-link">Home</a></li>
                            <li><a href="#about" class="footer-link">About PESO</a></li>
                            <li><a href="#services" class="footer-link">Services</a></li>
                            <li><a href="#jobs" class="footer-link">Job Listings</a></li>
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

    </body>
</html>
