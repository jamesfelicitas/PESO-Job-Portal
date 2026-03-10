@extends('layouts.app')

@section('title', 'Our Objective - PESO Manolo Fortich')

@section('content')
        {{-- ========== MISSION SECTION ========== --}}
        <section id="objective" class="py-20 bg-gray-50 relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <img src="{{ asset('images/PESOO.png') }}" alt="" class="w-125 h-125 object-contain opacity-5">
            </div>
            <div class="nav-container relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Objective</h2>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                    </div>
                    <div class="bg-blue-50 rounded-2xl p-10 border border-blue-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-800">Objective</h3>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            To create job opportunities for the residents of Manolo Fortich, reducing unemployment rates and promoting economic growth in the municipality.

                            To provide training and skills development programs for job seekers, enhancing their employability and productivity in the workplace.

                            To promote entrepreneurship by providing access to resources, financial assistance, and business development services to aspiring entrepreneurs.

                            To attract investments in the municipality by showcasing its potential for growth, resources, and business opportunities.

                            To strengthen partnerships with local stakeholders, government agencies, and private sectors in the implementation of the PESO program, fostering collaboration and innovation in promoting economic development.

                        </p>    
                    </div>
                </div>
            </div>
        </section>
@endsection
