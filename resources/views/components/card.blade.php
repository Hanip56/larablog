@php
    $date = strtotime($post->created_at);
    $date = date('m/d/y', $date);
@endphp

<a href="/posts/{{ $post->id }}">
    <div class="flex flex-col gap-4 cursor-pointer">
        {{-- image --}}
        <div class="w-full relative h-80 rounded-3xl overflow-hidden hover:opacity-80 transition">
            <img src="{{ $post->thumbnail ? '/storage/' . $post->thumbnail : asset('images/truck.jpg') }}" alt=""
                class="w-full h-full object-cover">

            {{-- badge category --}}
            <div class="absolute top-5 right-5 px-2 py-1 text-xs font-semibold text-white rounded-full bg-blue-300">
                {{ $post->category }}</div>
        </div>
        {{-- desc --}}
        <div class="flex flex-col gap-2 hover:opacity-80 transition">
            <h3 class="text-xl font-semibold">{{ $post->title }}</h3>
            <p class="text-gray-500 text-sm">
                {{ strlen($post->description) > 15 ? substr($post->description, 0, 100) . '...' : $post->description }}
            </p>

            <div class="flex items-center mt-8 px-2 gap-4 text-sm font-medium">
                <div class="flex-1">
                    <i class="fa-regular fa-calendar mr-1"></i>
                    {{ $date }}
                </div>
                <div class="flex-1">
                    <i class="fa-regular fa-user mr-1"></i>
                    {{ $post->user['name'] }}
                </div>
            </div>
        </div>

        {{-- action --}}

        <button
            class="w-full rounded-full p-4 border font-semibold mt-2 transition hover:bg-blue-500/60 hover:text-white">Read
            More</button>
    </div>
</a>
