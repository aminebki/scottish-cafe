@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

{{-- ==========================================
     HERO SECTION
     ========================================== --}}
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div id="galleryParallax" class="absolute inset-0 scale-110 will-change-transform">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1920&q=80" 
                 alt="Restaurant ambiance" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-[#4a2a1e]/80 to-[#4a2a1e]/50 z-10"></div>
    </div>
    
    <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
        <span class="reveal-text inline-block text-[#c9a961] text-sm font-semibold uppercase tracking-[0.3em] mb-4 border border-[#c9a961]/30 rounded-full px-5 py-2 bg-white/10 backdrop-blur-md">
            Visual Journey
        </span>
        <h1 class="reveal-text text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6" style="transition-delay: 100ms;">
            Our <span class="text-[#c9a961] italic font-['Playfair_Display']">Gallery</span>
        </h1>
        <p class="reveal-text text-white/60 text-lg md:text-xl max-w-2xl mx-auto" style="transition-delay: 200ms;">
            Moments from Scottish Restaurant — where every plate tells a story and every night becomes a memory.
        </p>
    </div>
</section>

{{-- ==========================================
     GALLERY WITH FILTERS & LIGHTBOX
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#faf7f0]" 
         x-data="{ 
             activeFilter: 'all',
             lightboxOpen: false,
             currentImage: 0,
             images: [
                 { src: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&q=80', caption: 'Our Warm Interior', category: 'restaurant', height: 'h-64 md:h-80' },
                 { src: 'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=1200&q=80', caption: 'Wood-Fired Perfection', category: 'food', height: 'h-48 md:h-64' },
                 { src: 'https://images.unsplash.com/photo-1559339352-11d035aa65de?w=1200&q=80', caption: 'Friday Karaoke Night', category: 'events', height: 'h-56 md:h-72' },
                 { src: 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1200&q=80', caption: 'Premium Coffee Art', category: 'food', height: 'h-64 md:h-80' },
                 { src: 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1200&q=80', caption: 'Elegant Dining Space', category: 'restaurant', height: 'h-48 md:h-64' },
                 { src: 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=1200&q=80', caption: 'Scottish Special Pizza', category: 'food', height: 'h-56 md:h-72' },
                 { src: 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=1200&q=80', caption: 'Live Music Energy', category: 'events', height: 'h-64 md:h-80' },
                 { src: 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=1200&q=80', caption: 'Chef at Work', category: 'restaurant', height: 'h-48 md:h-64' },
                 { src: 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=1200&q=80', caption: 'Chocolate Lava Cake', category: 'food', height: 'h-56 md:h-72' },
                 { src: 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=1200&q=80', caption: 'Group Celebration', category: 'events', height: 'h-64 md:h-80' },
                 { src: 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1200&q=80', caption: 'Cozy Corner', category: 'restaurant', height: 'h-48 md:h-64' },
                 { src: 'https://images.unsplash.com/photo-1488477181946-6428a0291777?w=1200&q=80', caption: 'Fresh Panna Cotta', category: 'food', height: 'h-56 md:h-72' },
                 { src: 'https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=1200&q=80', caption: 'Karaoke Crowd', category: 'events', height: 'h-64 md:h-80' },
                 { src: 'https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?w=1200&q=80', caption: 'Pasta Carbonara', category: 'food', height: 'h-48 md:h-64' },
                 { src: 'https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?w=1200&q=80', caption: 'Outdoor Terrace', category: 'restaurant', height: 'h-56 md:h-72' }
             ],
             get filteredImages() {
                 if (this.activeFilter === 'all') return this.images;
                 return this.images.filter(img => img.category === this.activeFilter);
             },
             openLightbox(index) {
                 this.currentImage = index;
                 this.lightboxOpen = true;
                 document.body.style.overflow = 'hidden';
             },
             closeLightbox() {
                 this.lightboxOpen = false;
                 document.body.style.overflow = '';
             },
             nextImage() {
                 this.currentImage = (this.currentImage + 1) % this.filteredImages.length;
             },
             prevImage() {
                 this.currentImage = (this.currentImage - 1 + this.filteredImages.length) % this.filteredImages.length;
             }
         }" 
         @keydown.escape.window="closeLightbox()"
         @keydown.arrow-right.window="lightboxOpen && nextImage()"
         @keydown.arrow-left.window="lightboxOpen && prevImage()">

    <div class="max-w-7xl mx-auto">
        
        {{-- Filter Tabs --}}
        <div class="reveal-text flex flex-wrap justify-center gap-3 mb-12">
            @foreach(['all' => 'All Photos', 'restaurant' => 'Restaurant', 'food' => 'Food', 'events' => 'Events'] as $key => $label)
            <button @click="activeFilter = '{{ $key }}'; currentImage = 0" 
                    class="px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 relative overflow-hidden group"
                    :class="activeFilter === '{{ $key }}' ? 'bg-[#4a2a1e] text-[#c9a961] shadow-xl shadow-[#4a2a1e]/20' : 'bg-white text-[#4a2a1e] border border-[#4a2a1e]/10 hover:border-[#c9a961] hover:shadow-lg'">
                <span class="relative z-10">{{ $label }}</span>
                <span x-show="activeFilter === '{{ $key }}'" 
                      class="absolute inset-0 bg-gradient-to-r from-[#4a2a1e] to-[#5a3a2e]"
                      x-transition.opacity.duration.300ms></span>
            </button>
            @endforeach
        </div>

        {{-- Masonry Grid --}}
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
            <template x-for="(image, index) in filteredImages" :key="index">
                <div class="reveal break-inside-avoid group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500"
                     @click="openLightbox(index)"
                     :style="'transition-delay: ' + (index * 50) + 'ms'">
                    
                    <img :src="image.src" 
                         :alt="image.caption"
                         class="w-full object-cover group-hover:scale-110 transition-transform duration-700"
                         :class="image.height">
                    
                    {{-- Hover Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e]/90 via-[#4a2a1e]/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c9a961] text-xs font-semibold uppercase tracking-wider mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300" x-text="image.category"></span>
                        <h3 class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75" x-text="image.caption"></h3>
                        <div class="mt-3 flex items-center gap-2 text-white/60 text-sm translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">
                            <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <i class="fas fa-expand text-white text-xs"></i>
                            </div>
                            <span>Click to enlarge</span>
                        </div>
                    </div>
                    
                    {{-- Category badge (always visible) --}}
                    <div class="absolute top-4 left-4 px-3 py-1.5 rounded-full bg-[#4a2a1e]/70 backdrop-blur-sm text-[#c9a961] text-[10px] font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span x-text="image.category"></span>
                    </div>
                </div>
            </template>
        </div>

        {{-- Empty State --}}
        <div x-show="filteredImages.length === 0" class="text-center py-20" style="display: none;">
            <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-[#4a2a1e]/5 flex items-center justify-center">
                <i class="fas fa-image text-[#4a2a1e]/20 text-3xl"></i>
            </div>
            <p class="text-gray-400">No photos in this category yet.</p>
        </div>
    </div>

    {{-- ==========================================
         LIGHTBOX
         ========================================== --}}
    <div x-show="lightboxOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-[#4a2a1e]/95 backdrop-blur-xl flex items-center justify-center p-4"
         style="display: none;"
         @click.self="closeLightbox()">
        
        {{-- Close Button --}}
        <button @click="closeLightbox()" 
                class="absolute top-6 right-6 w-14 h-14 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all duration-300 z-20 hover:rotate-90 group">
            <i class="fas fa-times text-xl group-hover:text-[#c9a961] transition-colors"></i>
        </button>
        
        {{-- Navigation --}}
        <button @click.stop="prevImage()" 
                class="absolute left-4 md:left-8 w-14 h-14 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all duration-300 hover:scale-110 z-20 group">
            <i class="fas fa-chevron-left text-xl group-hover:text-[#c9a961] transition-colors"></i>
        </button>
        
        <button @click.stop="nextImage()" 
                class="absolute right-4 md:right-8 w-14 h-14 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all duration-300 hover:scale-110 z-20 group">
            <i class="fas fa-chevron-right text-xl group-hover:text-[#c9a961] transition-colors"></i>
        </button>
        
        {{-- Image Container --}}
        <div class="max-w-5xl max-h-[85vh] w-full flex flex-col items-center relative z-10">
            <img :src="filteredImages[currentImage]?.src" 
                 :alt="filteredImages[currentImage]?.caption"
                 class="max-w-full max-h-[75vh] object-contain rounded-2xl shadow-2xl shadow-black/50"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95">
            
            <div class="mt-8 text-center">
                <span class="text-[#c9a961] text-sm font-semibold uppercase tracking-wider" x-text="filteredImages[currentImage]?.category"></span>
                <h3 class="text-white font-bold text-2xl mt-2 font-['Playfair_Display']" x-text="filteredImages[currentImage]?.caption"></h3>
                <p class="text-white/40 text-sm mt-3 flex items-center justify-center gap-3">
                    <span x-text="currentImage + 1"></span>
                    <span class="w-8 h-px bg-white/20"></span>
                    <span x-text="filteredImages.length"></span>
                </p>
            </div>
        </div>
        
        {{-- Thumbnail strip --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-20">
            <template x-for="(img, idx) in filteredImages" :key="idx">
                <button @click.stop="currentImage = idx" 
                        class="w-12 h-12 rounded-lg overflow-hidden border-2 transition-all duration-300"
                        :class="currentImage === idx ? 'border-[#c9a961] scale-110' : 'border-white/20 hover:border-white/40 opacity-50 hover:opacity-100'">
                    <img :src="img.src" class="w-full h-full object-cover">
                </button>
            </template>
        </div>
    </div>
</section>

{{-- ==========================================
     INSTAGRAM FEED SECTION
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white relative overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-purple-500/5 to-pink-500/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-gradient-to-br from-[#c9a961]/5 to-orange-500/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    
    <div class="max-w-6xl mx-auto relative z-10">
        
        {{-- Instagram Header --}}
        <div class="reveal-text text-center mb-14">
            <div class="inline-flex items-center gap-3 mb-6">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 via-pink-500 to-orange-400 flex items-center justify-center shadow-xl shadow-pink-500/20 hover:scale-110 hover:rotate-3 transition-all duration-300 cursor-pointer">
                    <i class="fab fa-instagram text-white text-2xl"></i>
                </div>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e] mb-3">Follow Us on Instagram</h2>
            <a href="https://instagram.com/scottish_restaurant" target="_blank" class="text-[#c9a961] font-semibold hover:underline text-lg inline-flex items-center gap-2 group">
                @scottish_restaurant
                <i class="fas fa-external-link-alt text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            <p class="text-gray-400 text-sm mt-2 flex items-center justify-center gap-4">
                <span class="flex items-center gap-1"><i class="fas fa-users text-[#c9a961]"></i> 12.5K followers</span>
                <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                <span>Daily behind-the-scenes</span>
            </p>
        </div>

        {{-- Instagram Grid --}}
        <div class="grid grid-cols-3 md:grid-cols-6 gap-3 md:gap-4 stagger-children">
            @php
            $instagramPosts = [
                ['https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=400&q=80', '1.2K', '32'],
                ['https://images.unsplash.com/photo-1559339352-11d035aa65de?w=400&q=80', '2.1K', '45'],
                ['https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&q=80', '890', '18'],
                ['https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&q=80', '1.5K', '28'],
                ['https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=400&q=80', '3.2K', '67'],
                ['https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=400&q=80', '1.8K', '41'],
            ];
            @endphp
            
            @foreach($instagramPosts as $index => $ig)
            <div class="group relative aspect-square rounded-xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl hover:shadow-pink-500/10 transition-all duration-500 hover:-translate-y-1">
                <img src="{{ $ig[0] }}" 
                     alt="Instagram post {{ $index + 1 }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                
                {{-- Hover Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e]/80 via-[#4a2a1e]/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center gap-6 text-white">
                    <div class="flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <i class="fas fa-heart text-lg"></i>
                        <span class="font-bold">{{ $ig[1] }}</span>
                    </div>
                    <div class="flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                        <i class="fas fa-comment text-lg"></i>
                        <span class="font-bold">{{ $ig[2] }}</span>
                    </div>
                </div>
                
                {{-- Corner icon --}}
                <div class="absolute top-2 right-2 w-6 h-6 rounded bg-white/20 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fab fa-instagram text-white text-xs"></i>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Follow CTA --}}
        <div class="reveal text-center mt-12">
            <a href="https://instagram.com/scottish_restaurant" target="_blank" 
               class="inline-flex items-center gap-3 bg-gradient-to-r from-purple-600 via-pink-500 to-orange-400 text-white px-8 py-4 rounded-full font-bold hover:shadow-xl hover:shadow-pink-500/30 hover:-translate-y-0.5 transition-all duration-300 group">
                <i class="fab fa-instagram text-xl group-hover:scale-110 transition-transform"></i>
                Follow @scottish_restaurant
                <i class="fas fa-arrow-right text-sm opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
            </a>
        </div>
    </div>
</section>

{{-- ==========================================
     CTA SECTION
     ========================================== --}}
<section class="relative py-24 md:py-32 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[#4a2a1e]"></div>
        <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1200&q=80'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#4a2a1e]/80 via-transparent to-[#4a2a1e]/80"></div>
    </div>
    
    {{-- Floating particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-10">
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[30%] left-[15%] animate-[float_10s_linear_infinite] opacity-30"></div>
        <div class="absolute w-1.5 h-1.5 rounded-full bg-[#c9a961] top-[60%] left-[80%] animate-[float_14s_linear_infinite_2s] opacity-20"></div>
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[45%] left-[50%] animate-[float_12s_linear_infinite_4s] opacity-25"></div>
    </div>
    
    <div class="relative z-20 max-w-4xl mx-auto text-center">
        <div class="reveal-text">
            <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10">
                <i class="fas fa-camera text-[#c9a961] text-3xl"></i>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Come Make Your Own <span class="text-[#c9a961] italic font-['Playfair_Display']">Memories</span>
            </h2>
            <p class="text-white/60 text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed">
                Every visit to Scottish Restaurant is a story worth sharing. Book your table and become part of our gallery.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                    <i class="fas fa-calendar-check"></i>
                    Book a Table
                </x-primary-button>
                <x-primary-button href="{{ route('menu') }}" variant="outline" size="lg">
                    <i class="fas fa-utensils"></i>
                    View Menu
                </x-primary-button>
            </div>
        </div>
    </div>
</section>

@endsection