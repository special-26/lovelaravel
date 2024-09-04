@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xs text-zinc-400']) }}>
    {{ $value ?? $slot }}
</label>
