@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full rounded-2xl p-3 bg-white/50 backdrop-blur border-zinc-200 focus:ring-0 focus:border-zinc-300']) !!}>
