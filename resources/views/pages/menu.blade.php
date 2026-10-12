@extends('layouts.app')

@section('title', 'Our Menu')

@section('content')

{{-- ==========================================
     HERO SECTION
     ========================================== --}}
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div id="menuParallax" class="absolute inset-0 scale-110 will-change-transform">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1920&q=80" 
                 alt="Restaurant table setting" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-[#4a2a1e]/80 to-[#4a2a1e]/50 z-10"></div>
    </div>
    
    <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
        <span class="reveal-text inline-block text-[#c9a961] text-sm font-semibold uppercase tracking-[0.3em] mb-4 border border-[#c9a961]/30 rounded-full px-5 py-2 bg-white/10 backdrop-blur-md">
            Authentic Italian & Scottish Flavors
        </span>
        <h1 class="reveal-text text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6" style="transition-delay: 100ms;">
            Our <span class="text-[#c9a961] italic font-['Playfair_Display']">Menu</span>
        </h1>
        <p class="reveal-text text-white/60 text-lg md:text-xl max-w-2xl mx-auto" style="transition-delay: 200ms;">
            Hand-crafted dishes using the freshest ingredients, fired in our traditional wood-burning oven since 2010.
        </p>
    </div>
</section>

{{-- ==========================================
     MENU LAYOUT
     ========================================== --}}
<section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] relative" x-data="{ activeCategory: 'pizzas' }">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row gap-12">
            
            {{-- Sticky Sidebar Navigation --}}
            <div class="lg:w-72 flex-shrink-0">
                <div class="lg:sticky lg:top-28 space-y-3">
                    <div class="reveal-text">
                        <h3 class="text-[#4a2a1e] font-bold text-sm uppercase tracking-wider mb-4 hidden lg:block">Categories</h3>
                    </div>
                    
                    {{-- Mobile: Horizontal Scroll --}}
                    <div class="lg:hidden flex gap-2 overflow-x-auto pb-4 -mx-4 px-4 snap-x">
                        @foreach(['pizzas' => '🍕 Pizzas', 'mains' => '🍝 Mains', 'salads' => '🥗 Salads', 'drinks' => '🍹 Drinks', 'desserts' => '🍰 Desserts'] as $key => $label)
                        <button @click="activeCategory = '{{ $key }}'; document.getElementById('{{ $key }}').scrollIntoView({ behavior: 'smooth', block: 'start' })" 
                                class="snap-start flex-shrink-0 px-5 py-3 rounded-full text-sm font-semibold transition-all duration-300 whitespace-nowrap"
                                :class="activeCategory === '{{ $key }}' ? 'bg-[#4a2a1e] text-[#c9a961] shadow-lg shadow-[#4a2a1e]/20' : 'bg-white text-[#4a2a1e] border border-[#4a2a1e]/10 hover:border-[#c9a961] hover:shadow-md'">
                            {{ $label }}
                        </button>
                        @endforeach
                    </div>
                    
                    {{-- Desktop: Vertical List --}}
                    <div class="hidden lg:flex flex-col gap-2">
                        @foreach(['pizzas' => '🍕 Pizzas', 'mains' => '🍝 Mains', 'salads' => '🥗 Salads', 'drinks' => '🍹 Drinks', 'desserts' => '🍰 Desserts'] as $key => $label)
                        <button @click="activeCategory = '{{ $key }}'; document.getElementById('{{ $key }}').scrollIntoView({ behavior: 'smooth', block: 'start' })" 
                                @scroll.window="if(document.getElementById('{{ $key }}')?.getBoundingClientRect().top < 200) activeCategory = '{{ $key }}'"
                                class="w-full text-left px-5 py-4 rounded-xl text-sm font-semibold transition-all duration-300 flex items-center gap-3 group"
                                :class="activeCategory === '{{ $key }}' ? 'bg-[#4a2a1e] text-[#c9a961] shadow-xl shadow-[#4a2a1e]/20' : 'bg-white text-[#4a2a1e] border border-[#4a2a1e]/5 hover:border-[#c9a961] hover:bg-[#c9a961]/5'">
                            <span>{{ $label }}</span>
                            <i x-show="activeCategory === '{{ $key }}'" class="fas fa-chevron-right ml-auto text-xs transition-all" x-transition></i>
                        </button>
                        @endforeach
                    </div>
                    
                    {{-- PDF Download Card --}}
                    <div class="hidden lg:block reveal-text bg-white rounded-2xl p-6 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-xl hover:-translate-y-1 transition-all duration-300" style="transition-delay: 200ms;">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-pdf text-[#c9a961] text-2xl"></i>
                        </div>
                        <h4 class="text-[#4a2a1e] font-bold text-sm mb-1">Download Menu</h4>
                        <p class="text-gray-400 text-xs mb-4">Take our full menu with you</p>
                        <a href="#" class="inline-flex items-center gap-2 text-[#c9a961] text-sm font-semibold hover:underline group">
                            <i class="fas fa-download group-hover:translate-y-0.5 transition-transform"></i>
                            PDF (2.4 MB)
                        </a>
                    </div>
                    
                    {{-- Dietary Legend --}}
                    <div class="hidden lg:block reveal-text bg-white rounded-2xl p-6 shadow-lg shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5" style="transition-delay: 300ms;">
                        <h4 class="text-[#4a2a1e] font-bold text-sm mb-4">Dietary</h4>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center gap-3 text-gray-500">
                                <span class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center"><i class="fas fa-leaf text-green-500 text-xs"></i></span>
                                Vegetarian
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <span class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center"><i class="fas fa-pepper-hot text-red-500 text-xs"></i></span>
                                Spicy
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <span class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center"><i class="fas fa-fire text-amber-500 text-xs"></i></span>
                                Chef's Special
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <span class="w-8 h-8 rounded-lg bg-[#c9a961]/10 flex items-center justify-center"><i class="fas fa-star text-[#c9a961] text-xs"></i></span>
                                Popular
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Menu Content --}}
            <div class="flex-1 space-y-24">
                
                {{-- PIZZAS --}}
                <div id="pizzas" class="scroll-mt-32">
                    <div class="reveal-text flex items-center gap-5 mb-12">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center text-3xl shadow-lg shadow-[#c9a961]/10">
                            🍕
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e]">Wood-Fired Pizzas</h2>
                            <p class="text-gray-400 text-sm mt-1">All pizzas baked in our 450°C wood-fired oven • 12"</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
                        @php
                        $pizzas = [
                            ['Margherita Classica', 'San Marzano tomatoes, fresh buffalo mozzarella, basil, extra virgin olive oil, sea salt', 850, ['Popular'], ['vegetarian']],
                            ['Pepperoni Piccante', 'Spicy Italian pepperoni, mozzarella, tomato sauce, chili flakes, oregano', 1100, [], ['spicy']],
                            ['Quattro Formaggi', 'Mozzarella, gorgonzola dolce, aged parmesan, goat cheese, honey drizzle, walnuts', 1250, ['Chef\'s Special'], ['vegetarian']],
                            ['Verdure Grigliate', 'Grilled zucchini, eggplant, bell peppers, caramelized onions, feta, pesto drizzle', 950, [], ['vegetarian']],
                            ['Scottish Special', 'Algerian merguez, roasted peppers, harissa, fresh herbs, mozzarella', 1400, ['Local Favorite'], ['spicy']],
                            ['Diavola', 'Spicy salami, mozzarella, tomato sauce, jalapeños, hot honey', 1200, [], ['spicy']],
                            ['Capricciosa', 'Ham, mushrooms, artichokes, olives, mozzarella, tomato sauce', 1150, [], []],
                            ['Pizza au Feu de Bois', 'Our signature — prosciutto, arugula, shaved parmesan, truffle oil, buffalo mozzarella', 1500, ['Popular'], []],
                        ];
                        @endphp
                        
                        @foreach($pizzas as $pizza)
                        <div class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500">
                            <div class="flex justify-between items-start gap-4 mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 flex-wrap mb-2">
                                        <h3 class="text-lg font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors duration-300">{{ $pizza[0] }}</h3>
                                        @foreach($pizza[3] as $badge)
                                        <span class="bg-{{ $badge === 'Popular' ? '[#c9a961]' : ($badge === 'Chef\'s Special' ? '[#4a2a1e]' : 'red-500') }} text-{{ $badge === 'Popular' ? '[#4a2a1e]' : '[#c9a961]' }} text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">{{ $badge }}</span>
                                        @endforeach
                                    </div>
                                    <p class="text-gray-500 text-sm leading-relaxed">{{ $pizza[1] }}</p>
                                </div>
                                <span class="text-[#c9a961] font-bold text-xl whitespace-nowrap">{{ number_format($pizza[2]) }} DA</span>
                            </div>
                            <div class="flex items-center gap-3 pt-4 border-t border-[#4a2a1e]/5 text-xs text-gray-400">
                                @foreach($pizza[4] as $diet)
                                <span class="flex items-center gap-1.5 px-2.5 py-1 rounded-full {{ $diet === 'vegetarian' ? 'bg-green-50 text-green-600' : 'bg-red-50 text-red-600' }}">
                                    <i class="fas {{ $diet === 'vegetarian' ? 'fa-leaf' : 'fa-pepper-hot' }} text-[10px]"></i>
                                    {{ $diet === 'vegetarian' ? 'Vegetarian' : 'Spicy' }}
                                </span>
                                @endforeach
                                <span class="ml-auto flex items-center gap-1"><i class="far fa-clock"></i> 12-16 min</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Gold Divider --}}
                <div class="reveal flex items-center gap-6">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10">
                        <i class="fas fa-utensils text-[#c9a961]"></i>
                    </div>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                </div>
                
                {{-- MAINS --}}
                <div id="mains" class="scroll-mt-32">
                    <div class="reveal-text flex items-center gap-5 mb-12">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center text-3xl shadow-lg shadow-[#c9a961]/10">
                            🍝
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e]">Mains & Pastas</h2>
                            <p class="text-gray-400 text-sm mt-1">Handmade with love • Fresh daily</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
                        @php
                        $mains = [
                            ['Pasta Carbonara', 'Guanciale, egg yolk, pecorino romano, black pepper, handmade spaghetti', 1200, [], []],
                            ['Pasta Bolognese', 'Slow-cooked beef & pork ragù, san marzano tomatoes, parmesan, handmade tagliatelle', 1100, [], []],
                            ['Pollo alla Griglia', 'Marinated chicken breast, roasted vegetables, lemon-herb sauce, rosemary potatoes', 1400, [], ['gluten-free']],
                            ['Steak Frites', 'Grilled ribeye, hand-cut fries, garlic butter, mixed green salad', 2800, ['Popular'], []],
                            ['Salmone alla Griglia', 'Atlantic salmon fillet, asparagus, dill cream sauce, roasted baby potatoes', 2200, [], ['healthy']],
                        ];
                        @endphp
                        
                        @foreach($mains as $main)
                        <div class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500">
                            <div class="flex justify-between items-start gap-4 mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 flex-wrap mb-2">
                                        <h3 class="text-lg font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors duration-300">{{ $main[0] }}</h3>
                                        @foreach($main[3] as $badge)
                                        <span class="bg-[#c9a961] text-[#4a2a1e] text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">{{ $badge }}</span>
                                        @endforeach
                                    </div>
                                    <p class="text-gray-500 text-sm leading-relaxed">{{ $main[1] }}</p>
                                </div>
                                <span class="text-[#c9a961] font-bold text-xl whitespace-nowrap">{{ number_format($main[2]) }} DA</span>
                            </div>
                            <div class="flex items-center gap-3 pt-4 border-t border-[#4a2a1e]/5 text-xs text-gray-400">
                                @foreach($main[4] as $diet)
                                <span class="flex items-center gap-1.5 px-2.5 py-1 rounded-full {{ $diet === 'gluten-free' ? 'bg-amber-50 text-amber-600' : 'bg-green-50 text-green-600' }}">
                                    <i class="fas {{ $diet === 'gluten-free' ? 'fa-bread-slice' : 'fa-leaf' }} text-[10px]"></i>
                                    {{ $diet === 'gluten-free' ? 'Gluten-free option' : 'Healthy' }}
                                </span>
                                @endforeach
                                <span class="ml-auto flex items-center gap-1"><i class="far fa-clock"></i> 18-25 min</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Gold Divider --}}
                <div class="reveal flex items-center gap-6">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500/20 to-green-500/5 flex items-center justify-center shadow-lg shadow-green-500/10">
                        <i class="fas fa-leaf text-green-500"></i>
                    </div>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                </div>
                
                {{-- SALADS --}}
                <div id="salads" class="scroll-mt-32">
                    <div class="reveal-text flex items-center gap-5 mb-12">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500/20 to-green-500/5 flex items-center justify-center text-3xl shadow-lg shadow-green-500/10">
                            🥗
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e]">Fresh Salads</h2>
                            <p class="text-gray-400 text-sm mt-1">Crisp, healthy, and full of flavor</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
                        @php
                        $salads = [
                            ['Caesar Salad', 'Romaine lettuce, parmesan croutons, house-made caesar dressing, anchovies optional', 750, [], ['vegetarian']],
                            ['Greek Salad', 'Cucumber, tomatoes, red onion, kalamata olives, feta, oregano, olive oil', 650, [], ['vegetarian']],
                            ['Scottish House Salad', 'Mixed greens, grilled halloumi, pomegranate, walnuts, dates, mint, lemon dressing', 900, ['Signature'], ['vegetarian']],
                        ];
                        @endphp
                        
                        @foreach($salads as $salad)
                        <div class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500">
                            <div class="flex justify-between items-start gap-4 mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 flex-wrap mb-2">
                                        <h3 class="text-lg font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors duration-300">{{ $salad[0] }}</h3>
                                        @foreach($salad[3] as $badge)
                                        <span class="bg-[#4a2a1e] text-[#c9a961] text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">{{ $badge }}</span>
                                        @endforeach
                                    </div>
                                    <p class="text-gray-500 text-sm leading-relaxed">{{ $salad[1] }}</p>
                                </div>
                                <span class="text-[#c9a961] font-bold text-xl whitespace-nowrap">{{ number_format($salad[2]) }} DA</span>
                            </div>
                            <div class="flex items-center gap-3 pt-4 border-t border-[#4a2a1e]/5 text-xs text-gray-400">
                                @foreach($salad[4] as $diet)
                                <span class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-green-50 text-green-600">
                                    <i class="fas fa-leaf text-[10px]"></i> Vegetarian
                                </span>
                                @endforeach
                                <span class="ml-auto flex items-center gap-1"><i class="far fa-clock"></i> 8 min</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Gold Divider --}}
                <div class="reveal flex items-center gap-6">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500/20 to-blue-500/5 flex items-center justify-center shadow-lg shadow-blue-500/10">
                        <i class="fas fa-glass-cheers text-blue-500"></i>
                    </div>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                </div>
                
                {{-- DRINKS --}}
                <div id="drinks" class="scroll-mt-32">
                    <div class="reveal-text flex items-center gap-5 mb-12">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-500/5 flex items-center justify-center text-3xl shadow-lg shadow-blue-500/10">
                            🍹
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e]">Drinks & Beverages</h2>
                            <p class="text-gray-400 text-sm mt-1">Refreshing selections for every taste</p>
                        </div>
                    </div>
                    
                    {{-- Coffee --}}
                    <div class="reveal mb-10">
                        <h3 class="text-lg font-bold text-[#4a2a1e] mb-5 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-[#c9a961]/10 flex items-center justify-center"><i class="fas fa-coffee text-[#c9a961]"></i></span>
                            Coffee Menu
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 stagger-children">
                            @foreach([['Espresso', 'Intense & aromatic single shot', 250], ['Cappuccino', 'Espresso, steamed milk, cocoa dust', 350], ['Latte', 'Smooth espresso with velvety milk', 400], ['Americano', 'Double espresso, hot water', 300]] as $drink)
                            <div class="group bg-white rounded-xl p-5 shadow-sm border border-[#4a2a1e]/5 hover:shadow-md hover:border-[#c9a961]/20 transition-all duration-300 flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">{{ $drink[0] }}</h4>
                                    <p class="text-gray-400 text-xs mt-0.5">{{ $drink[1] }}</p>
                                </div>
                                <span class="text-[#c9a961] font-bold">{{ $drink[2] }} DA</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    {{-- Juices --}}
                    <div class="reveal mb-10">
                        <h3 class="text-lg font-bold text-[#4a2a1e] mb-5 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-green-500/10 flex items-center justify-center"><i class="fas fa-lemon text-green-500"></i></span>
                            Fresh Juices
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 stagger-children">
                            @foreach([['Orange', '🍊', 350], ['Lemon & Mint', '🍋', 300], ['Mixed Fruit', '🍹', 400]] as $juice)
                            <div class="group bg-white rounded-xl p-5 shadow-sm border border-[#4a2a1e]/5 hover:shadow-md hover:border-[#c9a961]/20 transition-all duration-300 flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl">{{ $juice[1] }}</span>
                                    <h4 class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">{{ $juice[0] }}</h4>
                                </div>
                                <span class="text-[#c9a961] font-bold">{{ $juice[2] }} DA</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    {{-- Soft Drinks --}}
                    <div class="reveal">
                        <h3 class="text-lg font-bold text-[#4a2a1e] mb-5 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center"><i class="fas fa-glass-whiskey text-blue-500"></i></span>
                            Soft Drinks
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 stagger-children">
                            @foreach(['Coca-Cola', 'Sprite', 'Fanta', 'Water'] as $soda)
                            <div class="group bg-white rounded-xl p-4 shadow-sm border border-[#4a2a1e]/5 hover:shadow-md hover:border-[#c9a961]/20 transition-all duration-300 text-center">
                                <h4 class="font-semibold text-[#4a2a1e] text-sm mb-2 group-hover:text-[#c9a961] transition-colors">{{ $soda }}</h4>
                                <span class="text-[#c9a961] font-bold">200 DA</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                {{-- Gold Divider --}}
                <div class="reveal flex items-center gap-6">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500/20 to-pink-500/5 flex items-center justify-center shadow-lg shadow-pink-500/10">
                        <i class="fas fa-birthday-cake text-pink-500"></i>
                    </div>
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent via-[#c9a961]/40 to-transparent"></div>
                </div>
                
                {{-- DESSERTS --}}
                <div id="desserts" class="scroll-mt-32">
                    <div class="reveal-text flex items-center gap-5 mb-12">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500/20 to-pink-500/5 flex items-center justify-center text-3xl shadow-lg shadow-pink-500/10">
                            🍰
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e]">Sweet Endings</h2>
                            <p class="text-gray-400 text-sm mt-1">Handcrafted desserts to complete your meal</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-children">
                        @php
                        $desserts = [
                            ['https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=600&q=80', 'Classic Tiramisu', 'Mascarpone, espresso-soaked ladyfingers, cocoa dust, amaretto', 650, ['Popular']],
                            ['https://images.unsplash.com/photo-1488477181946-6428a0291777?w=600&q=80', 'Vanilla Panna Cotta', 'Silky vanilla cream, berry compote, fresh mint', 550, []],
                            ['https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=600&q=80', 'Chocolate Lava Cake', 'Warm chocolate cake, molten center, vanilla ice cream', 750, ['Popular']],
                        ];
                        @endphp
                        
                        @foreach($desserts as $dessert)
                        <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/10 hover:-translate-y-2 transition-all duration-500">
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $dessert[0] }}" 
                                     alt="{{ $dessert[1] }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @foreach($dessert[4] as $badge)
                                <div class="absolute top-4 right-4 bg-[#c9a961] text-[#4a2a1e] text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    {{ $badge }}
                                </div>
                                @endforeach
                                <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e]/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">{{ $dessert[1] }}</h3>
                                    <span class="text-[#c9a961] font-bold text-lg">{{ number_format($dessert[3]) }} DA</span>
                                </div>
                                <p class="text-gray-500 text-sm">{{ $dessert[2] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     CTA SECTION
     ========================================== --}}
<section class="relative py-24 md:py-32 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[#4a2a1e]"></div>
        <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1200&q=80'); background-size: cover; background-position: center;"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="reveal-text">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Hungry for <span class="text-[#c9a961] italic font-['Playfair_Display']">More</span>?
            </h2>
            <p class="text-white/60 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                Reserve your table now and experience our wood-fired flavors firsthand. Walk-ins welcome, but reservations guarantee your spot.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-primary-button href="{{ route('reservation') }}" variant="solid" size="lg">
                    <i class="fas fa-calendar-check"></i>
                    Book a Table
                </x-primary-button>
                <a href="tel:0794388936" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all duration-300 text-lg backdrop-blur-sm">
                    <i class="fas fa-phone"></i>
                    0794 38 89 36
                </a>
            </div>
        </div>
    </div>
</section>

@endsection 