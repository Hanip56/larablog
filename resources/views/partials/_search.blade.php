@php

    $currentCategory = $_GET['category'] ?? '';

    $categories = ['technology', 'travel', 'food', 'fashion'];
@endphp

<div class="mt-6 flex gap-6 items-center">
    {{-- search input --}}
    <div class="py-2 px-4 bg-gray-100 flex items-center gap-2 rounded-xl basis-[40%]">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="search..." class="w-full bg-transparent">
    </div>
    {{-- search tags --}}
    <div class="flex-1 flex gap-2 items-center text-sm font-semibold">
        @foreach ($categories as $category)
            <a href="/?category={{ $category }}">
                <button
                    class="py-2 px-4 rounded-full {{ $currentCategory == $category ? 'bg-blue-400 text-white' : '' }}">{{ ucfirst($category) }}</button>
            </a>
        @endforeach
    </div>
</div>
