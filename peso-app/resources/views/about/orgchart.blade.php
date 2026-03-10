@extends('layouts.app')

@section('title', 'Organizational Chart - PESO Manolo Fortich')

@section('content')

<style>
/* ===== ORG CHART TREE ===== */
.org-tree { display: flex; flex-direction: column; align-items: center; }
.org-tree ul {
    display: flex;
    justify-content: center;
    gap: 0;
    list-style: none;
    padding: 0;
    margin: 0;
    position: relative;
}
/* Vertical line going DOWN from parent to the horizontal bar */
.org-tree ul::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 28px;
    background: #1e3a5f;
}
/* Horizontal bar spanning children */
.org-tree ul li {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    padding: 28px 16px 0;
}
/* Horizontal line across siblings */
.org-tree ul li + li::before {
    content: '';
    position: absolute;
    top: 0;
    right: 50%;
    width: 100%;
    height: 2px;
    background: #1e3a5f;
}
/* Vertical line going DOWN to each child node */
.org-tree ul li::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 28px;
    background: #1e3a5f;
}
/* Remove top connector for the very first child in single-child lists */
.org-tree ul.single-child::before { display: none; }
.org-tree ul.single-child li::before { display: none; }

/* ===== NODE CARD ===== */
.org-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 140px;
}
.org-photo {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    border: 3px solid #fed7aa;
    background: #fdba74;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    margin-bottom: -20px;
    flex-shrink: 0;
}
.org-photo img { width: 100%; height: 100%; object-fit: cover; }
.org-box {
    background: #fb923c;
    border: 2px solid #ea580c;
    border-radius: 10px;
    padding: 28px 10px 10px;
    width: 100%;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
}
.org-box .org-name {
    font-size: 0.7rem;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    line-height: 1.2;
    margin-bottom: 4px;
}
.org-box .org-title {
    font-size: 0.6rem;
    color: #fff7ed;
    line-height: 1.3;
}

/* Vertical connector between L1 and L2 */
.org-down-line {
    width: 2px;
    height: 32px;
    background: #1e3a5f;
    flex-shrink: 0;
}
</style>

<section class="py-16 bg-gray-50 min-h-screen relative overflow-hidden">
    {{-- Watermark --}}
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none">
        <img src="{{ asset('images/PESOO.png') }}" alt="" class="w-130 h-130 object-contain opacity-5">
    </div>

    <div class="max-w-5xl mx-auto px-4 relative z-10">

        {{-- Header --}}
        <div class="text-center mb-10">
            <p class="text-gray-500 text-xs font-semibold uppercase tracking-widest mb-1">Local Government Unit of Manolo Fortich</p>
            <h1 class="text-2xl md:text-3xl font-extrabold text-orange-500 uppercase tracking-wide">PESO Organizational Chart</h1>
        </div>

        {{-- ===== CHART ===== --}}
        <div class="org-tree overflow-x-auto pb-8">

            {{-- LEVEL 1: Lorraine --}}
            @php
            $silhouette = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="36" height="36"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>';
            @endphp

            <div class="org-card">
                <div class="org-photo">
                    @if(file_exists(public_path('images/org/lorraine.jpg')))
                        <img src="{{ asset('images/org/lorraine.jpg') }}" alt="Lorraine">
                    @else
                        {!! $silhouette !!}
                    @endif
                </div>
                <div class="org-box">
                    <div class="org-name">Lorraine A. Requinton</div>
                    <div class="org-title">MGDH 1 PESO Manager</div>
                </div>
            </div>

            <div class="org-down-line"></div>

            {{-- LEVEL 2: Joanne --}}
            <div class="org-card">
                <div class="org-photo">
                    @if(file_exists(public_path('images/org/joanne.jpg')))
                        <img src="{{ asset('images/org/joanne.jpg') }}" alt="Joanne">
                    @else
                        {!! $silhouette !!}
                    @endif
                </div>
                <div class="org-box">
                    <div class="org-name">Joanne B. Abella</div>
                    <div class="org-title">Administrative Aide IV (Clerk II), Casual</div>
                </div>
            </div>

            {{-- LEVEL 3: three children --}}
            <ul>
                {{-- JALOU --}}
                <li>
                    <div class="org-card">
                        <div class="org-photo">
                            @if(file_exists(public_path('images/org/jalou.jpg')))
                                <img src="{{ asset('images/org/jalou.jpg') }}" alt="Jalou">
                            @else
                                {!! $silhouette !!}
                            @endif
                        </div>
                        <div class="org-box">
                            <div class="org-name">Jalou L. Cabunoc</div>
                            <div class="org-title">Administrative Aide IV (Clerk II), Casual</div>
                        </div>
                    </div>
                    {{-- L4 under Jalou --}}
                    <ul class="single-child">
                        <li>
                            <div class="org-card">
                                <div class="org-photo">{!! $silhouette !!}</div>
                                <div class="org-box">
                                    <div class="org-name">Vacant</div>
                                    <div class="org-title">Position</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                {{-- RUTCHELLE --}}
                <li>
                    <div class="org-card">
                        <div class="org-photo">
                            @if(file_exists(public_path('images/org/rutchelle.jpg')))
                                <img src="{{ asset('images/org/rutchelle.jpg') }}" alt="Rutchelle">
                            @else
                                {!! $silhouette !!}
                            @endif
                        </div>
                        <div class="org-box">
                            <div class="org-name">Rutchelle Rosal</div>
                            <div class="org-title">Administrative Aide IV (Clerk II), JO</div>
                        </div>
                    </div>
                    {{-- L4 under Rutchelle --}}
                    <ul>
                        <li>
                            <div class="org-card">
                                <div class="org-photo">
                                    @if(file_exists(public_path('images/org/yolanda.jpg')))
                                        <img src="{{ asset('images/org/yolanda.jpg') }}" alt="Yolanda">
                                    @else
                                        {!! $silhouette !!}
                                    @endif
                                </div>
                                <div class="org-box">
                                    <div class="org-name">Yolanda Lagat</div>
                                    <div class="org-title">Administrative Aide I (Utility), JO</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="org-card">
                                <div class="org-photo">
                                    @if(file_exists(public_path('images/org/renelito.jpg')))
                                        <img src="{{ asset('images/org/renelito.jpg') }}" alt="Renelito">
                                    @else
                                        {!! $silhouette !!}
                                    @endif
                                </div>
                                <div class="org-box">
                                    <div class="org-name">Renelito A. Ubagan</div>
                                    <div class="org-title">Watchman I, JO</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                {{-- JEROME --}}
                <li>
                    <div class="org-card">
                        <div class="org-photo">
                            @if(file_exists(public_path('images/org/jerome.jpg')))
                                <img src="{{ asset('images/org/jerome.jpg') }}" alt="Jerome">
                            @else
                                {!! $silhouette !!}
                            @endif
                        </div>
                        <div class="org-box">
                            <div class="org-name">Jerome B. Sigongan</div>
                            <div class="org-title">Administrative Assistant II (Clerk IV), JO</div>
                        </div>
                    </div>
                    {{-- L4 under Jerome --}}
                    <ul class="single-child">
                        <li>
                            <div class="org-card">
                                <div class="org-photo">{!! $silhouette !!}</div>
                                <div class="org-box">
                                    <div class="org-name">Vacant</div>
                                    <div class="org-title">Position</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        {{-- end chart --}}

    </div>
</section>

@endsection