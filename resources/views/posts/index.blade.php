<x-layout>
    @include('partials/_hero')

    <x-container class="pb-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <x-card :post="$post" />
                @endforeach
            @else
                <p class="text-center text-lg font-semibold text-gray-600">Opps, There is no post</p>
            @endif
        </div>
    </x-container>

    @include('partials/_subscribe')
    @include('partials/_footer')
</x-layout>
