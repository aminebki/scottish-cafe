@props([
    'title',
    'subtitle' => null,
    'alignment' => 'center', // center | left
    'underline' => true,
])

<div class="{{ $alignment === 'center' ? 'text-center' : 'text-left' }} mb-12 md:mb-16">
    @if($subtitle)
        <span class="text-[#c9a961] text-sm font-semibold uppercase tracking-[0.2em] mb-3 block">{{ $subtitle }}</span>
    @endif
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#4a2a1e] leading-tight {{ $alignment === 'center' ? 'mx-auto max-w-3xl' : '' }}">
        {!! $title !!}
    </h2>
    @if($underline)
        <div class="{{ $alignment === 'center' ? 'mx-auto' : '' }} mt-4 w-20 h-1 bg-gradient-to-r from-[#c9a961] to-[#c9a961]/30 rounded-full"></div>
    @endif
</div>