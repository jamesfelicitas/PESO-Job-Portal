@extends('layouts.app')

@section('title', 'Contact Us - PESO Manolo Fortich')

@section('content')
       

        {{-- ========== INQUIRY FORM ========== --}}
        <section class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Send Us an Inquiry</h2>
                        <div class="w-24 h-1 bg-red-600 mx-auto mb-6"></div>
                        <p class="text-gray-600 text-lg">Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>

                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/contact') }}" method="POST" class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 md:p-10 space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            {{-- Full Name --}}
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                    placeholder="Juan Dela Cruz">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                    placeholder="juan&#64;example.com">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Subject --}}
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject <span class="text-red-500">*</span></label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition text-gray-700">
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select a subject</option>
                                <option value="Job Inquiry" {{ old('subject') == 'Job Inquiry' ? 'selected' : '' }}>Job Inquiry</option>
                                <option value="PESO Clearance" {{ old('subject') == 'PESO Clearance' ? 'selected' : '' }}>PESO Clearance</option>
                                <option value="Employer Registration" {{ old('subject') == 'Employer Registration' ? 'selected' : '' }}>Employer Registration</option>
                                <option value="Job Fair Information" {{ old('subject') == 'Job Fair Information' ? 'selected' : '' }}>Job Fair Information</option>
                                <option value="Technical Support" {{ old('subject') == 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition resize-none"
                                placeholder="Write your inquiry here...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full md:w-auto px-8 py-3 bg-blue-700 hover:bg-blue-600 text-white font-semibold rounded-xl text-sm transition flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
@endsection
