<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Employer Dashboard') — PESO Job Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased">

    <div class="min-h-screen flex flex-col">

        {{-- Top Navbar --}}
        <header class="bg-blue-900 shadow-md z-30 sticky top-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

                {{-- Logo + Brand --}}
                <div class="flex items-center gap-3">
                    <button id="sidebar-toggle" class="lg:hidden text-white p-1 rounded-lg hover:bg-blue-800 transition mr-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <img src="{{ asset('images/PESOO.png') }}" alt="PESO Logo" class="w-10 h-10 sm:w-14 sm:h-14 md:w-19 md:h-15 rounded-full object-cover shadow-sm">
                    <div class="leading-tight">
                        <span class="text-white font-extrabold text-sm sm:text-base tracking-tight">PESO Job Portal</span>
                        <span class="block text-blue-300 text-xs">Employer Portal</span>
                    </div>
                </div>

                {{-- Right side --}}
                <div class="flex items-center gap-3 sm:gap-4">
                    <span class="hidden sm:block text-blue-200 text-sm">
                        {{ session('employer.company', 'Your Company') }}
                    </span>
                    <div class="relative" id="user-menu-wrapper">
                        <button id="user-menu-btn" class="flex items-center gap-2 bg-blue-800 hover:bg-blue-700 text-white rounded-xl px-3 py-2 text-sm font-semibold transition">
                            <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="hidden sm:inline">{{ session('employer.email', 'Account') }}</span>
                            <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="user-menu-dropdown" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-50">
                            <form method="POST" action="{{ route('employer.logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 font-semibold transition flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex flex-1 overflow-hidden">

            {{-- Sidebar --}}
            <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-20 w-64 bg-white border-r border-gray-200 flex flex-col pt-16 lg:pt-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-200 shadow-xl lg:shadow-none">
                <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest px-3 mb-3">Main Menu</p>

                    <a href="{{ route('employer.dashboard') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('employer.dashboard') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('employer.jobs.index') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('employer.jobs.*') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Job Postings
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Applicants
                        <span class="ml-auto bg-gray-100 text-gray-500 text-xs font-bold px-2 py-0.5 rounded-full">Soon</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Reports
                        <span class="ml-auto bg-gray-100 text-gray-500 text-xs font-bold px-2 py-0.5 rounded-full">Soon</span>
                    </a>

                    <div class="pt-4">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest px-3 mb-3">Account</p>
                        <a href="#"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Settings
                            <span class="ml-auto bg-gray-100 text-gray-500 text-xs font-bold px-2 py-0.5 rounded-full">Soon</span>
                        </a>
                    </div>
                </nav>

                {{-- Sidebar footer --}}
                <div class="px-4 py-4 border-t border-gray-100">
                    <form method="POST" action="{{ route('employer.logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-red-600 hover:bg-red-50 transition">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </aside>

            {{-- Sidebar backdrop (mobile) --}}
            <div id="sidebar-backdrop" class="hidden fixed inset-0 bg-black/40 z-10 lg:hidden" onclick="closeSidebar()"></div>

            {{-- Main content --}}
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>

        </div>
    </div>

<script>
    // Sidebar toggle (mobile)
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('sidebar-backdrop');
    document.getElementById('sidebar-toggle').addEventListener('click', function () {
        sidebar.classList.toggle('-translate-x-full');
        backdrop.classList.toggle('hidden');
    });
    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.add('hidden');
    }

    // User menu dropdown
    document.getElementById('user-menu-btn').addEventListener('click', function (e) {
        e.stopPropagation();
        document.getElementById('user-menu-dropdown').classList.toggle('hidden');
    });
    document.addEventListener('click', function () {
        document.getElementById('user-menu-dropdown').classList.add('hidden');
    });
</script>

@stack('scripts')
</body>
</html>
