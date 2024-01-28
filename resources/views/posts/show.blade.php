<x-layout>
    <x-container>
        <div class="flex flex-col md:flex-row items-center gap-8 my-10">
            <div class="md:flex-1">
                <h1 class="text-4xl lg:text-5xl font-bold mb-8 leading-[1.3] lg:leading-[1.3]">{{ $post->title }}</h1>
                <div class="flex gap-2 items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden">
                        <img src="{{ asset('images/avatar.jpg') }}" alt="">
                    </div>
                    <div>
                        <p class="font-semibold">Kazuha</p>
                        <small class="font-medium">26.01.2024</small>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 w-full h-80 bg-black overflow-hidden">
                <img src="{{ $post->thumbnail ? '/storage/' . $post->thumbnail : asset('images/post_01.jpg') }}"
                    alt="" class="w-full h-full object-cover">
            </div>
        </div>

        {{-- desc --}}
        <div class="flex gap-12 my-10">
            <div class="flex-1 text-justify space-y-6">
                <p>{{ $post->description }}</p>
            </div>
            <div class="hidden md:flex basis-[30%] flex-col gap-y-8">
                <div>
                    <small class="text-gray-500">What's hot</small>
                    <h3 class="text-2xl font-semibold">Most Popular</h3>
                </div>
                <div>
                    <div class="p-1 px-2 bg-orange-600 text-white text-xs inline rounded-full">Travel</div>
                    <h6 class="text-sm font-medium leading-normal mt-2 mb-1 text-gray-700">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Delectus,
                        nobis!</h6>
                    <div class="text-sm">
                        <small class="font-medium">Joseph Own</small>
                        <small class="text-gray-500">10.03.2023</small>
                    </div>
                </div>
                <div>
                    <div class="p-1 px-2 bg-orange-600 text-white text-xs inline rounded-full">Travel</div>
                    <h6 class="text-sm font-medium leading-normal mt-2 mb-1 text-gray-700">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Delectus,
                        nobis!</h6>
                    <div class="text-sm">
                        <small class="font-medium">Joseph Own</small>
                        <small class="text-gray-500">10.03.2023</small>
                    </div>
                </div>
                <div>
                    <div class="p-1 px-2 bg-orange-600 text-white text-xs inline rounded-full">Travel</div>
                    <h6 class="text-sm font-medium leading-normal mt-2 mb-1 text-gray-700">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Delectus,
                        nobis!</h6>
                    <div class="text-sm">
                        <small class="font-medium">Joseph Own</small>
                        <small class="text-gray-500">10.03.2023</small>
                    </div>
                </div>
            </div>
        </div>
    </x-container>

    @include('partials/_footer')
</x-layout>
