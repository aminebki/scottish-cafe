<nav x-data="{ open: false, scrolled: false, hidden: false, lastScroll: 100000000 }" 
     @scroll.window="scrolled = (window.pageYOffset > 50); hidden = (window.pageYOffset > lastScroll && window.pageYOffset > 100); lastScroll = window.pageYOffset"
     :class="scrolled ? 'bg-[#4a2a1e]/90 backdrop-blur-xl shadow-2xl py-3' : 'bg-transparent py-5'"
       class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 will-change-transform"
     :style="hidden ? 'transform: translateY(-100%)' : 'transform: translateY(0)'"
     x-cloak>
    
    {{-- Scroll Progress Bar --}}
    <div class="absolute bottom-0 left-0 h-0.5 bg-[#c9a961] transition-all duration-100" 
         :style="'width: ' + (lastScroll / (document.documentElement.scrollHeight - window.innerHeight) * 100) + '%'"
         x-show="scrolled"
         x-transition.opacity.duration.300ms></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            
            {{-- Logo with hover animation --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="relative w-11 h-11">
                    <div class="absolute inset-0 rounded-full bg-[#c9a961] group-hover:scale-110 transition-transform duration-500"></div>
                    <div class="absolute inset-0 rounded-full bg-[#4a2a1e] scale-0 group-hover:scale-100 transition-transform duration-500 delay-100"></div>
                    <span class="absolute inset-0 flex items-center justify-center text-[#4a2a1e] font-bold text-lg font-['Playfair_Display'] group-hover:text-[#c9a961] transition-colors duration-500 delay-100 z-10">S</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-[#c9a961] font-['Playfair_Display'] text-xl md:text-2xl font-bold leading-tight group-hover:tracking-wider transition-all duration-300">Scottish</span>
                    <span class="text-white/50 text-xs tracking-[0.25em] uppercase -mt-0.5 group-hover:text-white/80 transition-colors duration-300">Restaurant</span>
                </div>
            </a>
            
            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-1">
                @foreach([
                    ['home', 'Home'],
                    ['menu', 'Menu'],
                    ['gallery', 'Gallery'],
                    ['karaoke', 'Karaoke'],
                    ['contact', 'Contact']
                ] as [$route, $label])
                <a href="{{ route($route) }}" 
                   class="relative px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 group {{ request()->routeIs($route) ? 'text-[#c9a961]' : 'text-white/60 hover:text-white' }}">
                    {{ $label }}
                    {{-- Active indicator --}}
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-[#c9a961] transition-all duration-300 {{ request()->routeIs($route) ? 'opacity-100 scale-100' : 'opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100' }}"></span>
                </a>
                @endforeach
                
                <a href="{{ route('reservation') }}" 
                   class="magnetic-btn ml-4 bg-[#c9a961] text-[#4a2a1e] px-7 py-2.5 rounded-full text-sm font-bold hover:bg-[#b8984f] transition-all duration-300 shadow-lg shadow-[#c9a961]/20 hover:shadow-xl hover:shadow-[#c9a961]/30 relative overflow-hidden group">
                    <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></span>
                    <span class="relative flex items-center gap-2">
                        <i class="fas fa-calendar-check text-xs"></i>
                        Book a Table
                    </span>
                </a>
            </div>
            
            {{-- Mobile Hamburger --}}
            <button @click="open = !open" 
                    class="lg:hidden text-white p-2 rounded-xl hover:bg-white/10 transition-colors relative w-10 h-10 flex items-center justify-center"
                    aria-label="Toggle menu">
                <span class="absolute w-5 h-0.5 bg-current transition-all duration-300" :class="open ? 'rotate-45' : '-translate-y-1.5'"></span>
                <span class="absolute w-5 h-0.5 bg-current transition-all duration-300" :class="open ? 'opacity-0 scale-0' : ''"></span>
                <span class="absolute w-5 h-0.5 bg-current transition-all duration-300" :class="open ? '-rotate-45' : 'translate-y-1.5'"></span>
            </button>
        </div>
    </div>
    
    {{-- Mobile Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden absolute top-full left-0 right-0 bg-[#4a2a1e]/98 backdrop-blur-xl border-t border-white/10 shadow-2xl"
         style="display: none;">
        <div class="px-6 py-8 space-y-1">
            @foreach([
                ['home', 'Home', 'fa-home'],
                ['menu', 'Menu', 'fa-utensils'],
                ['gallery', 'Gallery', 'fa-images'],
                ['karaoke', 'Karaoke', 'fa-microphone'],
                ['contact', 'Contact', 'fa-envelope']
            ] as [$route, $label, $icon])
            <a href="{{ route($route) }}" 
               class="flex items-center gap-4 px-4 py-4 rounded-xl text-white transition-all {{ request()->routeIs($route) ? 'bg-[#c9a961]/20 text-[#c9a961]' : 'hover:bg-white/5' }}"
               @click="open = false">
                <i class="fas {{ $icon }} w-5 text-center"></i>
                <span class="font-medium">{{ $label }}</span>
                @if(request()->routeIs($route))
                <i class="fas fa-chevron-right ml-auto text-xs text-[#c9a961]"></i>
                @endif
            </a>
            @endforeach
            
            <a href="{{ route('reservation') }}" 
               class="block mt-6 bg-[#c9a961] text-[#4a2a1e] px-4 py-4 rounded-xl text-center font-bold flex items-center justify-center gap-2"
               @click="open = false">
                <i class="fas fa-calendar-check"></i>
                Book a Table
            </a>
        </div>
    </div>
</nav>