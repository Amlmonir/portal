<aside class="w-64 bg-slate-900 min-h-screen flex flex-col shadow-2xl sticky top-0">
    <div class="p-6 border-b border-slate-800 flex flex-col items-center gap-3">
        <img src="{{ asset('build/assets/New-Cairo-University-of-Technology.png') }}" class="h-14 w-auto" alt="Logo">
        <a href="{{ route('profile.edit') }}">
        <span class="text-white text-xs font-bold tracking-widest uppercase opacity-50">Admin Panel</span>
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-4">

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/50' : 'text-gray-400 hover:bg-slate-800 hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            <span class="font-medium text-sm">Dashboard</span>
        </a>



        <a href="#"
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200 text-gray-400 hover:bg-slate-800 hover:text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
            <span class="font-medium text-sm">Manage Users</span>
        </a>



    </nav>

    <div class="p-4 border-t border-slate-800">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="group flex items-center gap-3 w-full px-4 py-3 text-red-400 hover:bg-red-900/20 rounded-lg transition duration-200">
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span class="font-medium text-sm">Log Out</span>
            </button>
        </form>
    </div>
</aside>
