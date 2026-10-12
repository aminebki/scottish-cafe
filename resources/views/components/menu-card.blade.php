@props([
    'image' => null,
    'title',
    'description' => null,
    'price',
    'badge' => null,
    'badgeText' => null,
])

<div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-transparent hover:border-scottish-gold/20">
    @if($image)
        <div class="relative overflow-hidden aspect-[4/3]">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-scottish-brown/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            @if($badge)
                <span @class([
                    'absolute top-4 left-4 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider',
                    'bg-scottish-gold text-scottish-brown' => $badge === 'popular',
                    'bg-scottish-brown text-scottish-gold' => $badge === 'special',
                    'bg-green-600 text-white' => $badge === 'vegetarian',
                    'bg-red-500 text-white' => $badge === 'spicy',
                    'bg-blue-500 text-white' => $badge === 'new',
                ])>
                    {{ $badgeText ?? $badge }}
                </span>
            @endif
        </div>
    @endif

    <div class="p-6">
        <div class="flex items-start justify-between gap-4 mb-2">
            <h3 class="font-serif text-xl font-bold text-scottish-brown group-hover:text-scottish-gold transition-colors duration-300">
                {{ $title }}
            </h3>
            <span class="font-serif text-xl font-bold text-scottish-gold whitespace-nowrap">
                {{ $price }}
            </span>
        </div>
        @if($description)
            <p class="text-[#2c2c2c]/60 text-sm leading-relaxed">
                {{ $description }}
            </p>
        @endif
    </div>
</div>