@extends('layouts.app')

@section('title', 'Karaoke Night')

@section('content')

{{-- ==========================================
     HERO SECTION
     ========================================== --}}
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
    {{-- Background with parallax --}}
    <div class="absolute inset-0 z-0">
        <div id="karaokeParallax" class="absolute inset-0 scale-110 will-change-transform">
            <img src="https://images.unsplash.com/photo-1516280440614-6697288d5d38?w=1920&q=80" 
                 alt="Karaoke stage" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]">
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-[#4a2a1e]/90 via-purple-900/70 to-pink-900/60 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-transparent to-transparent z-10"></div>
    </div>
    
    {{-- Animated particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-20">
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[20%] left-[15%] animate-[float_8s_linear_infinite] opacity-40"></div>
        <div class="absolute w-1.5 h-1.5 rounded-full bg-purple-400 top-[35%] left-[70%] animate-[float_12s_linear_infinite_2s] opacity-30"></div>
        <div class="absolute w-2.5 h-2.5 rounded-full bg-pink-400 top-[60%] left-[25%] animate-[float_10s_linear_infinite_4s] opacity-25"></div>
        <div class="absolute w-1 h-1 rounded-full bg-[#c9a961] top-[45%] left-[85%] animate-[float_14s_linear_infinite_1s] opacity-50"></div>
        <div class="absolute w-2 h-2 rounded-full bg-purple-300 top-[75%] left-[60%] animate-[float_9s_linear_infinite_3s] opacity-35"></div>
    </div>
    
    {{-- Hero Content --}}
    <div class="relative z-30 text-center px-4 max-w-4xl mx-auto">
        <div class="reveal-text mb-6">
            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-xl border border-white/20 rounded-full px-6 py-2.5">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <span class="text-white text-sm font-semibold uppercase tracking-wider">Every Friday Night</span>
            </div>
        </div>
        
        <div class="reveal-text mb-8" style="transition-delay: 100ms;">
            <span class="text-6xl md:text-8xl block mb-4 animate-bounce" style="animation-duration: 2s;">🎤</span>
        </div>
        
        <h1 class="reveal-text text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6 leading-tight" style="transition-delay: 200ms;">
            Karaoke Night<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#c9a961] via-purple-300 to-pink-300 italic font-['Playfair_Display']">Every Friday</span>
        </h1>
        
        <p class="reveal-text text-white/70 text-lg md:text-xl max-w-2xl mx-auto mb-4" style="transition-delay: 300ms;">
            Sing your heart out with friends, family, and fellow music lovers
        </p>
        
        <div class="reveal-text flex items-center justify-center gap-6 text-white/50 mb-10" style="transition-delay: 400ms;">
            <span class="flex items-center gap-2"><i class="fas fa-clock text-[#c9a961]"></i> 8 PM — Midnight</span>
            <span class="w-1 h-1 rounded-full bg-white/30"></span>
            <span class="flex items-center gap-2"><i class="fas fa-ticket-alt text-[#c9a961]"></i> Free Entry</span>
        </div>
        
        <div class="reveal-text flex flex-col sm:flex-row gap-4 justify-center" style="transition-delay: 500ms;">
            <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                <i class="fas fa-calendar-alt"></i>
                Reserve a Table
            </x-primary-button>
            <a href="#songs" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
                <i class="fas fa-music"></i>
                Browse Songs
            </a>
        </div>
    </div>
    
    {{-- Scroll indicator --}}
     <a href="#features" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 group cursor-pointer">
        <div class="flex flex-col items-center gap-2 text-white/30 hover:text-[#c9a961] transition-colors duration-300">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <div class="w-10 h-10 rounded-full border-2 border-white/20 group-hover:border-[#c9a961]/50 flex items-center justify-center transition-all duration-300 group-hover:bg-[#c9a961]/10">
                <i class="fas fa-chevron-down text-[#c9a961] text-sm animate-bounce"></i>
            </div>
        </div>
    </a>
    {{-- Bottom gradient fade --}}
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-[#faf7f0] to-transparent z-30"></div>
</section>

{{-- ==========================================
     INFO GRID
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#faf7f0]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
            
            <div class="group bg-white rounded-2xl p-8 text-center shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-calendar-day text-2xl text-[#c9a961]"></i>
                </div>
                <h3 class="text-[#4a2a1e] font-bold text-lg mb-2">When</h3>
                <p class="text-gray-500 text-sm">Every Friday</p>
                <div class="mt-3 inline-block bg-[#c9a961]/10 text-[#c9a961] text-xs font-bold px-3 py-1 rounded-full">Weekly</div>
            </div>
            
            <div class="group bg-white rounded-2xl p-8 text-center shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-500/5 flex items-center justify-center shadow-lg shadow-purple-500/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-clock text-2xl text-purple-500"></i>
                </div>
                <h3 class="text-[#4a2a1e] font-bold text-lg mb-2">Time</h3>
                <p class="text-gray-500 text-sm">8:00 PM — 12:00 AM</p>
                <div class="mt-3 inline-block bg-purple-500/10 text-purple-600 text-xs font-bold px-3 py-1 rounded-full">4 Hours</div>
            </div>
            
            <div class="group bg-white rounded-2xl p-8 text-center shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-gradient-to-br from-green-500/20 to-green-500/5 flex items-center justify-center shadow-lg shadow-green-500/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-ticket-alt text-2xl text-green-500"></i>
                </div>
                <h3 class="text-[#4a2a1e] font-bold text-lg mb-2">Entry</h3>
                <p class="text-gray-500 text-sm">Completely Free</p>
                <div class="mt-3 inline-block bg-green-500/10 text-green-600 text-xs font-bold px-3 py-1 rounded-full">No Cover</div>
            </div>
            
            <div class="group bg-white rounded-2xl p-8 text-center shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-gradient-to-br from-pink-500/20 to-pink-500/5 flex items-center justify-center shadow-lg shadow-pink-500/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-percent text-2xl text-pink-500"></i>
                </div>
                <h3 class="text-[#4a2a1e] font-bold text-lg mb-2">Special</h3>
                <p class="text-gray-500 text-sm">20% Off Selected Items</p>
                <div class="mt-3 inline-block bg-pink-500/10 text-pink-600 text-xs font-bold px-3 py-1 rounded-full">Food & Drinks</div>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     SONG LIBRARY
     ========================================== --}}
<section id="songs" class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-5xl mx-auto">
        <div class="reveal-text text-center mb-16">
            <span class="text-[#c9a961] text-sm font-semibold uppercase tracking-[0.2em] mb-3 block">500+ Songs</span>
            <h2 class="text-4xl md:text-5xl font-bold text-[#4a2a1e] mb-4">Our <span class="text-[#c9a961] italic font-['Playfair_Display']">Song Library</span></h2>
            <div class="w-20 h-1 bg-gradient-to-r from-transparent via-[#c9a961] to-transparent mx-auto rounded-full"></div>
        </div>
        
        <div class="space-y-4" x-data="{ openCategory: 'pop' }">
            
            {{-- Pop --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300">
                <button @click="openCategory = openCategory === 'pop' ? null : 'pop'" 
                        class="w-full flex items-center justify-between p-6 bg-gradient-to-r from-[#faf7f0] to-white hover:from-[#c9a961]/5 transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500/20 to-purple-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-music text-pink-500 text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-[#4a2a1e] text-lg group-hover:text-[#c9a961] transition-colors">Pop Hits</h3>
                            <p class="text-gray-400 text-sm">120+ songs</p>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-chevron-down text-[#c9a961] transition-transform duration-300" :class="openCategory === 'pop' ? 'rotate-180' : ''"></i>
                    </div>
                </button>
                <div x-show="openCategory === 'pop'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="p-6 pt-0 bg-white">
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Shape of You', 'Blinding Lights', 'Levitating', 'Uptown Funk', 'Rolling in the Deep', 'Bad Romance', 'Shake It Off', 'Stay', 'As It Was', 'Flowers'] as $song)
                            <span class="px-4 py-2.5 bg-[#faf7f0] text-[#4a2a1e] text-sm rounded-full border border-[#4a2a1e]/10 hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:border-[#c9a961] hover:shadow-md hover:shadow-[#c9a961]/20 transition-all duration-300 cursor-pointer select-none">{{ $song }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Rock --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 100ms;">
                <button @click="openCategory = openCategory === 'rock' ? null : 'rock'" 
                        class="w-full flex items-center justify-between p-6 bg-gradient-to-r from-[#faf7f0] to-white hover:from-[#c9a961]/5 transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-red-500/20 to-orange-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-guitar text-red-500 text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-[#4a2a1e] text-lg group-hover:text-[#c9a961] transition-colors">Rock Classics</h3>
                            <p class="text-gray-400 text-sm">90+ songs</p>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-chevron-down text-[#c9a961] transition-transform duration-300" :class="openCategory === 'rock' ? 'rotate-180' : ''"></i>
                    </div>
                </button>
                <div x-show="openCategory === 'rock'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="p-6 pt-0 bg-white">
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Bohemian Rhapsody', 'Hotel California', 'Sweet Child O\' Mine', 'Living on a Prayer', 'We Will Rock You', 'Smells Like Teen Spirit', 'Wonderwall', 'Creep', 'Seven Nation Army', 'Mr. Brightside'] as $song)
                            <span class="px-4 py-2.5 bg-[#faf7f0] text-[#4a2a1e] text-sm rounded-full border border-[#4a2a1e]/10 hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:border-[#c9a961] hover:shadow-md hover:shadow-[#c9a961]/20 transition-all duration-300 cursor-pointer select-none">{{ $song }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Classics --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 200ms;">
                <button @click="openCategory = openCategory === 'classics' ? null : 'classics'" 
                        class="w-full flex items-center justify-between p-6 bg-gradient-to-r from-[#faf7f0] to-white hover:from-[#c9a961]/5 transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#c9a961]/20 to-amber-600/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-compact-disc text-[#c9a961] text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-[#4a2a1e] text-lg group-hover:text-[#c9a961] transition-colors">Timeless Classics</h3>
                            <p class="text-gray-400 text-sm">80+ songs</p>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-chevron-down text-[#c9a961] transition-transform duration-300" :class="openCategory === 'classics' ? 'rotate-180' : ''"></i>
                    </div>
                </button>
                <div x-show="openCategory === 'classics'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="p-6 pt-0 bg-white">
                        <div class="flex flex-wrap gap-2">
                            @foreach(['My Way', 'Imagine', 'What a Wonderful World', 'Unchained Melody', 'I Will Always Love You', 'Yesterday', 'Stand By Me', 'Can\'t Help Falling in Love', 'The Way You Look Tonight', 'Fly Me to the Moon'] as $song)
                            <span class="px-4 py-2.5 bg-[#faf7f0] text-[#4a2a1e] text-sm rounded-full border border-[#4a2a1e]/10 hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:border-[#c9a961] hover:shadow-md hover:shadow-[#c9a961]/20 transition-all duration-300 cursor-pointer select-none">{{ $song }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Arabic --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 300ms;">
                <button @click="openCategory = openCategory === 'arabic' ? null : 'arabic'" 
                        class="w-full flex items-center justify-between p-6 bg-gradient-to-r from-[#faf7f0] to-white hover:from-[#c9a961]/5 transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500/20 to-emerald-600/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-star-and-crescent text-green-600 text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-[#4a2a1e] text-lg group-hover:text-[#c9a961] transition-colors">Arabic Hits</h3>
                            <p class="text-gray-400 text-sm">100+ songs</p>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-chevron-down text-[#c9a961] transition-transform duration-300" :class="openCategory === 'arabic' ? 'rotate-180' : ''"></i>
                    </div>
                </button>
                <div x-show="openCategory === 'arabic'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="p-6 pt-0 bg-white">
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Allah Allah Ya Baba', 'Lm3allem', '3 Daqat', 'Nour El Ain', 'Tamally Maak', 'Awel Marra', 'Mosh Bel Kalam', 'Habibi Ya Nour El Ain', 'Lama Bdomik', 'Aicha'] as $song)
                            <span class="px-4 py-2.5 bg-[#faf7f0] text-[#4a2a1e] text-sm rounded-full border border-[#4a2a1e]/10 hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:border-[#c9a961] hover:shadow-md hover:shadow-[#c9a961]/20 transition-all duration-300 cursor-pointer select-none">{{ $song }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- French --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 400ms;">
                <button @click="openCategory = openCategory === 'french' ? null : 'french'" 
                        class="w-full flex items-center justify-between p-6 bg-gradient-to-r from-[#faf7f0] to-white hover:from-[#c9a961]/5 transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/20 to-indigo-600/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-wine-glass-alt text-blue-500 text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-[#4a2a1e] text-lg group-hover:text-[#c9a961] transition-colors">French Chansons</h3>
                            <p class="text-gray-400 text-sm">60+ songs</p>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-chevron-down text-[#c9a961] transition-transform duration-300" :class="openCategory === 'french' ? 'rotate-180' : ''"></i>
                    </div>
                </button>
                <div x-show="openCategory === 'french'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[500px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[500px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="p-6 pt-0 bg-white">
                        <div class="flex flex-wrap gap-2">
                            @foreach(['La Vie en Rose', 'Ne Me Quitte Pas', 'Je T\'aime', 'Les Champs-Élysées', 'Non, Je Ne Regrette Rien', 'La Bohème', 'Sous le Ciel de Paris', 'L\'Aventurier', 'Femme Like U', 'Savoir Aimer'] as $song)
                            <span class="px-4 py-2.5 bg-[#faf7f0] text-[#4a2a1e] text-sm rounded-full border border-[#4a2a1e]/10 hover:bg-[#c9a961] hover:text-[#4a2a1e] hover:border-[#c9a961] hover:shadow-md hover:shadow-[#c9a961]/20 transition-all duration-300 cursor-pointer select-none">{{ $song }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Song Request Form --}}
        <div class="reveal mt-12 bg-gradient-to-br from-[#4a2a1e] to-[#2c1812] rounded-2xl p-8 text-white shadow-xl shadow-[#4a2a1e]/20 relative overflow-hidden">
            {{-- Subtle pattern --}}
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
            
            <div class="relative flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-bold mb-2">Can't Find Your Song?</h3>
                    <p class="text-white/50 text-sm">Request it and we'll add it to our library before your visit.</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                    <input type="text" placeholder="Song name" class="px-5 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 transition-all backdrop-blur-sm">
                    <input type="text" placeholder="Artist" class="px-5 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 transition-all backdrop-blur-sm">
                    <button type="button" class="px-6 py-3 bg-[#c9a961] text-[#4a2a1e] rounded-xl font-bold hover:bg-[#b8984f] transition-all duration-300 shadow-lg shadow-[#c9a961]/20 hover:shadow-xl hover:shadow-[#c9a961]/30 whitespace-nowrap">
                        Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     PHOTO HIGHLIGHTS
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#faf7f0]">
    <div class="max-w-6xl mx-auto">
        <div class="reveal-text text-center mb-16">
            <span class="text-[#c9a961] text-sm font-semibold uppercase tracking-[0.2em] mb-3 block">Moments</span>
            <h2 class="text-4xl md:text-5xl font-bold text-[#4a2a1e] mb-4">Karaoke <span class="text-[#c9a961] italic font-['Playfair_Display']">Memories</span></h2>
            <div class="w-20 h-1 bg-gradient-to-r from-transparent via-[#c9a961] to-transparent mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 stagger-children">
            @foreach([
                ['https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=400&q=80', 'Friday Night Vibes'],
                ['https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&q=80', 'Live Performance'],
                ['https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400&q=80', 'The Stage'],
                ['https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=400&q=80', 'Crowd Cheers'],
                ['https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400&q=80', 'DJ Setup'],
                ['https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=400&q=80', 'Group Fun'],
                ['https://images.unsplash.com/photo-1499364615650-ec38552f4f34?w=400&q=80', 'Microphone Ready'],
                ['https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400&q=80', 'Sing Along'],
            ] as $index => $photo)
            <div class="group relative aspect-square rounded-2xl overflow-hidden cursor-pointer shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 transition-all duration-500">
                <img src="{{ $photo[0] }}" 
                     alt="{{ $photo[1] }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e]/90 via-[#4a2a1e]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-5">
                    <span class="text-white font-semibold text-sm">{{ $photo[1] }}</span>
                </div>
                <div class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 group-hover:scale-100 scale-75">
                    <i class="fas fa-expand text-white text-xs"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==========================================
     SIGN-UP / CTA SECTION
     ========================================== --}}
<section class="relative py-24 md:py-32 px-4 sm:px-6 lg:px-8 overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-[#4a2a1e] via-purple-900/50 to-[#4a2a1e]"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    {{-- Particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-10">
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[30%] left-[20%] animate-[float_10s_linear_infinite] opacity-30"></div>
        <div class="absolute w-1.5 h-1.5 rounded-full bg-purple-400 top-[50%] left-[75%] animate-[float_14s_linear_infinite_3s] opacity-20"></div>
        <div class="absolute w-2 h-2 rounded-full bg-pink-400 top-[70%] left-[40%] animate-[float_12s_linear_infinite_1s] opacity-25"></div>
    </div>
    
    <div class="relative z-20 max-w-4xl mx-auto text-center">
        <div class="reveal-text">
            <span class="text-5xl mb-6 block">🎤</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Ready to Take the <span class="text-[#c9a961] italic font-['Playfair_Display']">Stage</span>?
            </h2>
            <p class="text-white/60 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                Tables fill up fast on Friday nights. Reserve yours now and get the best spot near the stage.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                    <i class="fas fa-calendar-check"></i>
                    Book a Table for Friday
                </x-primary-button>
                <a href="tel:0794388936" class="inline-flex items-center justify-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all duration-300 text-lg backdrop-blur-sm">
                    <i class="fas fa-phone"></i>
                    0794 38 89 36
                </a>
            </div>
            
            <p class="text-white/40 text-sm">Walk-ins welcome, but reservations guarantee your spot</p>
        </div>
    </div>
</section>

{{-- ==========================================
     FAQ SECTION
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-3xl mx-auto">
        <div class="reveal-text text-center mb-16">
            <span class="text-[#c9a961] text-sm font-semibold uppercase tracking-[0.2em] mb-3 block">FAQ</span>
            <h2 class="text-4xl md:text-5xl font-bold text-[#4a2a1e] mb-4">Frequently Asked <span class="text-[#c9a961] italic font-['Playfair_Display']">Questions</span></h2>
            <div class="w-20 h-1 bg-gradient-to-r from-transparent via-[#c9a961] to-transparent mx-auto rounded-full"></div>
        </div>
        
        <div class="space-y-4" x-data="{ openFaq: null }">
            
            {{-- FAQ 1 --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300">
                <button @click="openFaq = openFaq === 1 ? null : 1" 
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-[#faf7f0] transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-[#c9a961]/10 flex items-center justify-center flex-shrink-0 group-hover:bg-[#c9a961] transition-colors duration-300">
                            <span class="text-[#c9a961] font-bold group-hover:text-[#4a2a1e] transition-colors duration-300">1</span>
                        </div>
                        <h3 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">Do I need to sing?</h3>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-plus text-[#c9a961] text-xs transition-transform duration-300" :class="openFaq === 1 ? 'rotate-45' : ''"></i>
                    </div>
                </button>
                <div x-show="openFaq === 1" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[300px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[300px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="px-6 pb-6 pl-20">
                        <p class="text-gray-600 leading-relaxed">Not at all! Many guests come just to enjoy the atmosphere, great food, and cheer on their friends. There's no pressure to perform — though we promise the crowd is always supportive if you do decide to grab the mic!</p>
                    </div>
                </div>
            </div>
            
            {{-- FAQ 2 --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 100ms;">
                <button @click="openFaq = openFaq === 2 ? null : 2" 
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-[#faf7f0] transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-[#c9a961]/10 flex items-center justify-center flex-shrink-0 group-hover:bg-[#c9a961] transition-colors duration-300">
                            <span class="text-[#c9a961] font-bold group-hover:text-[#4a2a1e] transition-colors duration-300">2</span>
                        </div>
                        <h3 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">Can I bring friends?</h3>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-plus text-[#c9a961] text-xs transition-transform duration-300" :class="openFaq === 2 ? 'rotate-45' : ''"></i>
                    </div>
                </button>
                <div x-show="openFaq === 2" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[300px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[300px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="px-6 pb-6 pl-20">
                        <p class="text-gray-600 leading-relaxed">Absolutely! Karaoke is better with friends. We recommend booking a table for your group in advance, especially for parties of 6 or more. Large groups get priority seating near the stage.</p>
                    </div>
                </div>
            </div>
            
            {{-- FAQ 3 --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 200ms;">
                <button @click="openFaq = openFaq === 3 ? null : 3" 
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-[#faf7f0] transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-[#c9a961]/10 flex items-center justify-center flex-shrink-0 group-hover:bg-[#c9a961] transition-colors duration-300">
                            <span class="text-[#c9a961] font-bold group-hover:text-[#4a2a1e] transition-colors duration-300">3</span>
                        </div>
                        <h3 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">Is there a dress code?</h3>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-plus text-[#c9a961] text-xs transition-transform duration-300" :class="openFaq === 3 ? 'rotate-45' : ''"></i>
                    </div>
                </button>
                <div x-show="openFaq === 3" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[300px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[300px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="px-6 pb-6 pl-20">
                        <p class="text-gray-600 leading-relaxed">Come as you are! Smart casual is the norm, but we welcome everyone — from those in their Friday best to guests in comfortable jeans. The only requirement is a love for good music and great food.</p>
                    </div>
                </div>
            </div>
            
            {{-- FAQ 4 --}}
            <div class="reveal border border-[#4a2a1e]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-shadow duration-300" style="transition-delay: 300ms;">
                <button @click="openFaq = openFaq === 4 ? null : 4" 
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-[#faf7f0] transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-[#c9a961]/10 flex items-center justify-center flex-shrink-0 group-hover:bg-[#c9a961] transition-colors duration-300">
                            <span class="text-[#c9a961] font-bold group-hover:text-[#4a2a1e] transition-colors duration-300">4</span>
                        </div>
                        <h3 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">How do I reserve a table for karaoke?</h3>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-[#faf7f0] flex items-center justify-center group-hover:bg-[#c9a961]/10 transition-colors">
                        <i class="fas fa-plus text-[#c9a961] text-xs transition-transform duration-300" :class="openFaq === 4 ? 'rotate-45' : ''"></i>
                    </div>
                </button>
                <div x-show="openFaq === 4" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-[300px]"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 max-h-[300px]"
                     x-transition:leave-end="opacity-0 max-h-0"
                     class="overflow-hidden"
                     style="display: none;">
                    <div class="px-6 pb-6 pl-20">
                        <p class="text-gray-600 leading-relaxed">Simply book online through our reservation page and mention "Karaoke Night" in the special requests, or call us directly at <a href="tel:0794388936" class="text-[#c9a961] font-semibold hover:underline">0794 38 89 36</a>. We recommend booking at least 2 days in advance for Friday nights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection