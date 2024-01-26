<div class="flex flex-col gap-4">
    {{-- image --}}
    <div class="w-full h-80 rounded-3xl overflow-hidden hover:opacity-80 transition">
        <img src="{{ asset('images/truck.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>
    {{-- desc --}}
    <div class="flex flex-col gap-2 hover:opacity-80 transition">
        <h3 class="text-xl font-semibold">New Intelligent Robots Are Able To Become Musicians</h3>
        <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nisi cum iste
            maxime
            hic dolorum.</p>

        <div class="flex items-center mt-8 px-2 gap-4 text-sm font-medium">
            <div class="flex-1">
                <i class="fa-regular fa-calendar mr-1"></i>
                26/01/2024
            </div>
            <div class="flex-1">
                <i class="fa-regular fa-user mr-1"></i>
                Sky
            </div>
        </div>
    </div>

    {{-- action --}}
    <button
        class="w-full rounded-full p-4 border font-semibold mt-2 transition hover:bg-blue-500/60 hover:text-white">Read
        More</button>
</div>
