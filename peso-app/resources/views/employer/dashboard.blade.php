@extends('layouts.employer')

@section('title', 'Dashboard')

@section('content')

@php
    $jobs = collect(session('employer_jobs', []));
    $totalJobs = $jobs->count();
    $activeJobs = $jobs->where('status', 'active')->count();
    $totalApplicants = $jobs->sum('applicants');
@endphp

{{-- Page header --}}
<div class="mb-6">
    <h1 class="text-2xl font-extrabold text-gray-900">Dashboard</h1>
    <p class="text-sm text-gray-500 mt-1">Welcome back, <span class="font-semibold text-blue-700">{{ session('employer.company', 'Employer') }}</span>! Here's your overview.</p>
</div>

{{-- Stats cards --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </div>
        <div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $totalJobs }}</p>
            <p class="text-sm text-gray-500">Total Job Postings</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $activeJobs }}</p>
            <p class="text-sm text-gray-500">Active Listings</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center shrink-0">
            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $totalApplicants }}</p>
            <p class="text-sm text-gray-500">Total Applicants</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center shrink-0">
            <svg class="w-6 h-6 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <div>
            <p class="text-2xl font-extrabold text-gray-900">0</p>
            <p class="text-sm text-gray-500">Interviews Scheduled</p>
        </div>
    </div>

</div>

{{-- Main content grid --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Quick Actions --}}
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Quick Actions</h2>
            <div class="space-y-3">
                <a href="{{ route('employer.jobs.create') }}"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold transition">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Post a New Job
                </a>
                <a href="{{ route('employer.jobs.index') }}"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 text-sm font-semibold transition">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    View All Job Postings
                </a>
                <button disabled
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 text-gray-500 text-sm font-semibold opacity-50 cursor-not-allowed">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    View Applicants
                    <span class="ml-auto text-xs bg-gray-100 text-gray-400 px-2 py-0.5 rounded-full">Soon</span>
                </button>
            </div>
        </div>

        {{-- Account info --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 mt-4">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Account Info</h2>
            <div class="space-y-3 text-sm">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400">Logged in as</p>
                        <p class="font-semibold text-gray-800">{{ session('employer.email') }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400">Company</p>
                        <p class="font-semibold text-gray-800">{{ session('employer.company') }}</p>
                    </div>
                </div>
                <div class="pt-1">
                    <span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-yellow-50 text-yellow-700 border border-yellow-200 px-3 py-1.5 rounded-full">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Pending PESO Verification
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activity --}}
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 h-full">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Recent Activity</h2>
            <div class="flex flex-col items-center justify-center py-16 text-center text-gray-400">
                <svg class="w-14 h-14 mb-4 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <p class="text-sm font-semibold text-gray-500">No activity yet</p>
                <p class="text-xs text-gray-400 mt-1">Your job postings and applicant activity will appear here.</p>
            </div>
        </div>
    </div>

</div>

{{-- PESO Notice --}}
<div class="mt-6 bg-blue-50 border border-blue-200 rounded-2xl px-5 py-4 flex gap-4 items-start">
    <svg class="w-5 h-5 text-blue-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
    <div class="text-sm text-blue-800">
        <p class="font-semibold">Your account is under review</p>
        <p class="mt-0.5 text-blue-700">PESO Manolo Fortich will verify your employer account before you can post jobs. This usually takes 1–3 business days. We'll notify you by email once approved.</p>
    </div>
</div>

@endsection
