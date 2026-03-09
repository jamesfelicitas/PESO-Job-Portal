@extends('layouts.employer')

@section('title', 'Job Postings')

@section('content')

{{-- Header --}}
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-gray-900">Job Postings</h1>
        <p class="text-sm text-gray-500 mt-1">Manage your active and closed job listings.</p>
    </div>
    <a href="{{ route('employer.jobs.create') }}"
        class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition shadow-sm">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Post a Job
    </a>
</div>

@if (session('success'))
    <div class="mb-4 bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 text-sm font-medium flex items-center gap-2">
        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        {{ session('success') }}
    </div>
@endif

@php $jobs = session('employer_jobs', []); @endphp

@if (count($jobs) === 0)
    {{-- Empty state --}}
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center py-20 text-center px-6">
        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </div>
        <p class="text-base font-bold text-gray-700">No job postings yet</p>
        <p class="text-sm text-gray-400 mt-1 max-w-xs">Click "Post a Job" to publish your first vacancy and start receiving applicants.</p>
        <a href="{{ route('employer.jobs.create') }}"
            class="mt-6 inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Post a Job
        </a>
    </div>

@else
    {{-- Summary bar --}}
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-5">
        @php
            $active = collect($jobs)->where('status', 'active')->count();
            $closed = collect($jobs)->where('status', 'closed')->count();
            $totalApplicants = collect($jobs)->sum('applicants');
        @endphp
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm px-4 py-3 text-center">
            <p class="text-xl font-extrabold text-gray-900">{{ count($jobs) }}</p>
            <p class="text-xs text-gray-500 mt-0.5">Total Posts</p>
        </div>
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm px-4 py-3 text-center">
            <p class="text-xl font-extrabold text-green-600">{{ $active }}</p>
            <p class="text-xs text-gray-500 mt-0.5">Active</p>
        </div>
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm px-4 py-3 text-center">
            <p class="text-xl font-extrabold text-gray-400">{{ $closed }}</p>
            <p class="text-xs text-gray-500 mt-0.5">Closed</p>
        </div>
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm px-4 py-3 text-center">
            <p class="text-xl font-extrabold text-blue-700">{{ $totalApplicants }}</p>
            <p class="text-xs text-gray-500 mt-0.5">Applicants</p>
        </div>
    </div>

    {{-- Job cards --}}
    <div class="space-y-3">
        @foreach (array_reverse($jobs) as $job)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm px-5 py-4">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3">
                <div class="flex items-start gap-4 flex-1 min-w-0">
                    {{-- Company Logo --}}
                    <div class="w-12 h-12 rounded-xl overflow-hidden border border-gray-100 shrink-0 flex items-center justify-center bg-blue-50 mt-0.5">
                        @if (!empty($job['logo']))
                            <img src="{{ $job['logo'] }}" alt="Logo" class="w-full h-full object-cover">
                        @else
                            <span class="text-blue-700 font-extrabold text-lg leading-none">{{ strtoupper(substr($job['title'], 0, 1)) }}</span>
                        @endif
                    </div>
                    <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-2 mb-1">
                        <span class="text-base font-bold text-gray-900 truncate">{{ $job['title'] }}</span>
                        @if ($job['status'] === 'active')
                            <span class="text-xs font-semibold bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full">Active</span>
                        @else
                            <span class="text-xs font-semibold bg-gray-100 text-gray-500 px-2.5 py-0.5 rounded-full">Closed</span>
                        @endif
                    </div>
                    <div class="flex flex-wrap gap-x-4 gap-y-1 text-xs text-gray-500">
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $job['location'] }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            {{ $job['job_type'] }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $job['slots'] }} slot{{ $job['slots'] > 1 ? 's' : '' }}
                        </span>
                        @if (!empty($job['salary_min']) || !empty($job['salary_max']))
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            ₱{{ number_format($job['salary_min'] ?? 0) }}{{ !empty($job['salary_max']) ? ' – ₱' . number_format($job['salary_max']) : '' }}
                        </span>
                        @endif
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Posted {{ $job['posted_at'] }}
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $job['description'] }}</p>
                    </div>{{-- end inner flex-1 --}}
                </div>{{-- end logo + content flex --}}

                {{-- Actions --}}
                <div class="flex items-center gap-2 shrink-0">
                    <span class="text-xs text-gray-400 font-semibold">{{ $job['applicants'] }} applicant{{ $job['applicants'] !== 1 ? 's' : '' }}</span>

                    <form method="POST" action="{{ route('employer.jobs.toggle', $job['id']) }}">
                        @csrf
                        <button type="submit"
                            class="text-xs font-semibold px-3 py-1.5 rounded-lg border transition
                                {{ $job['status'] === 'active'
                                    ? 'border-gray-300 text-gray-600 hover:bg-gray-50'
                                    : 'border-green-300 text-green-700 hover:bg-green-50' }}">
                            {{ $job['status'] === 'active' ? 'Close' : 'Reopen' }}
                        </button>
                    </form>

                    <form method="POST" action="{{ route('employer.jobs.delete', $job['id']) }}"
                        onsubmit="return confirm('Delete this job posting?')">
                        @csrf
                        <button type="submit"
                            class="text-xs font-semibold px-3 py-1.5 rounded-lg border border-red-200 text-red-600 hover:bg-red-50 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif

@endsection
