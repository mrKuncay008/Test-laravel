<div class="flex h-screen ">
    <!-- Sidebar -->
    <nav class="bg-gray-800 shadow-lg w-60 min-h-auto px-4 py-6">
        <div class="flex items-center justify-center h-16 border-b border-gray-600">
            <a href="">
                <img src="" width="100" alt="Logo">
            </a>
        </div>

        <div class="flex flex-col gap-4 mt-5 text-white">
            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-500 {{ request()->routeIs('dashboard') ? 'text-blue-400' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-500 {{ request()->routeIs('users.index') ? 'text-blue-400' : '' }}">
                <i class="fas fa-users"></i>
                User
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-500 {{ request()->routeIs('categories.index') ? 'text-blue-400' : '' }}">
                <i class="fas fa-layer-group"></i>
                Categories
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-500 {{ request()->routeIs('tasks.index') ? 'text-blue-400' : '' }}">
                <i class="fas fa-tasks"></i>
                Task
            </a>

            <a href="" class="flex gap-3 px-4 py-2 hover:text-blue-500 {{ request()->routeIs('assigned.tasks') ? 'text-blue-400' : '' }}">
                <i class="fas fa-clipboard-list"></i>
                My Assigned Task
            </a>
        </div>

        <div class="flex flex-col mt-12">
            <a href="" class="text-white block px-4 py-2 hover:text-blue-500">
                <i class="fas fa-user-circle"></i> Profile
            </a>

            <form action="" method="POST">
                @csrf
                <button type="submit" class="text-white block px-4 py-2 hover:text-blue-500">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </button>
            </form>
        </div>
    </nav>
</div>
