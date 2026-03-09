@extends('layouts.app')

@section('title', 'Employer Registration — PESO Job Portal')

@section('content')

<section class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
    <div class="w-full max-w-2xl">

        {{-- Card --}}
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

            {{-- Header --}}
            <div class="bg-linear-to-br from-blue-900 via-blue-800 to-blue-700 px-8 py-10 text-center">
                <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo"
                    class="w-20 h-20 rounded-full object-cover shadow-lg mx-auto mb-4 ring-4 ring-white/30">
                <h1 class="text-2xl font-extrabold text-white">Employer Registration</h1>
                <p class="text-blue-200 text-sm mt-1">Post jobs and find the right talent through PESO Manolo Fortich</p>
            </div>

            {{-- Form --}}
            <form class="px-8 py-10 space-y-6" action="#" method="POST">
                @csrf

                {{-- Company Information --}}
                <div>
                    <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Company Information</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="sm:col-span-2">
                            <label for="company_name" class="block text-sm font-semibold text-gray-700 mb-1">Company Name <span class="text-red-500">*</span></label>
                            <input type="text" id="company_name" name="company_name" placeholder="e.g. Del Monte Philippines"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="industry" class="block text-sm font-semibold text-gray-700 mb-1">Industry <span class="text-red-500">*</span></label>
                            <select id="industry" name="industry"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition appearance-none cursor-pointer">
                                <option value="" disabled selected>Select industry</option>
                                <option>Agriculture</option>
                                <option>Construction</option>
                                <option>Education</option>
                                <option>Government / LGU</option>
                                <option>Healthcare</option>
                                <option>Hospitality & Tourism</option>
                                <option>IT & Technology</option>
                                <option>Manufacturing</option>
                                <option>Retail & Sales</option>
                                <option>Transportation & Logistics</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="company_size" class="block text-sm font-semibold text-gray-700 mb-1">Company Size</label>
                            <select id="company_size" name="company_size"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition appearance-none cursor-pointer">
                                <option value="" disabled selected>Select size</option>
                                <option>1–10 employees</option>
                                <option>11–50 employees</option>
                                <option>51–200 employees</option>
                                <option>201–500 employees</option>
                                <option>500+ employees</option>
                            </select>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="address" class="block text-sm font-semibold text-gray-700 mb-1">Business Address <span class="text-red-500">*</span></label>
                            <input type="text" id="address" name="address" placeholder="e.g. Manolo Fortich, Bukidnon"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                    </div>
                </div>

                <hr class="border-gray-100">

                {{-- Contact Person --}}
                <div>
                    <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Contact Person</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-1">First Name <span class="text-red-500">*</span></label>
                            <input type="text" id="first_name" name="first_name" placeholder="Juan"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" id="last_name" name="last_name" placeholder="Dela Cruz"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-semibold text-gray-700 mb-1">Position / Title</label>
                            <input type="text" id="position" name="position" placeholder="e.g. HR Manager"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" placeholder="09XXXXXXXXX"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                    </div>
                </div>

                <hr class="border-gray-100">

                {{-- Account Credentials --}}
                <div>
                    <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Account Credentials</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" placeholder="you@company.com"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Min. 8 characters"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400 pr-12">
                                <button type="button" onclick="togglePassword('password', this)"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1">Confirm Password <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter password"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400 pr-12">
                                <button type="button" onclick="togglePassword('password_confirmation', this)"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <hr class="border-gray-100">

                {{-- Terms --}}
                <div class="flex items-start gap-3">
                    <input type="checkbox" id="terms" name="terms"
                        class="mt-1 w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer flex-shrink-0">
                    <label for="terms" class="text-sm text-gray-600 cursor-pointer leading-relaxed">
                        I agree to the <a href="#" class="text-blue-600 hover:underline font-semibold">Terms of Service</a>
                        and <a href="#" class="text-blue-600 hover:underline font-semibold">Privacy Policy</a> of PESO Job Portal System.
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold py-3.5 rounded-xl transition text-base shadow-md shadow-orange-500/30">
                    Create Employer Account
                </button>

                {{-- Login redirect --}}
                <p class="text-center text-sm text-gray-500">
                    Already have an account?
                    <a href="#" class="text-blue-600 hover:underline font-semibold">Login here</a>
                </p>

            </form>
        </div>

        {{-- Back to home --}}
        <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-blue-700 transition font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Home
            </a>
        </div>

    </div>
</section>

<script>
    function togglePassword(fieldId, btn) {
        const input = document.getElementById(fieldId);
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        // Swap icon to eye-off when visible
        btn.innerHTML = isPassword
            ? `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
               </svg>`
            : `<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
               </svg>`;
    }
</script>

@endsection
