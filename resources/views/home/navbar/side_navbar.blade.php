<div class="flex h-screen drop-shadow-md">
    <!-- Sidebar -->
    <nav class="bg-gray-800 shadow-lg w-60 min-h-auto px-2 py-6">
        <div class="container flex items-center justify-start h-16 border-b border-gray-600">
            <a href="">
                <img src="{{ asset('/image/logo.png') }}" 
                class="rounded-lg drop-shadow-md mb-4" width="60" height="60" alt="Logo">
            </a>
            <h2 class="container mb-4 text-lg text-slate-200"> Welcome <br><b>{{Auth::user()->name}}</b></h2>
        </div>

        <div class="flex flex-col gap-4 mt-5 text-white">
            <a href="/home" class="flex gap-3 px-4 py-2 hover:text-blue-400 {{ request()->routeIs('home') ? 'text-blue-400' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>

            <a href="users" class="flex gap-3 px-4 py-2 hover:text-blue-400 {{ request()->routeIs('user') ? 'text-blue-400' : '' }}">
                <i class="fas fa-users"></i>
                User
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-400 {{ request()->routeIs('categories') ? 'text-blue-400' : '' }}">
                <i class="fas fa-layer-group"></i>
                Categories
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-400 {{ request()->routeIs('tasks.index') ? 'text-blue-400' : '' }}">
                <i class="fas fa-tasks"></i>
                Task
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-400 {{ request()->routeIs('assigned.tasks') ? 'text-blue-400' : '' }}">
                <i class="fas fa-clipboard-list"></i>
                My Assigned Task
            </a>
        </div>

        <div class="flex flex-col mt-12">
            <a href="" class="text-white block px-4 py-2 hover:text-blue-500">
                <i class="fas fa-user-circle"></i> Profile
            </a>

            <form method="POST" action="{{ route('actionlogout') }}">
                @csrf
                <button type="submit" class="text-white block px-4 py-2 hover:text-blue-500">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </button>
            </form>
        </div>
    </nav>
</div>
