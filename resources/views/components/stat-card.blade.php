@props([
    'number',
    'label',
    'icon' => null,
    'delay' => 0,
])

<div class="fade-up text-center group" style="transition-delay: {{ $delay }}ms">
    @if($icon)
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-[#c9a961]/10 flex items-center justify-center group-hover:bg-[#c9a961]/20 transition-colors duration-300">
            <i class="{{ $icon }} text-2xl text-[#c9a961]"></i>
        </div>
    @endif
    <div class="text-4xl md:text-5xl font-bold text-[#c9a961] mb-2 font-['Playfair_Display']">{{ $number }}</div>
    <div class="text-white/70 text-sm uppercase tracking-wider">{{ $label }}</div>
</div>