@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-orange-50']) }}>
    {{ $value ?? $slot }}
</label>
