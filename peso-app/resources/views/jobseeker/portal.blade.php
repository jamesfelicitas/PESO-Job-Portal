@extends('layouts.app')

@section('title', 'Applicant Portal - PESO Manolo Fortich')

@section('content')

<section class="py-16 bg-gray-50 min-h-screen relative overflow-hidden">

    {{-- Watermark --}}
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none">
        <img src="{{ asset('images/PESOO.png') }}" alt="" class="w-130 h-130 object-contain opacity-5">
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">

        {{-- ===== PAGE TITLE ===== --}}
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 uppercase tracking-wide">
                PESO <span class="text-orange-500">Job</span> Portal System
            </h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto mt-3"></div>
        </div>

        {{-- ===== THREE-COLUMN FLOW ===== --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">

            {{-- ──────────── COLUMN 1: APPLICANT ──────────── --}}
            <div class="flex flex-col gap-4">

                {{-- Card --}}
                <div class="rounded-2xl border-2 border-blue-500 bg-white shadow p-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-blue-800">Applicant</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-blue-500 shrink-0"></span>
                            Referred by PESO Admin
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-blue-500 shrink-0"></span>
                            Profile &amp; Resume on File
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-blue-500 shrink-0"></span>
                            Application Status Tracked
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-blue-500 shrink-00"></span>
                            PESO Clearance Issued <span class="italic text-gray-400 ml-1">(upon hiring)</span>
                        </li>
                    </ul>
                    <div class="mt-4 pt-3 border-t border-blue-100 text-center">
                        <a href="#" class="inline-block bg-blue-700 hover:bg-blue-800 text-white text-xs font-semibold px-5 py-2 rounded-lg transition">
                            View Applicants →
                        </a>
                    </div>
                </div>

                {{-- Application Status --}}
                <div class="rounded-2xl bg-yellow-50 border border-yellow-300 shadow p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-5-5.917V4a1 1 0 10-2 0v1.083A6 6 0 006 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <h3 class="text-sm font-bold text-yellow-700">Status Updates</h3>
                    </div>
                    <p class="text-xs text-yellow-700">Employer receives alerts when a new applicant is referred by PESO Admin.</p>
                </div>

                {{-- Decision --}}
                <div class="rounded-2xl bg-orange-50 border border-orange-200 shadow p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <h3 class="text-sm font-bold text-orange-700">Employer Decision</h3>
                    </div>
                    <ul class="text-xs text-orange-700 space-y-1">
                        <li>• Mark: Interview Scheduled</li>
                        <li>• Mark: Hired</li>
                        <li>• Mark: Not Selected</li>
                    </ul>
                </div>

            </div>

            {{-- ──────────── COLUMN 2: PESO ADMIN ──────────── --}}
            <div class="flex flex-col gap-4">

                <div class="rounded-2xl border-2 border-green-500 bg-white shadow p-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-green-800">PESO Admin</h2>
                    </div>

                    {{-- Employer Verification --}}
                    <div class="mb-4">
                        <h3 class="text-xs font-bold text-green-700 uppercase tracking-wide mb-1">Employer Verification</h3>
                        <ul class="text-xs text-gray-600 space-y-0.5 pl-2">
                            <li>• Review Documents (SEC, DTI, POEA…)</li>
                            <li>• Approve Verified Employers (Local/Overseas)</li>
                        </ul>
                    </div>

                    {{-- Job Referral --}}
                    <div class="mb-4">
                        <h3 class="text-xs font-bold text-green-700 uppercase tracking-wide mb-1">Job Referral &amp; Tracking</h3>
                        <ul class="text-xs text-gray-600 space-y-0.5 pl-2">
                            <li>• Review Applications</li>
                            <li>• Refer Applicants to Employers</li>
                        </ul>
                    </div>

                    {{-- PESO Clearance --}}
                    <div class="mb-4">
                        <h3 class="text-xs font-bold text-green-700 uppercase tracking-wide mb-1">PESO Clearance Issuance</h3>
                        <ul class="text-xs text-gray-600 space-y-0.5 pl-2">
                            <li>• Record OR Number</li>
                            <li>• Issue &amp; Print Clearance</li>
                        </ul>
                    </div>

                    {{-- LRA/SRA --}}
                    <div class="mb-4">
                        <h3 class="text-xs font-bold text-green-700 uppercase tracking-wide mb-1">LRA / SRA Approvals</h3>
                        <ul class="text-xs text-gray-600 space-y-0.5 pl-2">
                            <li>• Verify Documents</li>
                            <li>• Issue Certificate of No Objection (PESO Manager &amp; Mayor)</li>
                            <li>• Track Applicant Status (Interview / Hired / Not Selected)</li>
                        </ul>
                    </div>

                    {{-- Dynamic Report --}}
                    <div class="rounded-xl bg-blue-50 border border-blue-200 p-3">
                        <h3 class="text-xs font-bold text-blue-700 uppercase tracking-wide mb-1">Dynamic Report Checker</h3>
                        <ul class="text-xs text-blue-700 space-y-0.5 pl-2">
                            <li>✓ Include/Exclude Fields</li>
                            <li>✓ e.g. Barangay, Zone</li>
                            <li>✓ Barangay &nbsp; ✓ Job Title</li>
                            <li>✓ Industry &nbsp;&nbsp; ✓ Zone</li>
                            <li>✓ Employer</li>
                        </ul>
                        <p class="text-xs text-blue-600 mt-2 font-semibold">Export: Excel / PDF / CSV</p>
                    </div>
                </div>

            </div>

            {{-- ──────────── COLUMN 3: EMPLOYER ──────────── --}}
            <div class="flex flex-col gap-4">

                <div class="rounded-2xl border-2 border-orange-500 bg-white shadow p-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-orange-800">Employer</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-orange-500 shrink-0"></span>
                            Post Job Vacancies
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-orange-500 shrink-0"></span>
                            Review Referred Applicants
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-orange-500 shrink-0"></span>
                            Decide: Interview / Hired / Not Selected
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 mt-1.5 rounded-full bg-orange-500 shrink-0"></span>
                            Request LRA / SRA
                        </li>
                    </ul>
                    <div class="mt-4 pt-3 border-t border-orange-100 text-center">
                        <a href="{{ route('employer.register') }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white text-xs font-semibold px-5 py-2 rounded-lg transition">
                            Register as Employer →
                        </a>
                    </div>
                </div>

                {{-- Employer Notifications --}}
                <div class="rounded-2xl bg-yellow-50 border border-yellow-300 shadow p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-5-5.917V4a1 1 0 10-2 0v1.083A6 6 0 006 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <h3 class="text-sm font-bold text-yellow-700">Notifications &amp; Alerts</h3>
                    </div>
                    <p class="text-xs text-yellow-700">Receives alerts when Announcements are posted.</p>
                </div>

                {{-- Submit Docs --}}
                <div class="rounded-2xl bg-red-50 border border-red-200 shadow p-4">
                    <h3 class="text-xs font-bold text-red-700 uppercase tracking-wide mb-1">Submit Docs</h3>
                    <ul class="text-xs text-red-700 space-y-0.5 pl-2">
                        <li>• Letter of Intent</li>
                        <li>• Company Profile</li>
                        <li>• Job Ad</li>
                    </ul>
                </div>

            </div>

        </div>

        {{-- ===== PROCESS FLOW BANNER ===== --}}
        <div class="rounded-2xl bg-blue-900 text-white px-6 py-4 mb-6 shadow-lg">
            <div class="flex flex-wrap justify-center items-center gap-2 text-xs font-semibold text-center">
                <span class="bg-blue-700 rounded-full px-3 py-1">Pending PESO Review</span>
                <span class="text-blue-300">→</span>
                <span class="bg-blue-700 rounded-full px-3 py-1">Referred to Employer</span>
                <span class="text-blue-300">→</span>
                <span class="bg-blue-700 rounded-full px-3 py-1">Decide: Interview / Hired / Not Selected</span>
                <span class="text-blue-300">→</span>
                <span class="bg-green-600 rounded-full px-3 py-1">PESO Clearance Issued</span>
            </div>
        </div>

        {{-- ===== AUTO NOTIFICATION BANNER ===== --}}
        <div class="rounded-2xl bg-yellow-400 text-yellow-900 px-6 py-3 mb-6 text-center shadow">
            <p class="text-sm font-bold">Auto Notification to Applicants &amp; Employers upon PESO Announcement Posting</p>
        </div>

        {{-- ===== BOTTOM FEATURES ===== --}}
        <div class="flex flex-wrap justify-center gap-8 text-sm text-gray-600 font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-5-5.917V4a1 1 0 10-2 0v1.083A6 6 0 006 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                Notifications &amp; Alerts
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
                </svg>
                Barangay IS Integration
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                Reports &amp; Analytics
            </div>
        </div>

    </div>
</section>

@endsection