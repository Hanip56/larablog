<div class="w-full">
    <x-container class="flex items-center justify-between py-4">
        {{-- logo --}}
        <a href="/" class="flex gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-hippo text-2xl"></i>
            <span class="font-bold text-lg">Larablog</span>
        </a>

        @auth
            <div class="flex items-center gap-4">
                <a href="/posts/manage" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-gear"></i> posts
                </a>
                <a href="/posts/create" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        @endauth

        <div class="flex items-center gap-4">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                        <i class="fa-solid fa-right-to-bracket"></i> Logout
                    </button>
                </form>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full overflow-hidden border">
                        <img src="{{ asset('images/user-default.jpg') }}" alt="user-default">
                    </div>
                    <p class="font-semibold">{{ auth()->user()->name }}</p>
                </div>
            @else
                <a href="/register" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-address-card"></i> Register
                </a>
                <a href="/login" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-right-to-bracket"></i> Login
                </a>
            @endauth
        </div>
    </x-container>
</div>
