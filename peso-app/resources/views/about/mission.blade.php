@extends('layouts.app')

@section('title', 'Our Mission - PESO Manolo Fortich')

@section('content')
        {{-- ========== MISSION SECTION ========== --}}
        <section id="mission" class="py-20 bg-gray-50">
            <div class="nav-container">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Mission</h2>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                    </div>
                    <div class="bg-blue-50 rounded-2xl p-10 border border-blue-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-800">Mission</h3>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            To promote economic growth and sustainable development in Manolo Fortich through the implementation of the PESO program, providing employment opportunities and skills development for the community.
                        </p>
                    </div>
                </div>
            </div>
        </section>
@endsection
