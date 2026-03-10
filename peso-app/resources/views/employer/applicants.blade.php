@extends('layouts.employer')

@section('title', 'Applicants')

@section('content')

@php
    $jobs = collect(session('employer_jobs', []));

    // Build a flat list of mock applicants per job for display
    $applicants = collect();
    foreach ($jobs as $job) {
        $count = $job['applicants'] ?? 0;
        for ($i = 1; $i <= $count; $i++) {
            $applicants->push([
                'name'    => 'Applicant ' . $i,
                'job'     => $job['title'],
                'status'  => 'Pending',
                'date'    => $job['posted_at'],
            ]);
        }
    }
@endphp

{{-- Page header --}}
<div class="mb-6">
    <h1 class="text-2xl font-extrabold text-gray-900">Applicants</h1>
    <p class="text-sm text-gray-500 mt-1">Applicants referred by PESO Admin for your job postings.</p>
</div>

@if($applicants->isEmpty())
    {{-- Empty state --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-12 text-center">
        <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-1">No Applicants Yet</h3>
        <p class="text-sm text-gray-500 max-w-sm mx-auto">
            PESO Admin will refer applicants to your job postings once they are reviewed.
            Make sure your job postings are active.
        </p>
        <a href="{{ route('employer.jobs.index') }}"
            class="mt-5 inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            View Job Postings
        </a>
    </div>

@else
    {{-- Applicants table --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-sm font-bold text-gray-700">All Referred Applicants</h2>
            <span class="text-xs text-gray-400">{{ $applicants->count() }} total</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-widest">
                    <tr>
                        <th class="px-6 py-3 text-left">Applicant</th>
                        <th class="px-6 py-3 text-left">Job Applied For</th>
                        <th class="px-6 py-3 text-left">Date Referred</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($applicants as $applicant)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                {{ $applicant['name'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $applicant['job'] }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $applicant['date'] }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
                                {{ $applicant['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <button class="text-xs bg-green-100 hover:bg-green-200 text-green-800 font-semibold px-3 py-1 rounded-lg transition">
                                    Hire
                                </button>
                                <button class="text-xs bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold px-3 py-1 rounded-lg transition">
                                    Interview
                                </button>
                                <button class="text-xs bg-red-100 hover:bg-red-200 text-red-800 font-semibold px-3 py-1 rounded-lg transition">
                                    Decline
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection