<!-- resources/views/components/FormField.blade.php -->

@props(['label', 'type', 'name', 'value' => null])

<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
        {{ $attributes }}>
</div>
