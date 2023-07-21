<header class="sticky top-0 bg-white dark:bg-[#182235] border-b border-slate-200 dark:border-slate-700 z-30">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 -mb-px">

            <!-- Header: Left side -->
            <div class="flex">
                <a class="block" href="{{ route('dashboard') }}">
                    <svg width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                                <stop stop-color="#A5B4FC" offset="100%" />
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                                <stop stop-color="#38BDF8" offset="100%" />
                            </linearGradient>
                        </defs>
                        <rect fill="#6366F1" width="32" height="32" rx="16" />
                        <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5" />
                        <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)" />
                        <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)" />
                    </svg>
                </a>
                {{-- <!-- Hamburger button -->
                <button
                    class="text-slate-500 hover:text-slate-600 lg:hidden"
                    @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar"
                    :aria-expanded="sidebarOpen"
                >
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" />
                        <rect x="4" y="11" width="16" height="2" />
                        <rect x="4" y="17" width="16" height="2" />
                    </svg>
                </button> --}}

            </div>

            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">
                
               <ul class="flex gap-4">
                <li> 
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('dashboard')){{ '!text-indigo-500' }}@endif" href="{{ route('dashboard') }}">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Laporan Keuangan</span>
                    </a>
                </li>
                @can('admin')
                    
                
                <li> 
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('upload')){{ '!text-indigo-500' }}@endif" href="{{route('upload')}}">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Upload Laporan</span>
                    </a>
                </li>

                <li>
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('riwayat')){{ '!text-indigo-500' }}@endif" href="/riwayat">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Riwayat Laporan</span>
                    </a>
                </li>
                
                <li>
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('satker')){{ '!text-indigo-500' }}@endif" href="/satker">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Satker</span>
                    </a>
                </li>
                
                <li>
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('upload')){{ '!text-indigo-500' }}@endif" href="/direktorat">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Direktorat</span>
                    </a>
                </li>
                
                <li>
                    <a class="block text-slate-400 hover:text-blue-300 transition duration-150 truncate @if(Route::is('pengguna')){{ '!text-indigo-500' }}@endif" href="/pengguna">
                        <span class="text-lg font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">User</span>
                    </a>
                </li>
                
                
                @endcan
               </ul>

                <!-- Divider -->
                <hr class="w-px h-6 bg-slate-200 dark:bg-slate-700 border-none" />

                <!-- User button -->
                <x-dropdown-profile align="right" />

            </div>

        </div>
    </div>
</header>