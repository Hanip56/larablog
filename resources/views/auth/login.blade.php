<x-layout>
    <x-container class="flex items-center gap-4 py-8">
        {{-- illustration --}}
        <div class="flex-1 h-full hidden sm:block">
            <img src="{{ asset('images/illustration_02.jpg') }}" alt="Man holding phone illustration"
                class="w-full h-full object-cover">
        </div>
        {{-- form --}}
        <div class="p-12 flex-1 flex items-center justify-center">
            <div class="w-[80%]">
                <div class="text-center">
                    <h1 class="font-semibold text-2xl mb-1">Login</h1>
                    <p class="text-gray-500">Welcome back, start post an amazing article</p>
                </div>
                <form action="/login" method="POST" class="my-4 w-full flex flex-col gap-2">
                    @csrf
                    <x-input name="email" label="Email" iconClass="fa-solid fa-envelope" placeholder="Enter email" />
                    <x-input type="password" name="password" label="Password" iconClass="fa-solid fa-user-lock"
                        placeholder="Enter password" />
                    <button
                        class="py-2 px-6 rounded-full bg-black hover:opacity-80 font-semibold text-white mt-4 self-center">Login
                        <i class="fa-solid fa-arrow-right ml-2"></i></button>
                </form>
                <div class="w-full text-center mt-6">
                    <small>Doesn't have an account <a class="text-blue-500 font-semibold"
                            href="/register">Register</a></small>
                </div>
            </div>
        </div>
    </x-container>
</x-layout>
