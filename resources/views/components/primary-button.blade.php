@props([
    'href' => '#',
    'variant' => 'solid',
    'size' => 'md',
])

@php
$sizes = [
    'sm' => 'px-5 py-2.5 text-sm',
    'md' => 'px-8 py-3.5 text-base',
    'lg' => 'px-10 py-4 text-lg',
];

$variants = [
    'solid' => 'bg-[#c9a961] text-[#4a2a1e] hover:bg-[#b8984f] shadow-lg shadow-[#c9a961]/25 hover:shadow-xl hover:shadow-[#c9a961]/40',
    'outline' => 'border-2 border-white/80 text-white hover:bg-white hover:text-[#4a2a1e] hover:border-white hover:shadow-lg hover:shadow-white/10',
    'outline-gold' => 'border-2 border-[#c9a961] text-[#c9a961] hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:shadow-lg hover:shadow-[#c9a961]/20',
    'dark' => 'bg-[#4a2a1e] text-[#c9a961] hover:bg-[#3a2015] shadow-lg shadow-[#4a2a1e]/20',
];
@endphp

<a href="{{ $href }}" 
   class="magnetic-btn inline-flex items-center justify-center gap-2.5 rounded-full font-bold transition-all duration-300 relative overflow-hidden group {{ $sizes[$size] }} {{ $variants[$variant] }}"
   onclick="rippleEffect(event, this)">
    
    {{-- Ripple container --}}
    <span class="ripple-container absolute inset-0 overflow-hidden rounded-full pointer-events-none"></span>
    
    {{-- Shine effect --}}
    <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></span>
    
    {{-- Content --}}
    <span class="relative z-10 flex items-center gap-2.5">
        {{ $slot }}
    </span>
</a>

<script>
function rippleEffect(e, btn) {
    const ripple = document.createElement('span');
    const rect = btn.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = e.clientX - rect.left - size / 2;
    const y = e.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: rgba(255,255,255,0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
    `;
    
    btn.querySelector('.ripple-container').appendChild(ripple);
    
    setTimeout(() => ripple.remove(), 600);
}

// Add ripple keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script>