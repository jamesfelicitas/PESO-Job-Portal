@extends('layouts.app')

@section('title', 'History of Excellence - PESO Manolo Fortich')

@section('content')
        {{-- ========== HISTORY SECTION ========== --}}
        <section id="history" class="py-20 bg-white relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <img src="{{ asset('images/PESOO.png') }}" alt="" class="w-125 h-125 object-contain opacity-5">
            </div>
            <div class="nav-container relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">The History of Excellence</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                        The journey of PESO Manolo Fortich — dedicated to bridging the gap between jobseekers and employers in our community since 2005.
                    </p>
                </div>

                <div class="relative max-w-4xl mx-auto">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-blue-200"></div>

                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12 text-right">
                            <h3 class="text-2xl font-bold text-blue-700">April 13, 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">The Beginning</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                The Public Employment Service Office (PESO) of Manolo Fortich commenced its dynamic operations following the approval of Resolution No. 2005-08, which sanctioned the creation of Plantilla positions under the PESO of the Local Government Unit.
                            </p>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12"></div>
                    </div>

                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12">
                            <h3 class="text-2xl font-bold text-blue-700">July 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">Institutionalization</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                Recognizing the need for a dedicated institution to address employment challenges, the Manolo Fortich Municipal Mayor's office institutionalized the PESO through an ordinance under Sangguniang Bayan Resolution No. 2005-94, under the leadership of Mayor Socorro O. Acosta. This marked a significant step towards formalizing the office's role in facilitating employment opportunities and supporting workforce development.
                            </p>
                        </div>
                    </div>

                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12 text-right">
                            <h3 class="text-2xl font-bold text-blue-700">October 26, 2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">DOLE Accreditation</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                A pivotal resolution authorized Mayor Acosta to enter into an agreement with the Department of Labor and Employment (DOLE), culminating in the official accreditation of the PESO. This accreditation opened doors for collaboration with DOLE and other government agencies, enhancing the office's capacity to serve the community.
                            </p>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12"></div>
                    </div>

                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-12"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="w-1/2 pl-12">
                            <h3 class="text-2xl font-bold text-blue-700">January 2013</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mt-1">Manpower Skills Registration System</h4>
                            <p class="text-gray-600 mt-2 text-sm">
                                As leadership transitioned to Hon. Rogelio N. Guo, the PESO continued its mission to provide quality employment services. A resolution supporting the establishment of the Manpower Skills Registration System underscored the office's commitment to addressing the evolving needs of job seekers.
                            </p>
                        </div>
                    </div>
                    <div class="relative flex items-center mb-12">
    <div class="w-1/2 pr-12 text-right">
        <h3 class="text-2xl font-bold text-blue-700">2013</h3>
        <h4 class="text-lg font-semibold text-gray-800 mt-1">Youth Empowerment & Scholarship</h4>
        <p class="text-gray-600 mt-2 text-sm">
            Beyond traditional employment services, the PESO of Manolo Fortich prioritized education and youth empowerment. 
            The Mayor's Scholarship Program, initiated under Mayor Acosta's tenure, provided opportunities for economically 
            disadvantaged students to pursue higher education, breaking down barriers to academic achievement.
        </p>
    </div>
    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
    <div class="w-1/2 pl-12"></div>
</div>

<div class="relative flex items-center mb-12">
    <div class="w-1/2 pr-12"></div>
    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
    <div class="w-1/2 pl-12">
        <h3 class="text-2xl font-bold text-blue-700">October 2013</h3>
        <h4 class="text-lg font-semibold text-gray-800 mt-1">SPES Implementation</h4>
        <p class="text-gray-600 mt-2 text-sm">
            The implementation of the Special Program for the Employment of Students (SPES), supported by a 40% counterpart 
            from DOLE, provided short-term employment opportunities to hundreds of students, allowing them to earn while 
            gaining valuable work experience.
        </p>
    </div>
</div>

<div class="relative flex items-center mb-12">
    <div class="w-1/2 pr-12 text-right">
        <h3 class="text-2xl font-bold text-blue-700">2016</h3>
        <h4 class="text-lg font-semibold text-gray-800 mt-1">JobStart Philippines Program</h4>
        <p class="text-gray-600 mt-2 text-sm">
            The signing of a Memorandum of Agreement with DOLE for the JobStart Philippines Program marked another milestone. 
            This initiative aimed to bridge the gap between education and employment by providing training and job placement 
            assistance to young graduates.
        </p>
    </div>
    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
    <div class="w-1/2 pl-12"></div>
</div>

<div class="relative flex items-center mb-12">
    <div class="w-1/2 pr-12"></div>
    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
    <div class="w-1/2 pl-12">
        <h3 class="text-2xl font-bold text-blue-700">2013–2023</h3>
        <h4 class="text-lg font-semibold text-gray-800 mt-1">Regional Recognition</h4>
        <p class="text-gray-600 mt-2 text-sm">
            Throughout its existence, the PESO of Manolo Fortich has been recognized as one of the top-performing PESO offices 
            in the region, receiving awards in 2013, 2014, 2015, 2016, 2018, 2022, and 2023. These achievements highlight the 
            dedication and teamwork of the PESO Manager and staff in delivering exemplary public service.
        </p>
    </div>
</div>

<div class="relative flex items-center">
    <div class="w-1/2 pr-12 text-right">
        <h3 class="text-2xl font-bold text-blue-700">Today</h3>
        <h4 class="text-lg font-semibold text-gray-800 mt-1">Continuing the Mission</h4>
        <p class="text-gray-600 mt-2 text-sm">
            Like a soaring eagle upon the sky, the PESO of Manolo Fortich, as part of a first-class municipality, continues its 
            journey toward inclusive development. The office constantly evolves to adapt to changing economic landscapes, 
            serving as a testament to the power of public service in empowering individuals and strengthening the community.
        </p>
    </div>
    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow"></div>
    <div class="w-1/2 pl-12"></div>
</div>
                </div>
            </div>
        </section>
@endsection
