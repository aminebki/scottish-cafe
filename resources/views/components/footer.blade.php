<<footer class="bg-[#2c1812] text-white/70 pt-16 pb-8 relative overflow-hidden">
    {{-- Decorative top border --}}
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#c9a961] to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            
            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full bg-[#c9a961] flex items-center justify-center">
                        <span class="text-[#4a2a1e] font-bold text-xl font-['Playfair_Display']">S</span>
                    </div>
                    <div>
                        <h3 class="text-[#c9a961] font-['Playfair_Display'] text-xl font-bold">Scottish</h3>
                        <span class="text-white/40 text-xs tracking-wider uppercase">Restaurant</span>
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-white/50 mb-4">
                    Authentic wood-fired pizza and premium coffee in the heart of Val d'Hydra, Algiers. A family tradition since 2010.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#c9a961] hover:text-[#4a2a1e] transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#c9a961] hover:text-[#4a2a1e] transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://wa.me/213794388936" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-green-500 hover:text-white transition-all duration-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-5 text-sm uppercase tracking-wider">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-[#c9a961] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#c9a961]/50"></span>Home</a></li>
                    <li><a href="{{ route('menu') }}" class="hover:text-[#c9a961] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#c9a961]/50"></span>Our Menu</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-[#c9a961] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#c9a961]/50"></span>Gallery</a></li>
                    <li><a href="{{ route('reservation') }}" class="hover:text-[#c9a961] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#c9a961]/50"></span>Reservations</a></li>
                    <li><a href="{{ route('karaoke') }}" class="hover:text-[#c9a961] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#c9a961]/50"></span>Karaoke Night</a></li>
                </ul>
            </div>
            
            {{-- Contact Info --}}
            <div>
                <h4 class="text-white font-semibold mb-5 text-sm uppercase tracking-wider">Contact</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-[#c9a961] mt-1"></i>
                        <span>Val d'Hydra, Algiers, Algeria</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone text-[#c9a961]"></i>
                        <a href="tel:0794388936" class="hover:text-[#c9a961] transition-colors">0794 38 89 36</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-clock text-[#c9a961]"></i>
                        <span>Open daily 10:00 AM - 11:00 PM</span>
                    </li>
                </ul>
            </div>
            
            {{-- Newsletter --}}
            <div>
                <h4 class="text-white font-semibold mb-5 text-sm uppercase tracking-wider">Stay Updated</h4>
                <p class="text-sm text-white/50 mb-4">Get exclusive offers and karaoke night updates.</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email" class="flex-1 bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-sm text-white placeholder-white/30 focus:outline-none focus:border-[#c9a961]/50 transition-colors">
                    <button type="submit" class="bg-[#c9a961] text-[#4a2a1e] px-4 py-2.5 rounded-lg font-semibold hover:bg-[#b8984f] transition-colors">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        {{-- Bottom Bar --}}
        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-white/30"> Scottish Restaurant. All rights reserved.</p>
            <div class="flex gap-6 text-xs text-white/30">
                <a href="#" class="hover:text-[#c9a961] transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-[#c9a961] transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>