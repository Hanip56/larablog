<x-layout>
    @include('partials/_hero')

    <x-container class="pb-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-card />
            <x-card />
            <x-card />
            <x-card />
            <x-card />
            <x-card />
        </div>
    </x-container>

    @include('partials/_subscribe')
</x-layout>
