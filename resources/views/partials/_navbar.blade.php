<div class="w-full">
    <x-container class="flex items-center justify-between py-4">
        {{-- logo --}}
        <a href="/" class="flex gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-hippo text-2xl"></i>
            <span class="font-bold text-lg">Larablog</span>
        </a>

        @auth
            <div class="hidden sm:flex items-center gap-4">
                <a href="/posts/manage" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-gear"></i> posts
                </a>
                <a href="/posts/create" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        @endauth

        <div class="hidden sm:flex items-center gap-4">
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

        {{-- mobile menu bar --}}
        <div class="block sm:hidden relative" x-data="{ open: false }">
            <button x-on:click="open=!open" id="open-menu-mobile" class="text-lg">
                <i class="fa-solid fa-bars"></i>
            </button>

            {{-- menu --}}
            <div class="absolute top-7 right-0 bg-white shadow-md w-40 flex flex-col" x-show="open"
                @click.outside="open = false">
                @auth
                    <a href="/posts/manage"
                        class="transition hover:bg-gray-100 cursor-pointer flex items-center gap-2 py-2 px-4">
                        <i class="fa-solid fa-gear"></i> posts
                    </a>
                    <a href="/posts/create"
                        class="transition hover:bg-gray-100 cursor-pointer flex items-center gap-2 py-2 px-4">
                        <i class="fa-solid fa-plus"></i> Create
                    </a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"
                            class="transition hover:bg-gray-100 cursor-pointer flex items-center gap-2 py-2 px-4 w-full border-t">
                            <i class="fa-solid fa-right-to-bracket"></i> Logout
                        </button>
                    </form>
                @else
                    <a href="/register"
                        class="transition hover:bg-gray-100 cursor-pointer flex items-center gap-2 py-2 px-4">
                        <i class="fa-solid fa-address-card"></i> Register
                    </a>
                    <a href="/login" class="transition hover:bg-gray-100 cursor-pointer flex items-center gap-2 py-2 px-4">
                        <i class="fa-solid fa-right-to-bracket"></i> Login
                    </a>
                @endauth

            </div>
        </div>


    </x-container>
</div>
