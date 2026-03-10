@extends('layouts.employer')

@section('title', 'Settings')

@section('content')

{{-- Page header --}}
<div class="mb-5 md:mb-7">
    <h1 class="text-xl md:text-2xl font-extrabold text-gray-900 leading-tight">Settings</h1>
    <p class="text-xs md:text-sm text-gray-500 mt-0.5">Manage your employer account and preferences.</p>
</div>

@if(session('success'))
    <div class="mb-5 flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl px-4 py-3 text-sm font-medium">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('success') }}
    </div>
@endif

<div class="flex flex-col lg:flex-row gap-5 xl:gap-6 max-w-6xl">

    {{-- ══════════════════════════════════════════
         LEFT: Settings nav
         — mobile/tablet : horizontal scroll tabs
         — lg+           : vertical sidebar
    ════════════════════════════════════════════ --}}
    <aside class="w-full lg:w-56 xl:w-64 shrink-0">

        {{-- Mobile / tablet: horizontal scrollable tab strip --}}
        <div class="lg:hidden overflow-x-auto -mx-1 px-1 pb-1">
            <div class="flex gap-2 w-max">
                <button onclick="showTab('edit-profile')" id="mob-btn-edit-profile"
                    class="mob-tab-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold whitespace-nowrap transition bg-blue-600 text-white shadow-sm">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Edit Profile
                </button>
                <button onclick="showTab('change-password')" id="mob-btn-change-password"
                    class="mob-tab-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold whitespace-nowrap transition bg-white text-gray-600 border border-gray-200 hover:bg-gray-50">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Password
                </button>
                <button onclick="showTab('notifications')" id="mob-btn-notifications"
                    class="mob-tab-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold whitespace-nowrap transition bg-white text-gray-600 border border-gray-200 hover:bg-gray-50">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    Notifications
                </button>
                <button onclick="showTab('danger')" id="mob-btn-danger"
                    class="mob-tab-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold whitespace-nowrap transition bg-white text-red-500 border border-red-200 hover:bg-red-50">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Danger
                </button>
            </div>
        </div>

        {{-- Desktop: vertical sticky sidebar nav --}}
        <nav class="hidden lg:block bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden sticky top-24">

            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest px-4 pt-4 pb-2">Account</p>

            <button onclick="showTab('edit-profile')" id="tab-btn-edit-profile"
                class="desk-tab-btn w-full flex items-center gap-3 px-4 py-3 text-sm font-semibold text-left transition border-l-4 border-blue-600 bg-blue-50 text-blue-700">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Edit Profile
            </button>

            <button onclick="showTab('change-password')" id="tab-btn-change-password"
                class="desk-tab-btn w-full flex items-center gap-3 px-4 py-3 text-sm font-semibold text-left transition border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                Change Password
            </button>

            <button onclick="showTab('notifications')" id="tab-btn-notifications"
                class="desk-tab-btn w-full flex items-center gap-3 px-4 py-3 text-sm font-semibold text-left transition border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                Notifications
            </button>

            <div class="border-t border-gray-100 mt-1">
                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest px-4 pt-3 pb-2">Danger Zone</p>
                <button onclick="showTab('danger')" id="tab-btn-danger"
                    class="desk-tab-btn w-full flex items-center gap-3 px-4 py-3 mb-2 text-sm font-semibold text-left transition border-l-4 border-transparent text-red-500 hover:bg-red-50">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete Account
                </button>
            </div>

        </nav>
    </aside>

    {{-- ══════════════════════════════════════════
         RIGHT: Tab Panels
    ════════════════════════════════════════════ --}}
    <div class="flex-1 min-w-0">

        {{-- ════ EDIT PROFILE ════ --}}
        <div id="tab-edit-profile" class="settings-tab">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-7">

                <h2 class="text-base font-bold text-gray-800 mb-5 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Profile
                </h2>

                {{-- Profile Preview strip --}}
                <div class="flex items-center gap-4 mb-6 p-4 bg-gray-50 rounded-xl border border-gray-100">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-gray-900 text-sm md:text-base truncate">{{ session('employer.company', 'Your Company') }}</p>
                        <p class="text-xs md:text-sm text-gray-500 truncate">{{ session('employer.email', '') }}</p>
                        @if(session('employer.industry'))
                            <span class="inline-block mt-1 bg-blue-50 text-blue-700 text-xs font-semibold px-2 py-0.5 rounded-full">{{ session('employer.industry') }}</span>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('employer.settings.update') }}" novalidate>
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5">

                        <div class="sm:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Company / Business Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="company"
                                   value="{{ old('company', session('employer.company', '')) }}"
                                   class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('company') bg-red-50 @enderror"
                                   placeholder="e.g. Del Monte Philippines, Inc.">
                            @error('company') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                        </div>

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

                        <div class="sm:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Business Address</label>
                            <input type="text" name="address"
                                   value="{{ old('address', session('employer.address', '')) }}"
                                   class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   placeholder="e.g. Brgy. Kalasungay, Manolo Fortich, Bukidnon">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">About the Company</label>
                            <textarea name="about" rows="4"
                                      class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                      placeholder="Brief description of your company...">{{ old('about', session('employer.about', '')) }}</textarea>
                        </div>

                    </div>

                    <div class="mt-6 pt-5 border-t border-gray-100 flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-3">
                        <a href="{{ route('employer.dashboard') }}"
                           class="text-center px-5 py-2.5 rounded-xl border border-gray-300 text-sm font-semibold text-gray-600 hover:bg-gray-50 transition">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-6 py-2.5 rounded-xl bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold transition shadow-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ════ CHANGE PASSWORD ════ --}}
        <div id="tab-change-password" class="settings-tab hidden">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-7">
                <h2 class="text-base font-bold text-gray-800 mb-5 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Change Password
                </h2>
                <div class="flex items-start gap-3 bg-yellow-50 border border-yellow-200 rounded-xl px-4 py-3 mb-6 text-sm text-yellow-700">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Password management will be available once backend authentication is set up.
                </div>
                <div class="space-y-4 opacity-50 pointer-events-none max-w-md">
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
                    <div class="flex justify-end pt-2">
                        <button disabled class="px-6 py-2.5 rounded-xl bg-blue-700 text-white text-sm font-semibold">Update Password</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ════ NOTIFICATIONS ════ --}}
        <div id="tab-notifications" class="settings-tab hidden">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-7">
                <h2 class="text-base font-bold text-gray-800 mb-5 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    Notifications
                </h2>
                <div class="flex items-start gap-3 bg-yellow-50 border border-yellow-200 rounded-xl px-4 py-3 text-sm text-yellow-700">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Notification preferences will be available in a future update.
                </div>
            </div>
        </div>

        {{-- ════ DANGER ZONE ════ --}}
        <div id="tab-danger" class="settings-tab hidden">
            <div class="bg-white rounded-2xl shadow-sm border border-red-100 p-5 md:p-7">
                <h2 class="text-base font-bold text-red-600 mb-5 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    Danger Zone
                </h2>
                <div class="border border-red-200 rounded-xl p-5 max-w-lg">
                    <h3 class="font-bold text-gray-900 text-sm mb-1">Delete Employer Account</h3>
                    <p class="text-sm text-gray-500 mb-4 leading-relaxed">
                        Once you delete your account, all your job postings and data will be permanently removed. This action cannot be undone.
                    </p>
                    <button type="button"
                            onclick="return confirm('Are you sure? This cannot be undone.')"
                            class="px-5 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white text-sm font-semibold transition">
                        Delete My Account
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
const tabs = ['edit-profile', 'change-password', 'notifications', 'danger'];

function showTab(name) {
    // hide all panels
    tabs.forEach(function(t) {
        document.getElementById('tab-' + t).classList.add('hidden');

        // desktop sidebar button reset
        const dBtn = document.getElementById('tab-btn-' + t);
        if (dBtn) {
            dBtn.classList.remove('border-blue-600', 'bg-blue-50', 'text-blue-700');
            dBtn.classList.add('border-transparent');
            dBtn.classList.add(t === 'danger' ? 'text-red-500' : 'text-gray-600');
        }

        // mobile button reset
        const mBtn = document.getElementById('mob-btn-' + t);
        if (mBtn) {
            mBtn.classList.remove('bg-blue-600', 'text-white', 'shadow-sm');
            mBtn.classList.add('bg-white', 'border', 'border-gray-200');
            mBtn.classList.add(t === 'danger' ? 'text-red-500' : 'text-gray-600');
        }
    });

    // show active panel
    document.getElementById('tab-' + name).classList.remove('hidden');

    // desktop active
    const dActive = document.getElementById('tab-btn-' + name);
    if (dActive) {
        dActive.classList.remove('border-transparent', 'text-gray-600', 'text-red-500');
        dActive.classList.add('border-blue-600', 'bg-blue-50', 'text-blue-700');
    }

    // mobile active
    const mActive = document.getElementById('mob-btn-' + name);
    if (mActive) {
        mActive.classList.remove('bg-white', 'border', 'border-gray-200', 'text-gray-600', 'text-red-500');
        mActive.classList.add('bg-blue-600', 'text-white', 'shadow-sm');
    }
}

// Re-open edit-profile if there are validation errors
@error('company') showTab('edit-profile'); @enderror
@error('email')   showTab('edit-profile'); @enderror
@error('website') showTab('edit-profile'); @enderror
</script>

@endsection