@extends('layouts.employer')

@section('title', 'Settings')

@section('content')

@if(session('success'))
    <div id="toast-success"
         class="fixed top-5 right-5 z-50 flex items-center gap-3 bg-white border border-green-200 text-green-700 rounded-2xl px-5 py-3 text-sm font-medium shadow-lg transition">
        <svg class="w-5 h-5 shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('success') }}
    </div>
    <script>setTimeout(()=>{ const t=document.getElementById('toast-success'); if(t) t.style.opacity=0; }, 3000);</script>
@endif

{{-- ══════════════════════════════════════
     FACEBOOK-STYLE SETTINGS LAYOUT
     Left panel (sidebar) + Right panel
════════════════════════════════════════ --}}
<div class="flex flex-col md:flex-row min-h-screen -m-4 sm:-m-6 lg:-m-8">

    {{-- ─────────────────────────────────────────
         LEFT SIDEBAR  (Facebook-style)
    ───────────────────────────────────────────── --}}
    <aside id="settings-sidebar"
           class="w-full md:w-80 lg:w-96 bg-white border-r border-gray-200 flex flex-col shrink-0 md:min-h-screen">

        {{-- Sidebar header --}}
        <div class="px-5 pt-6 pb-4 border-b border-gray-100">
            <h1 class="text-2xl font-extrabold text-gray-900">Settings</h1>
        </div>

        {{-- Search bar --}}
        <div class="px-4 py-3 border-b border-gray-100">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" id="settings-search" placeholder="Search Settings"
                       class="w-full bg-gray-100 rounded-full pl-9 pr-4 py-2 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition">
            </div>
        </div>

        {{-- Nav items --}}
        <nav class="flex-1 overflow-y-auto py-2 px-2 space-y-0.5">

            {{-- Section label --}}
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider px-3 py-2 mt-1">Account</p>

            <button onclick="showTab('edit-profile')" id="tab-btn-edit-profile"
                data-label="Edit Profile"
                class="fb-nav-btn active-nav w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-left text-blue-700 bg-blue-50 transition group">
                <span class="w-9 h-9 rounded-full bg-blue-100 group-[.active-nav]:bg-blue-200 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </span>
                <div class="min-w-0">
                    <p class="truncate leading-tight">Edit Profile</p>
                    <p class="text-xs font-normal text-blue-500 truncate">Company info, contact details</p>
                </div>
            </button>

            <button onclick="showTab('change-password')" id="tab-btn-change-password"
                data-label="Change Password"
                class="fb-nav-btn w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-left text-gray-700 hover:bg-gray-100 transition group">
                <span class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </span>
                <div class="min-w-0">
                    <p class="truncate leading-tight">Security & Password</p>
                    <p class="text-xs font-normal text-gray-400 truncate">Change your password</p>
                </div>
            </button>

            <button onclick="showTab('notifications')" id="tab-btn-notifications"
                data-label="Notifications"
                class="fb-nav-btn w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-left text-gray-700 hover:bg-gray-100 transition group">
                <span class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </span>
                <div class="min-w-0">
                    <p class="truncate leading-tight">Notifications</p>
                    <p class="text-xs font-normal text-gray-400 truncate">Alerts & preferences</p>
                </div>
            </button>

            <div class="pt-3 pb-1">
                <p class="text-xs font-bold text-gray-500 uppercase tracking-wider px-3 py-2">Danger Zone</p>
                <button onclick="showTab('danger')" id="tab-btn-danger"
                    data-label="Delete Account"
                    class="fb-nav-btn w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-left text-red-600 hover:bg-red-50 transition group">
                    <span class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </span>
                    <div class="min-w-0">
                        <p class="truncate leading-tight">Delete Account</p>
                        <p class="text-xs font-normal text-red-400 truncate">Permanently remove account</p>
                    </div>
                </button>
            </div>

        </nav>
    </aside>

    {{-- ─────────────────────────────────────────
         RIGHT CONTENT PANEL
    ───────────────────────────────────────────── --}}
    <main class="flex-1 bg-gray-50 overflow-y-auto">

        {{-- Mobile back button (shown when a panel is open on small screens) --}}
        <div class="md:hidden flex items-center gap-3 px-4 pt-4 pb-2 bg-white border-b border-gray-100" id="mobile-back-bar">
            <button onclick="mobileBack()" class="flex items-center gap-2 text-blue-600 text-sm font-semibold">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Settings
            </button>
            <span class="text-gray-400 text-sm" id="mobile-back-label">Edit Profile</span>
        </div>

        <div class="max-w-2xl mx-auto px-4 sm:px-6 py-6 space-y-5">

            {{-- ════ EDIT PROFILE ════ --}}
            <div id="tab-edit-profile" class="settings-tab">

                {{-- Profile card --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-5">
                    <div class="bg-linear-to-r from-blue-600 to-blue-800 h-20"></div>
                    <div class="px-5 pb-5">
                        <div class="flex items-end justify-between -mt-8 mb-4">
                            <div class="w-16 h-16 rounded-full bg-white ring-4 ring-white flex items-center justify-center shadow">
                                <svg class="w-9 h-9 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-400 italic">Profile visible to PESO Admin</span>
                        </div>
                        <h2 class="text-lg font-extrabold text-gray-900">{{ session('employer.company', 'Your Company') }}</h2>
                        <p class="text-sm text-gray-500">{{ session('employer.email', '') }}</p>
                        @if(session('employer.industry'))
                            <span class="inline-block mt-2 bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">{{ session('employer.industry') }}</span>
                        @endif
                    </div>
                </div>

                {{-- Form card --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-4">Company Information</h3>

                    <form method="POST" action="{{ route('employer.settings.update') }}" novalidate>
                        @csrf
                        <div class="space-y-4">

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Company / Business Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="company"
                                       value="{{ old('company', session('employer.company', '')) }}"
                                       class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('company') bg-red-50 @enderror"
                                       placeholder="e.g. Del Monte Philippines, Inc.">
                                @error('company') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="email"
                                           value="{{ old('email', session('employer.email', '')) }}"
                                           class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') bg-red-50 @enderror"
                                           placeholder="employer@company.com">
                                    @error('email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Contact Number</label>
                                    <input type="text" name="contact"
                                           value="{{ old('contact', session('employer.contact', '')) }}"
                                           class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                           placeholder="+63 9XX XXX XXXX">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Industry</label>
                                    <select name="industry" class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                        <option value="">— Select Industry —</option>
                                        @foreach(['Agriculture','Business Process Outsourcing','Construction','Education','Finance & Banking','Food & Beverage','Government','Healthcare','Hospitality & Tourism','Information Technology','Manufacturing','Mining','Retail & Trade','Transportation & Logistics','Other'] as $ind)
                                            <option value="{{ $ind }}" {{ old('industry', session('employer.industry')) === $ind ? 'selected' : '' }}>{{ $ind }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Website</label>
                                    <input type="url" name="website"
                                           value="{{ old('website', session('employer.website', '')) }}"
                                           class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('website') bg-red-50 @enderror"
                                           placeholder="https://www.company.com">
                                    @error('website') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Business Address</label>
                                <input type="text" name="address"
                                       value="{{ old('address', session('employer.address', '')) }}"
                                       class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="e.g. Brgy. Kalasungay, Manolo Fortich, Bukidnon">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">About the Company</label>
                                <textarea name="about" rows="4"
                                          class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                          placeholder="Brief description of your company...">{{ old('about', session('employer.about', '')) }}</textarea>
                            </div>

                        </div>

                        <div class="mt-5 pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-3">
                            <a href="{{ route('employer.dashboard') }}"
                               class="text-center px-5 py-2.5 rounded-xl border border-gray-300 text-sm font-semibold text-gray-600 hover:bg-gray-50 transition">
                                Cancel
                            </a>
                            <button type="submit"
                                    class="px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold transition shadow-sm">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ════ SECURITY & PASSWORD ════ --}}
            <div id="tab-change-password" class="settings-tab hidden">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-1">Security & Password</h3>
                    <p class="text-sm text-gray-500 mb-5">Manage how you access your account.</p>

                    <div class="flex items-start gap-3 bg-amber-50 border border-amber-200 rounded-xl px-4 py-3 mb-6 text-sm text-amber-700">
                        <svg class="w-5 h-5 shrink-0 mt-0.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Password management will be available once backend authentication is set up.
                    </div>

                    <div class="space-y-4 opacity-50 pointer-events-none">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Current Password</label>
                            <input type="password" disabled class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm bg-gray-50" placeholder="••••••••">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">New Password</label>
                            <input type="password" disabled class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm bg-gray-50" placeholder="••••••••">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Confirm New Password</label>
                            <input type="password" disabled class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm bg-gray-50" placeholder="••••••••">
                        </div>
                        <div class="flex justify-end pt-1">
                            <button disabled class="px-6 py-2.5 rounded-xl bg-blue-600 text-white text-sm font-semibold">Update Password</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ════ NOTIFICATIONS ════ --}}
            <div id="tab-notifications" class="settings-tab hidden">

                {{-- Unread badge summary --}}
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-base font-bold text-gray-800">Notifications</h3>
                        <p class="text-sm text-gray-500">Recent alerts for your account</p>
                    </div>
                    <span class="bg-blue-600 text-white text-xs font-bold px-2.5 py-1 rounded-full">3 New</span>
                </div>

                {{-- Notification list --}}
                <div class="space-y-3">

                    {{-- Unread: New Applicant --}}
                    <div class="flex items-start gap-3 bg-blue-50 border border-blue-100 rounded-2xl px-4 py-3.5 relative">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center shrink-0 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">New Applicant — Web Developer</p>
                            <p class="text-sm text-gray-600 mt-0.5">Juan dela Cruz submitted an application for your <span class="font-medium">Web Developer</span> posting.</p>
                            <p class="text-xs text-gray-400 mt-1">Today, 9:41 AM</p>
                        </div>
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600 shrink-0 mt-1"></span>
                    </div>

                    {{-- Unread: PESO Admin reviewed --}}
                    <div class="flex items-start gap-3 bg-blue-50 border border-blue-100 rounded-2xl px-4 py-3.5 relative">
                        <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center shrink-0 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Job Posting Approved</p>
                            <p class="text-sm text-gray-600 mt-0.5">PESO Admin approved your job posting: <span class="font-medium">Customer Service Representative</span>.</p>
                            <p class="text-xs text-gray-400 mt-1">Today, 8:15 AM</p>
                        </div>
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600 shrink-0 mt-1"></span>
                    </div>

                    {{-- Unread: Reminder --}}
                    <div class="flex items-start gap-3 bg-blue-50 border border-blue-100 rounded-2xl px-4 py-3.5 relative">
                        <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center shrink-0 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Job Posting Expiring Soon</p>
                            <p class="text-sm text-gray-600 mt-0.5">Your posting <span class="font-medium">Accounting Clerk</span> expires in 3 days. Renew it to keep receiving applicants.</p>
                            <p class="text-xs text-gray-400 mt-1">Yesterday, 5:00 PM</p>
                        </div>
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600 shrink-0 mt-1"></span>
                    </div>

                    {{-- Read: Interview scheduled --}}
                    <div class="flex items-start gap-3 bg-white border border-gray-100 rounded-2xl px-4 py-3.5">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0 text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700">Interview Scheduled</p>
                            <p class="text-sm text-gray-500 mt-0.5">You scheduled an interview with <span class="font-medium">Maria Santos</span> for March 12, 2026 at 10:00 AM.</p>
                            <p class="text-xs text-gray-400 mt-1">March 9, 2026</p>
                        </div>
                    </div>

                    {{-- Read: Welcome --}}
                    <div class="flex items-start gap-3 bg-white border border-gray-100 rounded-2xl px-4 py-3.5">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0 text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700">Welcome to PESO Employer Portal!</p>
                            <p class="text-sm text-gray-500 mt-0.5">Your account has been verified. You can now post jobs and manage applicants through the PESO system.</p>
                            <p class="text-xs text-gray-400 mt-1">March 5, 2026</p>
                        </div>
                    </div>

                </div>

                {{-- Mark all read --}}
                <div class="mt-4 flex justify-end">
                    <button class="text-sm text-blue-600 font-semibold hover:underline">Mark all as read</button>
                </div>

            </div>

            {{-- ════ DANGER ZONE ════ --}}
            <div id="tab-danger" class="settings-tab hidden">
                <div class="bg-white rounded-2xl shadow-sm border border-red-100 p-5 md:p-6">
                    <h3 class="text-base font-bold text-red-600 mb-1">Danger Zone</h3>
                    <p class="text-sm text-gray-500 mb-5">Irreversible and destructive actions.</p>

                    <div class="border border-red-200 rounded-xl divide-y divide-red-100">
                        <div class="flex items-start justify-between gap-4 p-4">
                            <div>
                                <p class="text-sm font-bold text-gray-900">Delete Employer Account</p>
                                <p class="text-sm text-gray-500 mt-0.5">Permanently remove your account, job postings, and all associated data. This cannot be undone.</p>
                            </div>
                            <button type="button"
                                    onclick="return confirm('Are you sure? This cannot be undone.')"
                                    class="shrink-0 px-4 py-2 rounded-xl border border-red-400 text-red-600 text-sm font-semibold hover:bg-red-600 hover:text-white transition">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<script>
const tabs = ['edit-profile', 'change-password', 'notifications', 'danger'];
let isMobile = () => window.innerWidth < 768;

function showTab(name) {
    tabs.forEach(function(t) {
        document.getElementById('tab-' + t).classList.add('hidden');

        const btn = document.getElementById('tab-btn-' + t);
        if (!btn) return;
        const isDanger = t === 'danger';

        // reset button
        btn.classList.remove('active-nav', 'bg-blue-50', 'text-blue-700', 'bg-red-50', 'text-red-700', 'hover:bg-gray-100');
        btn.classList.add(isDanger ? 'text-red-600' : 'text-gray-700', 'hover:bg-gray-100');
        if (isDanger) btn.classList.add('hover:bg-red-50');

        const iconSpan = btn.querySelector('span');
        if (iconSpan) {
            iconSpan.classList.remove('bg-blue-200', 'bg-red-200');
            iconSpan.classList.add(isDanger ? 'bg-red-100' : 'bg-gray-100');
        }
    });

    // show active panel
    document.getElementById('tab-' + name).classList.remove('hidden');

    // activate button
    const activeBtn = document.getElementById('tab-btn-' + name);
    if (activeBtn) {
        const isDanger = name === 'danger';
        activeBtn.classList.remove('text-gray-700', 'text-red-600', 'hover:bg-gray-100', isDanger ? 'hover:bg-red-50' : '');
        if (isDanger) {
            activeBtn.classList.add('active-nav', 'bg-red-50', 'text-red-700');
        } else {
            activeBtn.classList.add('active-nav', 'bg-blue-50', 'text-blue-700');
            const iconSpan = activeBtn.querySelector('span');
            if (iconSpan) { iconSpan.classList.remove('bg-gray-100'); iconSpan.classList.add('bg-blue-200'); }
        }
    }

    // mobile: hide sidebar, show content
    if (isMobile()) {
        document.getElementById('settings-sidebar').classList.add('hidden');
        document.getElementById('mobile-back-bar').classList.remove('hidden');
        const label = activeBtn ? activeBtn.getAttribute('data-label') : '';
        const el = document.getElementById('mobile-back-label');
        if (el) el.textContent = label;
    }
}

function mobileBack() {
    document.getElementById('settings-sidebar').classList.remove('hidden');
    document.getElementById('mobile-back-bar').classList.add('hidden');
    tabs.forEach(t => document.getElementById('tab-' + t).classList.add('hidden'));
}

// Init mobile state
if (isMobile()) {
    document.getElementById('mobile-back-bar').classList.add('hidden');
    tabs.forEach(t => document.getElementById('tab-' + t).classList.add('hidden'));
}

// Settings search filter
document.getElementById('settings-search').addEventListener('input', function() {
    const q = this.value.toLowerCase();
    document.querySelectorAll('.fb-nav-btn').forEach(function(btn) {
        const label = (btn.textContent || '').toLowerCase();
        btn.parentElement.style.display = label.includes(q) ? '' : 'none';
    });
});

// Validation error auto-open
@error('company') showTab('edit-profile'); @enderror
@error('email')   showTab('edit-profile'); @enderror
@error('website') showTab('edit-profile'); @enderror
</script>

@endsection