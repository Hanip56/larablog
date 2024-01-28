<div>
    <div
        class="text-gray-500 has-[:focus]:border-b-black has-[:focus]:text-black py-3 border-b px-2 flex items-center gap-3">
        <i class="{{ $iconClass }}"></i>
        <label for="{{ $name }}" class="sr-only">{{ $label }}</label>
        <input id="{{ $name }}" type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder }}"
            name="{{ $name }}" class="w-full outline-none" value="{{ old($name) }}">

    </div>
    @error($name)
        <small class="text-red-500">{{ $message }}</small>
    @enderror
</div>
