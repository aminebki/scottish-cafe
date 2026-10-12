@props([
    'quote',
    'name',
    'date',
    'rating' => 5,
])

<div class="bg-white rounded-2xl p-8 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 transition-all duration-500 group">
    {{-- Stars --}}
    <div class="flex gap-1 mb-4">
        @for($i = 1; $i <= 5; $i++)
            <i class="fas fa-star text-sm {{ $i <= $rating ? 'text-[#c9a961]' : 'text-gray-200' }}"></i>
        @endfor
    </div>
    
    {{-- Quote --}}
    <p class="text-[#2c2c2c]/80 text-base leading-relaxed mb-6 italic font-['Playfair_Display']">"{{ $quote }}"</p>
    
    {{-- Author --}}
    <div class="flex items-center gap-4 pt-4 border-t border-[#4a2a1e]/5">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#c9a961] to-[#4a2a1e] flex items-center justify-center text-white font-bold text-lg">
            {{ substr($name, 0, 1) }}
        </div>
        <div>
            <div class="font-semibold text-[#4a2a1e]">{{ $name }}</div>
            <div class="text-xs text-gray-400">{{ $date }}</div>
        </div>
    </div>
</div>