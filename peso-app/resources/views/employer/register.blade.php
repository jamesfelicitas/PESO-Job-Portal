@extends('layouts.app')

@section('title', 'Employer Registration — PESO Job Portal')

@section('content')

<section class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
<div class="w-full max-w-3xl">

        {{-- Card --}}
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

            {{-- Header --}}
            <div class="bg-linear-to-br from-blue-900 via-blue-800 to-blue-700 px-8 py-10 text-center">
                <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" width="10" height="10"
                    class="w-20 h-20 sm:w-24 sm:h-24 rounded-full object-cover shadow-lg mx-auto mb-4">
                <h1 class="text-2xl font-extrabold text-white">Employer Registration</h1>
                <p class="text-blue-200 text-sm mt-1">Post jobs and find the right talent through PESO Manolo Fortich</p>
            </div>

            {{-- Step Indicator --}}
            <div class="px-8 pt-7 pb-2">
                <div class="flex items-center justify-center gap-0">
                    {{-- Step I --}}
                    <div class="flex flex-col items-center step-indicator" data-step="1">
                        <div class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold border-2 transition-all duration-300 step-circle-1 bg-blue-700 border-blue-700 text-white">I</div>
                        <span class="text-xs mt-1 font-semibold step-label-1 text-blue-700">Establishment</span>
                    </div>
                    <div class="h-0.5 w-16 sm:w-24 step-bar-1 bg-blue-700 transition-all duration-300 mb-4"></div>
                    {{-- Step II --}}
                    <div class="flex flex-col items-center step-indicator" data-step="2">
                        <div class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold border-2 transition-all duration-300 step-circle-2 bg-gray-100 border-gray-300 text-gray-400">II</div>
                        <span class="text-xs mt-1 font-semibold step-label-2 text-gray-400">Contact</span>
                    </div>
                    <div class="h-0.5 w-16 sm:w-24 step-bar-2 bg-gray-200 transition-all duration-300 mb-4"></div>
                    {{-- Step III --}}
                    <div class="flex flex-col items-center step-indicator" data-step="3">
                        <div class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold border-2 transition-all duration-300 step-circle-3 bg-gray-100 border-gray-300 text-gray-400">III</div>
                        <span class="text-xs mt-1 font-semibold step-label-3 text-gray-400">Account</span>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <form novalidate class="px-8 py-8 space-y-6" action="{{ route('employer.register.post') }}" method="POST">
                @csrf

                @if (session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- STEP 1: Establishment Details --}}
                <div id="step-1" class="step-panel space-y-6">
                <div>
                    <h2 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-blue-700 text-white text-xs flex items-center justify-center font-bold shrink-0">I</span>
                        Establishment Details
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="sm:col-span-2">
                            <label for="business_name" class="block text-sm font-semibold text-gray-700 mb-1">Business Name <span class="text-red-500">*</span></label>
                            <input type="text" id="business_name" name="business_name" placeholder="Registered business name" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="trade_name" class="block text-sm font-semibold text-gray-700 mb-1">Trade Name <span class="text-gray-400 font-normal">optional</span></label>
                            <input type="text" id="trade_name" name="trade_name" placeholder="Trade or brand name"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="acronym" class="block text-sm font-semibold text-gray-700 mb-1">Acronym / Abbreviation <span class="text-gray-400 font-normal">optional</span></label>
                            <input type="text" id="acronym" name="acronym" placeholder="e.g. DMPI"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-2">Office Type</p>
                            <div class="flex gap-5 pt-1">
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                                    <input type="radio" name="office_type" value="Main Office" checked class="text-blue-600 focus:ring-blue-500">
                                    Main Office
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                                    <input type="radio" name="office_type" value="Branch" class="text-blue-600 focus:ring-blue-500">
                                    Branch
                                </label>
                            </div>
                        </div>

                        <div>
                            <label for="tin" class="block text-sm font-semibold text-gray-700 mb-1">Tax Identification Number (TIN) <span class="text-red-500">*</span></label>
                            <input type="text" id="tin" name="tin" placeholder="000-000-000-000" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        {{-- Employer Type --}}
                        <div class="sm:col-span-2">
                            <p class="text-sm font-semibold text-gray-700 mb-3">Employer Type <span class="text-red-500">*</span></p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3" data-radio-group="employer_type">
                                <div class="border border-gray-200 rounded-xl p-4">
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Public</p>
                                    <div class="space-y-2">
                                        @foreach (['National Government Agency', 'Local Government Unit', 'Government-owned and Controlled Corporation', 'State/Local University or College'] as $etype)
                                        <label class="flex items-start gap-2 text-sm text-gray-600 cursor-pointer">
                                            <input type="radio" name="employer_type" value="{{ $etype }}" class="mt-0.5 text-blue-600 focus:ring-blue-500 shrink-0">
                                            <span>{{ $etype }}</span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="border border-gray-200 rounded-xl p-4">
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Private</p>
                                    <div class="space-y-2">
                                        @foreach (['Direct Hire', 'Local Recruitment Agency', 'Overseas Recruitment Agency', 'D.O. 174'] as $etype)
                                        <label class="flex items-start gap-2 text-sm text-gray-600 cursor-pointer">
                                            <input type="radio" name="employer_type" value="{{ $etype }}" class="mt-0.5 text-blue-600 focus:ring-blue-500 shrink-0">
                                            <span>{{ $etype }}</span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Total Work Force --}}
                        <div class="sm:col-span-2">
                            <p class="text-sm font-semibold text-gray-700 mb-3">Total Work Force <span class="text-red-500">*</span></p>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3" data-radio-group="workforce_size">
                                @foreach ([['Micro', '1–9'], ['Small', '10–99'], ['Medium', '100–199'], ['Large', '200 and up']] as [$wlabel, $wrange])
                                <label class="flex flex-col items-center justify-center gap-1 border border-gray-200 rounded-xl px-3 py-3 cursor-pointer hover:border-blue-400 transition has-checked:border-blue-600 has-:checked:bg-blue-50 text-center">
                                    <input type="radio" name="workforce_size" value="{{ $wlabel }}" class="sr-only">
                                    <span class="text-sm font-bold text-gray-700">{{ $wlabel }}</span>
                                    <span class="text-xs text-gray-400">{{ $wrange }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="line_of_business" class="block text-sm font-semibold text-gray-700 mb-1">Line of Business / Industry <span class="text-red-500">*</span></label>
                            <input type="text" id="line_of_business" name="line_of_business" placeholder="e.g. Food Processing, BPO, Construction (see BIR Form 2303)" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div class="sm:col-span-2">
                            <label for="street" class="block text-sm font-semibold text-gray-700 mb-1">Street / Village <span class="text-red-500">*</span></label>
                            <input type="text" id="street" name="street" placeholder="House no., street name, subdivision/village" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="barangay" class="block text-sm font-semibold text-gray-700 mb-1">Barangay <span class="text-red-500">*</span></label>
                            <input type="text" id="barangay" name="barangay" placeholder="Barangay" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="municipal_city" class="block text-sm font-semibold text-gray-700 mb-1">Municipal / City <span class="text-red-500">*</span></label>
                            <input type="text" id="municipal_city" name="municipal_city" placeholder="Municipality or city" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="province" class="block text-sm font-semibold text-gray-700 mb-1">Province <span class="text-red-500">*</span></label>
                            <input type="text" id="province" name="province" placeholder="Province" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                    </div>
                </div>

                {{-- Step 1 Next Button --}}
                <div class="flex justify-end pt-2">
                    <button type="button" onclick="goToStep(2)"
                        class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-7 rounded-xl transition text-sm shadow-md shadow-blue-700/20">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                </div>{{-- /step-1 --}}

                {{-- STEP 2: Establishment Contact Details --}}
                <div id="step-2" class="step-panel hidden space-y-6">
                <div>
                    <h2 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-blue-700 text-white text-xs flex items-center justify-center font-bold shrink-0">II</span>
                        Establishment Contact Details
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="sm:col-span-2">
                            <label for="owner_name" class="block text-sm font-semibold text-gray-700 mb-1">Name of Owner / President <span class="text-red-500">*</span></label>
                            <input type="text" id="owner_name" name="owner_name" placeholder="Full name of owner or president" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="contact_person" class="block text-sm font-semibold text-gray-700 mb-1">Contact Person <span class="text-red-500">*</span></label>
                            <input type="text" id="contact_person" name="contact_person" placeholder="Full name" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-semibold text-gray-700 mb-1">Position <span class="text-red-500">*</span></label>
                            <input type="text" id="position" name="position" placeholder="e.g. HR Manager" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-1">Telephone Number <span class="text-gray-400 font-normal">optional</span></label>
                            <input type="tel" id="telephone" name="telephone" placeholder="(088) 000-0000"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="mobile" class="block text-sm font-semibold text-gray-700 mb-1">Mobile Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="mobile" name="mobile" placeholder="09XXXXXXXXX" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="fax" class="block text-sm font-semibold text-gray-700 mb-1">Fax Number <span class="text-gray-400 font-normal">optional</span></label>
                            <input type="tel" id="fax" name="fax" placeholder="(088) 000-0000"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">E-mail Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" placeholder="company@email.com" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                        </div>

                    </div>
                </div>

                {{-- Step 2 Back/Next Buttons --}}
                <div class="flex justify-between pt-2">
                    <button type="button" onclick="goToStep(1)"
                        class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3 px-7 rounded-xl transition text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back
                    </button>
                    <button type="button" onclick="goToStep(3)"
                        class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-7 rounded-xl transition text-sm shadow-md shadow-blue-700/20">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                </div>{{-- /step-2 --}}

                {{-- STEP 3: Account Credentials --}}
                <div id="step-3" class="step-panel hidden space-y-6">
                <div>
                    <h2 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1 flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-blue-700 text-white text-xs flex items-center justify-center font-bold shrink-0">III</span>
                        Account Credentials
                    </h2>
                    <p class="text-xs text-gray-400 mb-4 ml-7">Your e-mail address above will be used to log in.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Min. 8 characters" required
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
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter password" required
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

                {{-- Terms checkbox --}}
                <div class="flex items-start gap-3">
                    <input type="checkbox" id="terms" name="terms" required
                        class="mt-0.5 w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer shrink-0">
                    <label for="terms" class="text-sm text-gray-600 cursor-pointer leading-relaxed">
                        I agree to the
                        <button type="button" onclick="openInfoModal('privacy')"
                            class="text-blue-600 hover:underline font-semibold focus:outline-none">Privacy Policy</button>
                        and
                        <button type="button" onclick="openInfoModal('terms')"
                            class="text-blue-600 hover:underline font-semibold focus:outline-none">Terms of Service</button>.
                    </label>
                </div>

                {{-- Step 3 Back/Submit Buttons --}}
                <div class="flex justify-between pt-2">
                    <button type="button" onclick="goToStep(2)"
                        class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3 px-7 rounded-xl transition text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back
                    </button>
                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold py-3 px-7 rounded-xl transition text-sm shadow-md shadow-orange-500/30">
                        Create Employer Account
                    </button>
                </div>

                </div>{{-- /step-3 --}}

                {{-- Login redirect --}}
                <p class="text-center text-sm text-gray-500">
                    Already have an account?
                    <a href="{{ route('employer.login') }}" class="text-blue-600 hover:underline font-semibold">Login here</a>
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

{{-- Info Modal (Privacy Policy / Terms of Service) --}}
<div id="info-modal" class="hidden fixed inset-0 z-50 p-4 items-center justify-center" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeInfoModal()"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg mx-auto flex flex-col" style="max-height: min(85vh, 600px)">

        {{-- Header --}}
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <div class="flex border border-gray-200 rounded-lg overflow-hidden text-sm font-semibold">
                <button type="button" id="tab-btn-privacy" onclick="switchInfoTab('privacy')"
                    class="px-4 py-2 bg-blue-700 text-white transition">Privacy Policy</button>
                <button type="button" id="tab-btn-terms" onclick="switchInfoTab('terms')"
                    class="px-4 py-2 text-gray-500 hover:bg-gray-50 transition">Terms of Service</button>
            </div>
            <button type="button" onclick="closeInfoModal()" class="text-gray-400 hover:text-gray-600 transition p-1 rounded-lg hover:bg-gray-100 ml-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Privacy Policy Panel --}}
        <div id="panel-info-privacy" class="overflow-y-auto px-6 py-5 space-y-4 text-sm text-gray-600 leading-relaxed">
            <p>Last updated: <span class="font-semibold text-gray-800">March 9, 2026</span></p>
            <p>PESO Manolo Fortich is committed to protecting your privacy in compliance with the <span class="font-semibold text-gray-800">Data Privacy Act of 2012 (RA 10173)</span>.</p>
            <div><h4 class="font-bold text-gray-800 mb-1">1. Information We Collect</h4><p>We collect personal information you provide during registration: company name, contact person details, email address, phone number, and business address.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">2. How We Use Your Information</h4><ul class="list-disc list-inside space-y-1"><li>To create and manage your employer account.</li><li>To facilitate job postings and applicant matching.</li><li>To communicate updates and service information.</li><li>To comply with legal obligations.</li></ul></div>
            <div><h4 class="font-bold text-gray-800 mb-1">3. Data Sharing</h4><p>We do not sell or rent your data. It may be shared with DOLE regional offices for employment facilitation purposes.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">4. Data Security</h4><p>We implement technical and organizational measures to protect your data against unauthorized access or disclosure.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">5. Your Rights</h4><p>Under RA 10173, you may access, correct, or request deletion of your personal data by contacting PESO Manolo Fortich directly.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">6. Cookies</h4><p>This portal uses session cookies strictly necessary for authentication. No tracking or advertising cookies are used.</p></div>
        </div>

        {{-- Terms of Service Panel --}}
        <div id="panel-info-terms" class="hidden overflow-y-auto px-6 py-5 space-y-4 text-sm text-gray-600 leading-relaxed">
            <p>Last updated: <span class="font-semibold text-gray-800">March 9, 2026</span></p>
            <p>By registering as an employer on the <span class="font-semibold text-gray-800">PESO Job Portal System</span>, you agree to these terms.</p>
            <div><h4 class="font-bold text-gray-800 mb-1">1. Eligibility</h4><p>You must be a duly registered business, organization, or government agency in the Philippines. All information provided must be accurate and truthful.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">2. Account Responsibilities</h4><p>You are responsible for maintaining the confidentiality of your account credentials and any activity conducted through your account.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">3. Job Posting Guidelines</h4><p>All postings must comply with Philippine labor laws and DOLE regulations. Discriminatory language based on age, sex, religion, or disability is prohibited.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">4. Prohibited Activities</h4><ul class="list-disc list-inside space-y-1"><li>Posting fraudulent or misleading job offers.</li><li>Collecting fees from jobseekers (prohibited under RA 8759).</li><li>Using the platform for non-employment activities.</li></ul></div>
            <div><h4 class="font-bold text-gray-800 mb-1">5. Account Suspension</h4><p>PESO reserves the right to suspend accounts found violating these terms or engaging in activity harmful to jobseekers.</p></div>
            <div><h4 class="font-bold text-gray-800 mb-1">6. Modifications</h4><p>PESO may update these terms at any time. Continued use constitutes acceptance of the revised terms.</p></div>
        </div>

        {{-- Footer --}}
        <div class="px-6 py-4 border-t border-gray-100 flex justify-end">
            <button type="button" onclick="closeInfoModal()"
                class="px-5 py-2.5 rounded-xl bg-blue-700 hover:bg-blue-800 text-sm font-semibold text-white transition">
                Close
            </button>
        </div>
    </div>
</div>


<script>
    // ── Multi-step wizard ──────────────────────────────────────────────────
    const TOTAL_STEPS = 3;
    let currentStep = 1;

    function goToStep(n) {
        if (n < 1 || n > TOTAL_STEPS) return;
        if (n > currentStep && !validateStep(currentStep)) return;

        document.getElementById('step-' + currentStep).classList.add('hidden');
        currentStep = n;
        document.getElementById('step-' + currentStep).classList.remove('hidden');
        updateStepIndicator();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Required fields per step
    const STEP_RULES = {
        1: {
            text:  ['business_name', 'tin', 'line_of_business', 'street', 'barangay', 'municipal_city', 'province'],
            radio: ['employer_type', 'workforce_size'],
        },
        2: {
            text:  ['owner_name', 'contact_person', 'position', 'mobile', 'email'],
            radio: [],
        },
        3: {
            text:     ['password', 'password_confirmation'],
            checkbox: ['terms'],
        },
    };

    function validateStep(step) {
        const panel  = document.getElementById('step-' + step);
        const rules  = STEP_RULES[step] || {};
        let valid = true;
        let firstInvalid = null;

        // Text / email / tel / password fields
        (rules.text || []).forEach(function(name) {
            const el = panel.querySelector('[name="' + name + '"]');
            if (!el) return;
            el.classList.remove('border-red-400');
            if (!el.value.trim()) {
                el.classList.add('border-red-400');
                valid = false;
                if (!firstInvalid) firstInvalid = el;
            }
        });

        // Radio groups
        (rules.radio || []).forEach(function(name) {
            const wrapper = panel.querySelector('[data-radio-group="' + name + '"]');
            if (wrapper) wrapper.classList.remove('ring-2', 'ring-red-500/40');
            const checked = panel.querySelectorAll('[name="' + name + '"]:checked');
            if (!checked.length) {
                valid = false;
                if (wrapper) wrapper.classList.add('ring-2', 'ring-red-500/40', 'rounded-2xl');
                if (!firstInvalid) firstInvalid = wrapper || panel.querySelector('[name="' + name + '"]');
            }
        });

        // Checkboxes
        (rules.checkbox || []).forEach(function(name) {
            const el = panel.querySelector('[name="' + name + '"]');
            if (!el) return;
            if (!el.checked) {
                valid = false;
                if (!firstInvalid) firstInvalid = el;
            }
        });

        if (!valid && firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return valid;
    }

    function updateStepIndicator() {
        for (let i = 1; i <= TOTAL_STEPS; i++) {
            const circle = document.querySelector('.step-circle-' + i);
            const label  = document.querySelector('.step-label-' + i);
            if (i < currentStep) {
                // completed
                circle.className = circle.className.replace(/bg-\S+|border-\S+|text-\S+/g, '').trim();
                circle.classList.add('bg-green-600', 'border-green-600', 'text-white');
                label.classList.remove('text-gray-400', 'text-blue-700');
                label.classList.add('text-green-600');
            } else if (i === currentStep) {
                // active
                circle.className = circle.className.replace(/bg-\S+|border-\S+|text-\S+/g, '').trim();
                circle.classList.add('bg-blue-700', 'border-blue-700', 'text-white');
                label.classList.remove('text-gray-400', 'text-green-600');
                label.classList.add('text-blue-700');
            } else {
                // upcoming
                circle.className = circle.className.replace(/bg-\S+|border-\S+|text-\S+/g, '').trim();
                circle.classList.add('bg-gray-100', 'border-gray-300', 'text-gray-400');
                label.classList.remove('text-blue-700', 'text-green-600');
                label.classList.add('text-gray-400');
            }
        }
        // connector bars
        for (let i = 1; i < TOTAL_STEPS; i++) {
            const bar = document.querySelector('.step-bar-' + i);
            if (i < currentStep) {
                bar.classList.remove('bg-gray-200');
                bar.classList.add('bg-green-500');
            } else if (i === currentStep) {
                bar.classList.remove('bg-gray-200');
                bar.classList.add('bg-blue-700');
            } else {
                bar.classList.remove('bg-blue-700', 'bg-green-500');
                bar.classList.add('bg-gray-200');
            }
        }
    }

    // Clear red borders on input
    document.querySelectorAll('input, select, textarea').forEach(function(el) {
        el.addEventListener('input', function() {
            el.classList.remove('border-red-400');
        });
    });
    // Clear radio group rings on selection
    document.querySelectorAll('input[type="radio"]').forEach(function(el) {
        el.addEventListener('change', function() {
            const wrapper = el.closest('[data-radio-group]');
            if (wrapper) wrapper.classList.remove('ring-2', 'ring-red-500/40');
        });
    });

    // ── Modal helpers ──────────────────────────────────────────────────────
    function openInfoModal(tab) {
        const modal = document.getElementById('info-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        switchInfoTab(tab);
    }
    function closeInfoModal() {
        const modal = document.getElementById('info-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }
    function switchInfoTab(tab) {
        const isPrivacy = tab === 'privacy';
        document.getElementById('panel-info-privacy').classList.toggle('hidden', !isPrivacy);
        document.getElementById('panel-info-terms').classList.toggle('hidden', isPrivacy);
        document.getElementById('tab-btn-privacy').className = isPrivacy
            ? 'px-4 py-2 bg-blue-700 text-white transition'
            : 'px-4 py-2 text-gray-500 hover:bg-gray-50 transition';
        document.getElementById('tab-btn-terms').className = !isPrivacy
            ? 'px-4 py-2 bg-blue-700 text-white transition'
            : 'px-4 py-2 text-gray-500 hover:bg-gray-50 transition';
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeInfoModal();
    });

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
