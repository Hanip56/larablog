@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-5 left-1/2 -translate-x-1/2 py-2 px-28 rounded-full bg-black font-semibold text-white">
        {{ session('message') }}
    </div>
@endif
