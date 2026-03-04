@extends('layouts.app')

@section('title', 'Contact Us - PESO Manolo Fortich')

@section('content')
        {{-- ========== CONTACT SECTION ========== --}}
        <section class="py-20 bg-white">
            <div class="nav-container">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Get in touch with PESO Manolo Fortich. We're here to help you with employment services and inquiries.</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        {{-- Address --}}
                        <div class="bg-blue-50 rounded-2xl p-8 text-center border border-blue-100">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-5">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Office Address</h3>
                            <p class="text-gray-600 text-sm">Municipal Hall, Manolo Fortich, Bukidnon</p>
                        </div>

                        {{-- Email --}}
                        <div class="bg-blue-50 rounded-2xl p-8 text-center border border-blue-100">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-5">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600 text-sm">peso&#64;manolofortich.gov.ph</p>
                        </div>

                        {{-- Phone --}}
                        <div class="bg-blue-50 rounded-2xl p-8 text-center border border-blue-100">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-5">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600 text-sm">(088) 123-4567</p>
                        </div>
                    </div>

                    {{-- Office Hours --}}
                    <div class="mt-12 bg-gray-50 rounded-2xl p-10 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Office Hours</h3>
                        <div class="max-w-md mx-auto space-y-3 text-sm">
                            <div class="flex justify-between"><span class="text-gray-600">Monday - Friday</span><span class="font-semibold text-gray-900">8:00 AM - 5:00 PM</span></div>
                            <div class="flex justify-between"><span class="text-gray-600">Saturday</span><span class="font-semibold text-gray-900">Closed</span></div>
                            <div class="flex justify-between"><span class="text-gray-600">Sunday</span><span class="font-semibold text-gray-900">Closed</span></div>
                        </div>
                    </div>

                    {{-- Facebook --}}
                    <div class="mt-8 text-center">
                        <a href="https://www.facebook.com/lgupesomanolofortich" target="_blank" class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-600 text-white px-6 py-3 rounded-lg text-sm font-medium transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            Visit our Facebook Page
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
