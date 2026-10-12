@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- ==========================================
     PREMIUM HERO SECTION
     ========================================== --}}
<section class="relative flex items-center justify-center overflow-hidden pt-0 pb-20 md:pb-16 min-h-screen">

    {{-- Background Image Layer --}}
     <div class="absolute inset-0 z-0 overflow-hidden">
        <div id="heroParallax" class="absolute -inset-[10%] will-change-transform min-h-[120%]">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920&q=80" 
                 alt="Scottish Restaurant Interior" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]"
                 onerror="this.src='https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1920&q=80'">
        </div>
        {{-- Gradient overlays --}}
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-[#4a2a1e]/70 to-[#4a2a1e]/60 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#4a2a1e]/90 via-transparent to-transparent z-10"></div>
    </div>
    
    {{-- Floating particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-10">
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[20%] left-[10%] animate-[float_8s_linear_infinite] opacity-30"></div>
        <div class="absolute w-1 h-1 rounded-full bg-[#c9a961] top-[40%] left-[80%] animate-[float_12s_linear_infinite_2s] opacity-50"></div>
        <div class="absolute w-3 h-3 rounded-full bg-[#c9a961] top-[60%] left-[30%] animate-[float_10s_linear_infinite_4s] opacity-20"></div>
        <div class="absolute w-1.5 h-1.5 rounded-full bg-[#c9a961] top-[30%] left-[60%] animate-[float_14s_linear_infinite_1s] opacity-40"></div>
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[70%] left-[70%] animate-[float_9s_linear_infinite_3s] opacity-30"></div>
    </div>
    
    {{-- Floating Karaoke Badge --}}
    <div class="absolute top-28 right-4 md:right-12 lg:right-20 z-20">
        <a href="{{ route('karaoke') }}" 
           class="group flex items-center gap-3 bg-[#4a2a1e]/70 backdrop-blur-xl border border-[#c9a961]/20 rounded-full px-6 py-3.5 hover:bg-[#4a2a1e]/90 transition-all duration-500 hover:scale-105 hover:shadow-lg hover:shadow-[#c9a961]/20">
            <span class="text-2xl animate-pulse">🎤</span>
            <div class="text-left">
                <div class="text-[#c9a961] text-xs font-bold uppercase tracking-wider">Karaoke Fridays</div>
                <div class="text-white/60 text-xs">From 8 PM • Free Entry</div>
            </div>
            <i class="fas fa-arrow-right text-[#c9a961] text-xs opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300"></i>
        </a>
    </div>
    
    {{-- Hero Content --}}
      <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left w-full pt-28 md:pt-32 pb-8">
        <div class="max-w-3xl">
            {{-- Pre-title --}}
            <div class="reveal-text mb-6">
                <span class="inline-flex items-center gap-3 text-[#c9a961] text-sm font-semibold uppercase tracking-[0.3em] border border-[#c9a961]/30 rounded-full px-5 py-2.5 bg-white/10 backdrop-blur-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#c9a961] animate-pulse"></span>
                    Since 2010 • Family Owned & Operated
                </span>
            </div>
            
            {{-- Main headline --}}
            <h1 class="reveal-text text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white font-bold leading-[0.9] mb-8" style="transition-delay: 100ms;">
                Scottish<br>
                <span class="text-[#c9a961] italic font-['Playfair_Display']">Restaurant</span>
            </h1>
            
            {{-- Subheadline --}}
            <p class="reveal-text text-xl md:text-2xl lg:text-3xl text-white/80 mb-3 font-['Playfair_Display'] italic" style="transition-delay: 200ms;">
                Pizza au feu de bois & Café
            </p>
            
            <p class="reveal-text text-base md:text-lg text-white/50 mb-12 max-w-lg leading-relaxed" style="transition-delay: 300ms;">
                Authentic wood-fired pizza in the heart of Val d'Hydra. Where family tradition meets culinary excellence since 2010.
            </p>
            
            {{-- CTA Buttons --}}
             <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start animate-[fadeInUp_0.8s_ease_0.6s_both]">
                <x-primary-button href="{{ route('menu') }}" variant="solid" size="lg">
                    <i class="fas fa-utensils"></i>
                    View Our Menu
                </x-primary-button>
                <x-primary-button href="{{ route('reservation') }}" variant="outline" size="lg">
                    <i class="fas fa-calendar-check"></i>
                    Book a Table
                </x-primary-button>
            </div>
            
            {{-- Trust badges --}}
            <div class="reveal-text mt-12 flex flex-wrap items-center gap-6 text-white/30 text-sm" style="transition-delay: 500ms;">
                <span class="flex items-center gap-2">
                    <i class="fas fa-star text-[#c9a961]"></i>
                    4.9 Rating
                </span>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <span>50,000+ Happy Guests</span>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <span>Val d'Hydra, Algiers</span>
            </div>
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
    </section>

{{-- Clean hard edge --}}
<div class="h-0.5 bg-[#c9a961]/30 relative z-20"></div>
{{-- ==========================================
     FEATURES SECTION
     ========================================== --}}
<section id="features" class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] relative">
    {{-- Decorative background pattern --}}
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-[#4a2a1e]/5 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <x-section-title 
            title="What Makes Us <span class='text-[#c9a961]'>Special</span>" 
            subtitle="Our Promise" 
        />
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Feature 1 --}}
            <div class="fade-up group bg-white rounded-2xl p-8 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-4xl">🔥</span>
                </div>
                <h3 class="text-xl font-bold text-[#4a2a1e] mb-3">Wood-Fired Excellence</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Our traditional wood-fired oven reaches 450°C, giving every pizza that perfect charred crust and smoky flavor you can't replicate.
                </p>
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 text-[#c9a961] font-semibold text-sm hover:gap-3 transition-all duration-300">
                    Explore Our Pizzas <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            
            {{-- Feature 2 --}}
            <div class="fade-up group bg-white rounded-2xl p-8 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500" style="transition-delay: 150ms;">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-500/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-4xl">🎤</span>
                </div>
                <h3 class="text-xl font-bold text-[#4a2a1e] mb-3">Live Karaoke Nights</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Every Friday, transform your dinner into a concert. Free entry, great food, and unforgettable memories with friends and family.
                </p>
                <a href="{{ route('karaoke') }}" class="inline-flex items-center gap-2 text-[#c9a961] font-semibold text-sm hover:gap-3 transition-all duration-300">
                    Learn More <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            
            {{-- Feature 3 --}}
            <div class="fade-up group bg-white rounded-2xl p-8 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500" style="transition-delay: 300ms;">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-700/20 to-amber-700/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-4xl">☕</span>
                </div>
                <h3 class="text-xl font-bold text-[#4a2a1e] mb-3">Premium Coffee</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Sourced from the finest beans, our baristas craft each cup with precision. From rich espresso to creamy latte art perfection.
                </p>
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 text-[#c9a961] font-semibold text-sm hover:gap-3 transition-all duration-300">
                    See Our Drinks <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     ABOUT SECTION (Split Layout)
     ========================================== --}}
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            {{-- Left: Image --}}
            <div class="fade-up relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-[#4a2a1e]/20">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=800&q=80" 
                         alt="Chef preparing wood-fired pizza at Scottish Restaurant" 
                         class="w-full h-[500px] md:h-[600px] object-cover hover:scale-105 transition-transform duration-700">
                    
                    {{-- Experience Badge --}}
                    <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm rounded-2xl p-5 shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-[#c9a961] flex items-center justify-center">
                                <span class="text-[#4a2a1e] font-bold text-xl">15</span>
                            </div>
                            <div>
                                <div class="text-[#4a2a1e] font-bold text-lg">Years of</div>
                                <div class="text-[#c9a961] font-semibold">Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Decorative element --}}
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-[#c9a961]/10 rounded-full -z-10"></div>
                <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-[#4a2a1e]/5 rounded-full -z-10"></div>
            </div>
            
            {{-- Right: Content --}}
            <div class="fade-up" style="transition-delay: 200ms;">
                <x-section-title 
                    title="A Family Story Written in <span class='text-[#c9a961]'>Flame</span>" 
                    subtitle="About Us" 
                    alignment="left"
                />
                
                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <p class="text-lg">
                        Founded in <span class="text-[#4a2a1e] font-semibold">2010</span> by the Scottish family, our restaurant began as a small corner café with a dream: to bring authentic Italian wood-fired pizza to the heart of Algiers.
                    </p>
                    
                    <p>
                        What started as a humble kitchen has grown into Val d'Hydra's most beloved dining destination. Our secret? We never compromise. Every pizza is hand-stretched, every sauce is made from San Marzano tomatoes, and our wood-fired oven has been burning since day one.
                    </p>
                    
                    <div class="bg-[#faf7f0] rounded-xl p-6 border-l-4 border-[#c9a961]">
                        <p class="italic text-[#4a2a1e] font-['Playfair_Display'] text-lg">
                            "We don't just make pizza — we craft experiences that bring families together around the table."
                        </p>
                        <p class="text-sm text-gray-400 mt-2">— The Scottish Family</p>
                    </div>
                    
                    <p>
                        Our signature <span class="text-[#c9a961] font-semibold">Pizza au feu de bois</span> has become a local legend, drawing food lovers from across Algiers who crave that unmistakable smoky char and perfectly blistered crust.
                    </p>
                </div>
                
                <div class="mt-8 flex flex-wrap gap-4">
                    <x-primary-button href="{{ route('menu') }}" variant="solid">
                        Discover Our Story
                    </x-primary-button>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-[#4a2a1e] font-semibold hover:text-[#c9a961] transition-colors">
                        <i class="fas fa-play-circle"></i>
                        Watch Our Story
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     MENU PREVIEW SECTION
     ========================================== --}}
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] relative">
    <div class="max-w-7xl mx-auto">
        <x-section-title 
            title="Signature <span class='text-[#c9a961]'>Dishes</span>" 
            subtitle="From Our Kitchen" 
        />
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Dish 1 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=600&q=80" 
                         alt="Pizza Margherita" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-[#c9a961] text-[#4a2a1e] px-3 py-1 rounded-full text-xs font-bold">
                        Popular
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Margherita Classica</h3>
                        <span class="text-[#c9a961] font-bold text-lg">850 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">San Marzano tomatoes, fresh mozzarella, basil, extra virgin olive oil</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span class="flex items-center gap-1"><i class="fas fa-leaf text-green-500"></i> Vegetarian</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>⏱ 12 min</span>
                    </div>
                </div>
            </div>
            
            {{-- Dish 2 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500" style="transition-delay: 100ms;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?w=600&q=80" 
                         alt="Pepperoni Pizza" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Pepperoni Piccante</h3>
                        <span class="text-[#c9a961] font-bold text-lg">1,100 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Spicy pepperoni, mozzarella, tomato sauce, chili flakes</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span class="flex items-center gap-1"><i class="fas fa-pepper-hot text-red-500"></i> Spicy</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>⏱ 15 min</span>
                    </div>
                </div>
            </div>
            
            {{-- Dish 3 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500" style="transition-delay: 200ms;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600&q=80" 
                         alt="Quattro Formaggi" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-[#4a2a1e] text-[#c9a961] px-3 py-1 rounded-full text-xs font-bold">
                        Chef's Special
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Quattro Formaggi</h3>
                        <span class="text-[#c9a961] font-bold text-lg">1,250 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Mozzarella, gorgonzola, parmesan, goat cheese, honey drizzle</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span class="flex items-center gap-1"><i class="fas fa-leaf text-green-500"></i> Vegetarian</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>⏱ 14 min</span>
                    </div>
                </div>
            </div>
            
            {{-- Dish 4 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500" style="transition-delay: 300ms;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600&q=80" 
                         alt="Scottish Special" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Scottish Special</h3>
                        <span class="text-[#c9a961] font-bold text-lg">1,400 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Local merguez, roasted peppers, harissa, fresh herbs</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span class="flex items-center gap-1"><i class="fas fa-pepper-hot text-red-500"></i> Spicy</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>⏱ 16 min</span>
                    </div>
                </div>
            </div>
            
            {{-- Dish 5 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500" style="transition-delay: 400ms;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1604382354936-7c7e0eff4b79?w=600&q=80" 
                         alt="Pasta Carbonara" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Pasta Carbonara</h3>
                        <span class="text-[#c9a961] font-bold text-lg">1,200 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Guanciale, egg yolk, pecorino romano, black pepper</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span>⏱ 18 min</span>
                    </div>
                </div>
            </div>
            
            {{-- Dish 6 --}}
            <div class="fade-up group bg-white rounded-2xl overflow-hidden shadow-lg shadow-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/15 transition-all duration-500" style="transition-delay: 500ms;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?w=600&q=80" 
                         alt="Tiramisu" 
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-[#c9a961] text-[#4a2a1e] px-3 py-1 rounded-full text-xs font-bold">
                        Popular
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-[#4a2a1e]">Classic Tiramisu</h3>
                        <span class="text-[#c9a961] font-bold text-lg">650 DA</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-4">Mascarpone, espresso-soaked ladyfingers, cocoa dust</p>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span class="flex items-center gap-1"><i class="fas fa-leaf text-green-500"></i> Vegetarian</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>⏱ 5 min</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <x-primary-button href="{{ route('menu') }}" variant="solid" size="lg">
                See Full Menu
                <i class="fas fa-arrow-right"></i>
            </x-primary-button>
        </div>
    </div>
</section>

{{-- ==========================================
     STATS/TRUST SECTION
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#4a2a1e] relative overflow-hidden">
    {{-- Background pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#c9a961] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#c9a961] rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-6xl mx-auto relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
            <x-stat-card number="15+" label="Years of Excellence" icon="fas fa-award" delay="0" />
            <x-stat-card number="50K+" label="Happy Customers" icon="fas fa-users" delay="150" />
            <x-stat-card number="100%" label="Fresh Ingredients" icon="fas fa-leaf" delay="300" />
        </div>
    </div>
</section>

{{-- ==========================================
     TESTIMONIALS CAROUSEL
     ========================================== --}}
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-white relative" x-data="{ active: 0 }">
    <div class="max-w-6xl mx-auto">
        <x-section-title 
            title="What Our <span class='text-[#c9a961]'>Guests</span> Say" 
            subtitle="Testimonials" 
        />
        
        {{-- Desktop: Grid of 3 --}}
        <div class="hidden md:grid grid-cols-3 gap-8">
            <x-testimonial-card 
                quote="The best pizza I've had outside of Naples. The wood-fired crust is absolutely perfect — crispy outside, soft inside. We drive 40 minutes just for this!" 
                name="Karim B." 
                date="March 2024" 
                rating="5" 
            />
            <x-testimonial-card 
                quote="Karaoke night is our weekly tradition! Great food, amazing atmosphere, and the staff treats us like family. The Scottish Special pizza is a must-try." 
                name="Amel D." 
                date="February 2024" 
                rating="5" 
            />
            <x-testimonial-card 
                quote="Finally found a place in Algiers that serves authentic Italian coffee. Their cappuccino rivals anything I had in Rome. The ambiance is warm and inviting." 
                name="Youssef M." 
                date="January 2024" 
                rating="5" 
            />
        </div>
        
        {{-- Mobile: Carousel --}}
        <div class="md:hidden relative">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500" :style="'transform: translateX(-' + (active * 100) + '%)'">
                    
                    <div class="w-full flex-shrink-0 px-2">
                        <x-testimonial-card 
                            quote="The best pizza I've had outside of Naples. The wood-fired crust is absolutely perfect!" 
                            name="Karim B." 
                            date="March 2024" 
                            rating="5" 
                        />
                    </div>
                    
                    <div class="w-full flex-shrink-0 px-2">
                        <x-testimonial-card 
                            quote="Karaoke night is our weekly tradition! Great food, amazing atmosphere." 
                            name="Amel D." 
                            date="February 2024" 
                            rating="5" 
                        />
                    </div>
                    
                    <div class="w-full flex-shrink-0 px-2">
                        <x-testimonial-card 
                            quote="Finally found a place in Algiers that serves authentic Italian coffee." 
                            name="Youssef M." 
                            date="January 2024" 
                            rating="5" 
                        />
                    </div>
                </div>
            </div>
            
            {{-- Dots --}}
            <div class="flex justify-center gap-2 mt-6">
                <button @click="active = 0" class="w-3 h-3 rounded-full transition-all duration-300" :class="active === 0 ? 'bg-[#c9a961] w-8' : 'bg-gray-300'"></button>
                <button @click="active = 1" class="w-3 h-3 rounded-full transition-all duration-300" :class="active === 1 ? 'bg-[#c9a961] w-8' : 'bg-gray-300'"></button>
                <button @click="active = 2" class="w-3 h-3 rounded-full transition-all duration-300" :class="active === 2 ? 'bg-[#c9a961] w-8' : 'bg-gray-300'"></button>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     KARAOKE PROMO BANNER
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-r from-[#4a2a1e] via-[#5a3a2e] to-[#4a2a1e]"></div>
    <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1516280440614-6697288d5d38?w=1200&q=80'); background-size: cover; background-position: center;"></div>
    
    <div class="max-w-5xl mx-auto relative text-center">
        <div class="fade-up">
            <div class="inline-flex items-center gap-3 bg-[#c9a961]/20 backdrop-blur-sm border border-[#c9a961]/30 rounded-full px-6 py-3 mb-8">
                <span class="text-3xl animate-pulse">🎤</span>
                <span class="text-[#c9a961] font-bold uppercase tracking-wider text-sm">Every Friday Night</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Karaoke from <span class="text-[#c9a961]">8 PM</span>
            </h2>
            
            <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto mb-4">
                Free entry — just order food & drinks. Enjoy 20% off selected menu items during karaoke hours!
            </p>
            
            <div class="flex flex-wrap justify-center gap-6 mt-2 mb-10 text-white/50 text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-music text-[#c9a961]"></i> 500+ Songs</span>
                <span class="flex items-center gap-2"><i class="fas fa-wine-glass text-[#c9a961]"></i> Drink Specials</span>
                <span class="flex items-center gap-2"><i class="fas fa-users text-[#c9a961]"></i> Group Friendly</span>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                    <i class="fas fa-calendar-alt"></i>
                    Reserve a Table for Friday
                </x-primary-button>
                <x-primary-button href="{{ route('karaoke') }}" variant="outline" size="lg">
                    <i class="fas fa-info-circle"></i>
                    Learn More
                </x-primary-button>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     CTA SECTION
     ========================================== --}}
<section class="py-24 md:py-32 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] relative">
    <div class="max-w-4xl mx-auto text-center">
        <div class="fade-up">
            <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-[#c9a961] to-[#c9a961]/30 flex items-center justify-center">
                <i class="fas fa-utensils text-3xl text-white"></i>
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#4a2a1e] mb-6">
                Ready for an<br><span class="text-[#c9a961] italic">Unforgettable</span> Evening?
            </h2>
            
            <p class="text-gray-600 text-lg md:text-xl max-w-2xl mx-auto mb-10">
                Whether it's a romantic dinner, family celebration, or karaoke night with friends — we'll make it special.
            </p>
            
            <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                <i class="fas fa-calendar-check"></i>
                Book Your Table Now
            </x-primary-button>
            
            <p class="mt-6 text-gray-400 text-sm">
                Or call us directly at <a href="tel:0794388936" class="text-[#c9a961] font-semibold hover:underline">0794 38 89 36</a>
            </p>
        </div>
    </div>
</section>

@endsection