@props([
    'image',
    'caption' => null,
    'category' => 'all',
])

<div 
    class="gallery-item group relative overflow-hidden rounded-2xl cursor-pointer"
    data-category="{{ $category }}"
    @click="$dispatch('open-lightbox', { src: '{{ $image }}', caption: '{{ $caption }}' })"
>
    <img 
        src="{{ $image }}" 
        alt="{{ $caption ?? 'Galerie Scottish Restaurant' }}" 
        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-scottish-brown/80 via-scottish-brown/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-6">
        @if($caption)
            <p class="text-white font-medium text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                {{ $caption }}
            </p>
        @endif
        <div class="mt-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">
            <span class="inline-flex items-center gap-2 text-scottish-gold text-xs font-semibold uppercase tracking-wider">
                <i class="fas fa-expand"></i>
                Voir en grand
            </span>
        </div>
    </div>
</div>