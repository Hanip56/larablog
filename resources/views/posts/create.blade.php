<x-layout>
    <x-container class="my-12">
        <h1 class="text-4xl font-semibold">Create posts</h1>
        <form id="create-post-form" action="/posts/create" method="POST" class="p-4 my-6 flex flex-col gap-4"
            enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="title" class="font-semibold" required>Title</label>
                <input type="text" id="title" name="title" placeholder="Enter title"
                    class="border py-2 px-4 rounded-xl" value="{{ old('title') }}" required>
            </div>
            {{-- <div class="flex flex-col gap-2">
                <label for="description" class="font-semibold">Description</label>
                <textarea type="text" id="description" name="description" placeholder="Enter description"
                    class="border py-2 px-4 rounded-xl"></textarea>
            </div> --}}
            {{-- markdown --}}
            <div class="flex flex-col space-y-2">
                <label for="editor" class="font-semibold">Description</label>
                <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                @error('description')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <textarea id="description" type="text" class="hidden" name="description"></textarea>
            {{-- end markdown --}}
            <div class="flex flex-col gap-2">
                <label for="category" class="font-semibold">Category</label>
                <div class="flex gap-4 items-center">
                    <div class="flex items-center">
                        <input id="technology" type="radio" value="technology" name="category"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue" required>
                        <label for="technology" class="ms-2 text-sm font-medium text-gray-900 ">Technology</label>
                    </div>
                    <div class="flex items-center">
                        <input id="travel" type="radio" value="travel" name="category"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="travel" class="ms-2 text-sm font-medium text-gray-900 ">Travel</label>
                    </div>
                    <div class="flex items-center">
                        <input id="food" type="radio" value="food" name="category"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="food" class="ms-2 text-sm font-medium text-gray-900 ">Food</label>
                    </div>
                    <div class="flex items-center">
                        <input id="fashion" type="radio" value="fashion" name="category"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="fashion" class="ms-2 text-sm font-medium text-gray-900 ">Fashion</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label for="thumbnail" class="font-semibold">Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" placeholder="Enter title"
                    class="border py-2 px-4 rounded-xl cursor-pointer" value="{{ old('thumbnail') }}" required>

                @error('thumbnail')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit"
                class="py-2 px-4 rounded-lg bg-black font-semibold self-end text-white mt-4 hover:opacity-80">Create</button>
        </form>
    </x-container>
</x-layout>
