@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal	 text-sm text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
