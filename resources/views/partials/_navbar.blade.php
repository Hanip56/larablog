<div class="w-full">
    <x-container class="flex items-center justify-between py-4">
        {{-- logo --}}
        <a href="/" class="flex gap-2 items-center cursor-pointer">
            <i class="fa-solid fa-hippo text-2xl"></i>
            <span class="font-bold text-lg">Larablog</span>
        </a>
        <div class="flex items-center gap-4">
            <a href="/register" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                <i class="fa-solid fa-address-card"></i> Register
            </a>
            <a href="/login" class="transition hover:text-blue-500 cursor-pointer flex items-center gap-1">
                <i class="fa-solid fa-right-to-bracket"></i> Login
            </a>
        </div>
    </x-container>
</div>
