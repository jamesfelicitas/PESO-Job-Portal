@extends('layouts.app')

@section('title', 'Privacy Policy — PESO Job Portal')

@section('content')

<section class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">

        {{-- Header --}}
        <div class="bg-linear-to-br from-blue-900 via-blue-800 to-blue-700 rounded-2xl px-8 py-10 text-center mb-8 shadow-xl">
            <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" width="10" height="10"
                class="w-20 h-20 rounded-full object-cover shadow-lg mx-auto mb-4">
            <h1 class="text-3xl font-extrabold text-white">Privacy Policy</h1>
            <p class="text-blue-200 text-sm mt-2">PESO Job Portal System — Manolo Fortich, Bukidnon</p>
            <p class="text-blue-300 text-xs mt-1">Last updated: March 9, 2026</p>
        </div>

        {{-- Content Card --}}
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 px-8 py-10 space-y-8 text-sm text-gray-600 leading-relaxed">

            <p>
                The Public Employment Service Office (PESO) of Manolo Fortich, Bukidnon is committed to protecting
                the privacy and personal data of all users of this portal, in full compliance with the
                <span class="font-semibold text-gray-800">Data Privacy Act of 2012 (Republic Act No. 10173)</span>
                and its Implementing Rules and Regulations.
            </p>

            {{-- Section 1 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">1</span>
                    Information We Collect
                </h2>
                <p>When you register or use the PESO Job Portal, we may collect the following personal information:</p>
                <ul class="list-disc list-inside space-y-1 mt-2 ml-2">
                    <li>Full name and contact details (phone number, email address)</li>
                    <li>Company name, industry, size, and business address (for employers)</li>
                    <li>Resume, work experience, and educational background (for jobseekers)</li>
                    <li>Account credentials (email and encrypted password)</li>
                    <li>Usage data such as pages visited and actions taken on the portal</li>
                </ul>
            </div>

            {{-- Section 2 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">2</span>
                    How We Use Your Information
                </h2>
                <p>The personal information we collect is used solely for:</p>
                <ul class="list-disc list-inside space-y-1 mt-2 ml-2">
                    <li>Creating and managing your portal account</li>
                    <li>Facilitating employment matching between jobseekers and employers</li>
                    <li>Sending notifications about job opportunities, applications, or portal updates</li>
                    <li>Generating statistical reports for DOLE and partner agencies (anonymized data only)</li>
                    <li>Complying with legal and regulatory obligations</li>
                </ul>
            </div>

            {{-- Section 3 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">3</span>
                    Data Sharing and Disclosure
                </h2>
                <p>
                    We do <strong>not</strong> sell, rent, or trade your personal data to third parties.
                    Your information may be shared only with:
                </p>
                <ul class="list-disc list-inside space-y-1 mt-2 ml-2">
                    <li>DOLE regional offices and partner national government agencies for employment facilitation</li>
                    <li>Authorized PESO personnel processing your application or inquiry</li>
                    <li>Law enforcement or government bodies when required by law</li>
                </ul>
            </div>

            {{-- Section 4 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">4</span>
                    Data Security
                </h2>
                <p>
                    We implement appropriate technical and organizational security measures to protect your personal
                    data against unauthorized access, disclosure, alteration, or destruction. Passwords are stored
                    using industry-standard hashing and are never stored in plain text.
                </p>
            </div>

            {{-- Section 5 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">5</span>
                    Your Rights Under RA 10173
                </h2>
                <p>As a data subject, you have the following rights:</p>
                <ul class="list-disc list-inside space-y-1 mt-2 ml-2">
                    <li><strong>Right to be informed</strong> — Know how your data is collected and used</li>
                    <li><strong>Right to access</strong> — Request a copy of your personal data we hold</li>
                    <li><strong>Right to rectification</strong> — Correct inaccurate or outdated information</li>
                    <li><strong>Right to erasure</strong> — Request deletion of your data under certain conditions</li>
                    <li><strong>Right to object</strong> — Opt out of certain data processing activities</li>
                    <li><strong>Right to data portability</strong> — Receive your data in a usable format</li>
                </ul>
                <p class="mt-2">To exercise any of these rights, please contact PESO Manolo Fortich directly.</p>
            </div>

            {{-- Section 6 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">6</span>
                    Cookies
                </h2>
                <p>
                    This portal uses session cookies strictly necessary for authentication and security purposes.
                    We do not use tracking, advertising, or analytics cookies of any kind.
                </p>
            </div>

            {{-- Section 7 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">7</span>
                    Retention of Data
                </h2>
                <p>
                    Personal data is retained only for as long as necessary to fulfill the purposes for which it
                    was collected, or as required by law. Inactive accounts may be deleted after a period of
                    inactivity, following prior notice.
                </p>
            </div>

            {{-- Section 8 --}}
            <div>
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">8</span>
                    Changes to This Policy
                </h2>
                <p>
                    PESO Manolo Fortich reserves the right to update this Privacy Policy at any time.
                    Significant changes will be communicated via the portal. Continued use of the portal
                    after changes constitutes your acceptance of the revised policy.
                </p>
            </div>

            {{-- Section 9 --}}
            <div class="bg-blue-50 border border-blue-100 rounded-xl p-5">
                <h2 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-extrabold shrink-0">9</span>
                    Contact Us
                </h2>
                <p>For any privacy-related concerns or to exercise your data rights, please reach us at:</p>
                <div class="mt-3 space-y-1 text-gray-700">
                    <p><span class="font-semibold">PESO Manolo Fortich</span></p>
                    <p>Municipal Hall, Manolo Fortich, Bukidnon, Philippines</p>
                    <p>
                        Or use our
                        <a href="{{ url('/contact') }}" class="text-blue-600 hover:underline font-semibold">Contact Page</a>.
                    </p>
                </div>
            </div>

        </div>

        {{-- Back link --}}
        <div class="text-center mt-8">
            <a href="{{ url('/register/employer') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-blue-700 transition font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Registration
            </a>
        </div>

    </div>
</section>

@endsection
