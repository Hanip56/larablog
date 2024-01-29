@php
    $currentCategory = $_GET['category'] ?? '';

    $categories = ['technology', 'travel', 'food', 'fashion'];

    $searchTerm = $_GET['search'] ?? '';
@endphp

<div class="mt-6 flex flex-col gap-6">
    {{-- search input --}}
    <form action="/" class="flex gap-4 max-w-3xl">
        <div class="flex-1 py-2 px-4 bg-gray-100 flex items-center gap-2 rounded-xl has-[:focused]:bg-black">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="search..." class="w-full bg-transparent focus:outline-none" name="search">
        </div>

        <button type="submit"
            class="bg-black font-semibold px-4 py-2 text-white rounded-xl hover:opacity-80">Search</button>
    </form>
    {{-- search tags --}}
    <div class="flex flex-wrap gap-2 items-center text-sm font-semibold">
        @foreach ($categories as $category)
            <a href="{{ $currentCategory == $category ? '/' : "/?category=$category" }}">
                <button
                    class="py-2 px-4 border border-transparent rounded-full {{ $currentCategory == $category ? 'bg-blue-400 text-white' : '!border-blue-100' }}">{{ ucfirst($category) }}</button>
            </a>
        @endforeach

        @if ($searchTerm)
            <a href="/">
                <button
                    class="py-2 px-4 border border-transparent rounded-full bg-blue-400 text-white font-normal hover:opacity-80">
                    Search: <span class="mr-4">{{ $searchTerm }}</span> <i class="fa-solid fa-x"
                        style="font-size: 12px;"></i>
                </button>
            </a>
        @endif
    </div>
</div>
