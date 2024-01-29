<x-layout>
    <x-container class="my-12 overflow-x-auto">
        <div style="margin-bottom: 2rem;">
            <h1 class="font-semibold text-4xl mb-2">Manage Posts</h1>
            <p>Manage your posts</p>
        </div>
        <table class="w-full rounded-xl overflow-hidden">
            <thead class="text-gray-700 uppercase bg-gray-50">
                <td class="px-4 py-4 font-semibold">Image</td>
                <td class="px-4 py-4 font-semibold">Title</td>
                <td class="px-4 py-4 font-semibold">Actions</td>
            </thead>
            @foreach ($posts as $post)
                <tr>
                    <td class="px-4 py-2">
                        <div style="width: 7.5rem; height: 7.5rem;" class="rounded-xl overflow-hidden">
                            <img src="/storage/{{ $post->thumbnail }}" alt=""
                                class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-4 py-2">{{ $post->title }}</td>
                    <td class="px-4 py-2">
                        <div class="flex gap-4">
                            <a href="{{ $post->id }}/edit">
                                <button class="hover:text-blue-500 transition">
                                    <i class="fa-solid fa-pencil"></i> Edit
                                </button>
                            </a>

                            <form action="/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:text-red-500 transition">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-container>
</x-layout>
