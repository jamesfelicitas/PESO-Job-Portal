@extends('layouts.app')

@section('title', 'Our Vision - PESO Manolo Fortich')

@section('content')
        {{-- ========== VISION SECTION ========== --}}
        <section id="vision" class="py-20 bg-white relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <img src="{{ asset('images/PESOO.png') }}" alt="" class="w-[500px] h-[500px] object-contain opacity-5">
            </div>
            <div class="nav-container relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Vision</h2>
                        <div class="w-24 h-1 bg-red-600 mx-auto mb-6"></div>
                    </div>
                    <div class="bg-red-50 rounded-2xl p-10 border border-red-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-red-600 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-800">Vision</h3>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            To become the lead municipality in the Philippines by creating a robust local economy that provides decent jobs, promotes entrepreneurship, and enhances the quality of life of the residents of Manolo Fortich.
                        </p>
                    </div>
                </div>
            </div>
        </section>
@endsection
