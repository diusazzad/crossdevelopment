@props(['label', 'name', 'type', 'value', 'error' => null])

<div class="mb-4">
    <label for="{{ $name }}" class="block font-semibold">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" class="form-input w-full @error($name) border-red-500 @enderror">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
</div>
