@extends('layouts.app')

@section('title', 'Book a Table')

@section('content')

{{-- ==========================================
     HERO SECTION
     ========================================== --}}
<section class="relative min-h-[45vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div id="reservationParallax" class="absolute inset-0 scale-110 will-change-transform">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920&q=80" 
                 alt="Restaurant interior" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-[#4a2a1e]/80 to-[#4a2a1e]/50 z-10"></div>
    </div>
    
    <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
        <span class="reveal-text inline-block text-[#c9a961] text-sm font-semibold uppercase tracking-[0.3em] mb-4 border border-[#c9a961]/30 rounded-full px-5 py-2 bg-white/10 backdrop-blur-md">
            Reserve Your Experience
        </span>
        <h1 class="reveal-text text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6" style="transition-delay: 100ms;">
            Book a <span class="text-[#c9a961] italic font-['Playfair_Display']">Table</span>
        </h1>
        <p class="reveal-text text-white/60 text-lg md:text-xl max-w-2xl mx-auto" style="transition-delay: 200ms;">
            Whether it's an intimate dinner, family celebration, or karaoke night with friends — we'll make it unforgettable.
        </p>
    </div>
</section>

{{-- ==========================================
     RESERVATION FORM
     ========================================== --}}
<section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] relative" x-data="reservationForm()">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16">
            
            {{-- Form Column --}}
            <div class="lg:col-span-3">
                <div class="reveal-text bg-white rounded-3xl p-8 md:p-10 shadow-xl shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5">
                    
                    <div class="mb-10">
                        <h2 class="text-2xl md:text-3xl font-bold text-[#4a2a1e] mb-2">Reservation Details</h2>
                        <p class="text-gray-400 text-sm">Fill in your details and we'll confirm your booking within minutes.</p>
                    </div>
                    
                    {{-- Success Message --}}
                    <div x-show="submitted" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="mb-8 bg-green-50 border border-green-200 rounded-2xl p-6 flex items-start gap-4"
                         style="display: none;">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-green-800 mb-1">Reservation Request Received!</h3>
                            <p class="text-green-600 text-sm">Thank you, <span x-text="formData.name" class="font-semibold"></span>. We've sent a confirmation to <span x-text="formData.email" class="font-semibold"></span>. We'll call you at <span x-text="formData.phone" class="font-semibold"></span> to finalize your booking.</p>
                        </div>
                    </div>
                    
                    <form x-show="!submitted" @submit.prevent="submitForm()" class="space-y-6">
                        
                        {{-- Date / Time / Guests --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-[#4a2a1e]">Date <span class="text-red-400">*</span></label>
                                <div class="relative group">
                                    <input type="date" x-model="formData.date" :min="minDate" required
                                           class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 group-hover:border-[#c9a961]/50">
                                    <i class="fas fa-calendar absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-[#4a2a1e]">Time <span class="text-red-400">*</span></label>
                                <div class="relative group">
                                    <select x-model="formData.time" required
                                            class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 appearance-none cursor-pointer group-hover:border-[#c9a961]/50">
                                        <option value="" disabled selected>Select time</option>
                                        <optgroup label="Lunch">
                                            <option value="12:00">12:00 PM</option>
                                            <option value="13:00">1:00 PM</option>
                                            <option value="14:00">2:00 PM</option>
                                        </optgroup>
                                        <optgroup label="Dinner">
                                            <option value="18:00">6:00 PM</option>
                                            <option value="19:00">7:00 PM</option>
                                            <option value="20:00">8:00 PM</option>
                                            <option value="21:00">9:00 PM</option>
                                        </optgroup>
                                    </select>
                                    <i class="fas fa-clock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                                    <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-xs"></i>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-[#4a2a1e]">Guests <span class="text-red-400">*</span></label>
                                <div class="relative group">
                                    <select x-model="formData.guests" required
                                            class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 appearance-none cursor-pointer group-hover:border-[#c9a961]/50">
                                        <option value="" disabled selected>Number</option>
                                        @foreach(range(1, 10) as $n)
                                        <option value="{{ $n }}">{{ $n }} {{ $n == 1 ? 'person' : 'people' }}</option>
                                        @endforeach
                                        <option value="10+">10+ (call us)</option>
                                    </select>
                                    <i class="fas fa-user-friends absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                                    <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-xs"></i>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Name / Phone --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-[#4a2a1e]">Full Name <span class="text-red-400">*</span></label>
                                <div class="relative group">
                                    <input type="text" x-model="formData.name" placeholder="Your full name" required
                                           class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 group-hover:border-[#c9a961]/50">
                                    <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-[#4a2a1e]">Phone <span class="text-red-400">*</span></label>
                                <div class="relative group">
                                    <input type="tel" x-model="formData.phone" placeholder="0794 38 89 36" required
                                           class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 group-hover:border-[#c9a961]/50">
                                    <i class="fas fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-[#4a2a1e]">Email <span class="text-red-400">*</span></label>
                            <div class="relative group">
                                <input type="email" x-model="formData.email" placeholder="your@email.com" required
                                       class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 group-hover:border-[#c9a961]/50">
                                <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                            </div>
                        </div>
                        
                        {{-- Special Requests --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-[#4a2a1e]">Special Requests</label>
                            <div class="relative group">
                                <textarea x-model="formData.requests" rows="4" placeholder="Allergies, special occasion, seating preference, high chair needed..."
                                          class="w-full px-4 py-3.5 pl-11 rounded-xl border border-gray-200 bg-gray-50/50 text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 focus:bg-white outline-none transition-all duration-300 resize-none group-hover:border-[#c9a961]/50"></textarea>
                                <i class="fas fa-comment-alt absolute left-4 top-4 text-gray-400 group-hover:text-[#c9a961] transition-colors"></i>
                            </div>
                        </div>
                        
                        {{-- Notices --}}
                        <div class="space-y-3">
                            <div class="flex items-start gap-4 bg-amber-50 border border-amber-200 rounded-xl p-4">
                                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info-circle text-amber-500"></i>
                                </div>
                                <div>
                                    <p class="text-amber-800 text-sm"><span class="font-semibold">For groups larger than 6,</span> please call us directly at <a href="tel:0794388936" class="text-[#c9a961] font-semibold hover:underline">0794 38 89 36</a> for the best arrangement.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4 bg-[#4a2a1e]/5 border border-[#4a2a1e]/10 rounded-xl p-4">
                                <div class="w-10 h-10 rounded-full bg-[#4a2a1e]/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shield-alt text-[#4a2a1e]"></i>
                                </div>
                                <div>
                                    <p class="text-[#4a2a1e]/70 text-sm"><span class="font-semibold">Groups of 8+:</span> A small deposit may be required to secure your reservation. We'll discuss this when we call to confirm.</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Submit --}}
                        <button type="submit" :disabled="loading"
                                class="w-full bg-[#c9a961] text-[#4a2a1e] font-bold py-4 rounded-xl text-lg hover:bg-[#b8984f] transition-all duration-300 shadow-lg shadow-[#c9a961]/20 hover:shadow-xl hover:shadow-[#c9a961]/30 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0 flex items-center justify-center gap-3 relative overflow-hidden group">
                            <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></span>
                            <span x-show="!loading" class="relative flex items-center gap-3">
                                <i class="fas fa-calendar-check"></i>
                                Confirm Reservation
                            </span>
                            <span x-show="loading" class="relative flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Processing...
                            </span>
                        </button>
                        
                        <p class="text-center text-xs text-gray-400">
                            By booking, you agree to our <a href="#" class="underline hover:text-[#c9a961] transition-colors">reservation policy</a>.
                        </p>
                    </form>
                </div>
            </div>
            
            {{-- Info Column --}}
            <div class="lg:col-span-2 space-y-6">
                
                {{-- Opening Hours --}}
                <div class="reveal-text bg-white rounded-3xl p-8 shadow-xl shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5" style="transition-delay: 100ms;">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10">
                            <i class="fas fa-clock text-[#c9a961] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#4a2a1e]">Opening Hours</h3>
                            <p class="text-gray-400 text-sm">Plan your visit</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-600 text-sm">Monday — Thursday</span>
                            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 10:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-600 text-sm">Friday <span class="text-[#c9a961] text-xs font-semibold">(Karaoke)</span></span>
                            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 12:00 AM</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-600 text-sm">Saturday — Sunday</span>
                            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 11:00 PM</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-gradient-to-r from-[#c9a961]/10 to-[#c9a961]/5 rounded-xl border border-[#c9a961]/20">
                        <div class="flex items-center gap-3 text-[#c9a961] font-semibold text-sm">
                            <i class="fas fa-music animate-pulse"></i>
                            <span>Karaoke Night: Every Friday 8 PM — 12 AM</span>
                        </div>
                    </div>
                </div>
                
                {{-- Contact Card --}}
                <div class="reveal-text bg-white rounded-3xl p-8 shadow-xl shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5" style="transition-delay: 200ms;">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-green-500/5 flex items-center justify-center shadow-lg shadow-green-500/10">
                            <i class="fas fa-phone-alt text-green-500 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#4a2a1e]">Need Help?</h3>
                            <p class="text-gray-400 text-sm">We're here for you</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <a href="tel:0794388936" class="group flex items-center gap-4 p-4 rounded-xl bg-[#faf7f0] hover:bg-[#c9a961]/10 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-[#4a2a1e] flex items-center justify-center group-hover:bg-[#c9a961] transition-colors duration-300">
                                <i class="fas fa-phone text-white text-sm group-hover:text-[#4a2a1e] transition-colors"></i>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400">Call us</div>
                                <div class="font-bold text-[#4a2a1e] group-hover:text-[#c9a961] transition-colors">0794 38 89 36</div>
                            </div>
                        </a>
                        
                        <a href="https://wa.me/213794388936" target="_blank" class="group flex items-center gap-4 p-4 rounded-xl bg-[#faf7f0] hover:bg-green-50 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-green-600 flex items-center justify-center">
                                <i class="fab fa-whatsapp text-white text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400">WhatsApp</div>
                                <div class="font-bold text-[#4a2a1e]">Chat with us</div>
                            </div>
                        </a>
                        
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-[#faf7f0]">
                            <div class="w-12 h-12 rounded-full bg-[#4a2a1e] flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-[#c9a961] text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400">Location</div>
                                <div class="font-bold text-[#4a2a1e]">Val d'Hydra, Algiers</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Why Book --}}
                <div class="reveal-text bg-gradient-to-br from-[#4a2a1e] to-[#2c1812] rounded-3xl p-8 text-white shadow-xl" style="transition-delay: 300ms;">
                    <h3 class="text-xl font-bold mb-8">Why Book With Us?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#c9a961]/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-[#c9a961] text-sm"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-sm">Instant Confirmation</div>
                                <div class="text-white/50 text-xs mt-0.5">Receive email & SMS within minutes</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#c9a961]/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-[#c9a961] text-sm"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-sm">Free Cancellation</div>
                                <div class="text-white/50 text-xs mt-0.5">Cancel up to 2 hours before</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#c9a961]/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-[#c9a961] text-sm"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-sm">Best Table Guarantee</div>
                                <div class="text-white/50 text-xs mt-0.5">We reserve our finest spots for online bookings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     TRUST BADGES
     ========================================== --}}
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white border-t border-[#4a2a1e]/5">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center stagger-children">
            <div class="reveal group">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-[#c9a961] text-xl"></i>
                </div>
                <div class="font-bold text-[#4a2a1e] text-sm">Secure Booking</div>
                <div class="text-gray-400 text-xs mt-1">SSL Encrypted</div>
            </div>
            <div class="reveal group" style="transition-delay: 100ms;">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-bell text-[#c9a961] text-xl"></i>
                </div>
                <div class="font-bold text-[#4a2a1e] text-sm">Instant Alerts</div>
                <div class="text-gray-400 text-xs mt-1">Email + SMS</div>
            </div>
            <div class="reveal group" style="transition-delay: 200ms;">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-undo text-[#c9a961] text-xl"></i>
                </div>
                <div class="font-bold text-[#4a2a1e] text-sm">Free Changes</div>
                <div class="text-gray-400 text-xs mt-1">Up to 2 hours prior</div>
            </div>
            <div class="reveal group" style="transition-delay: 300ms;">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-heart text-[#c9a961] text-xl"></i>
                </div>
                <div class="font-bold text-[#4a2a1e] text-sm">Loved by 50K+</div>
                <div class="text-gray-400 text-xs mt-1">Happy diners</div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function reservationForm() {
    return {
        formData: { date: '', time: '', guests: '', name: '', phone: '', email: '', requests: '' },
        loading: false,
        submitted: false,
        minDate: new Date().toISOString().split('T')[0],
        
        submitForm() {
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
                this.submitted = true;
                this.$nextTick(() => window.scrollTo({ top: document.querySelector('section').offsetHeight - 100, behavior: 'smooth' }));
            }, 1500);
        }
    }
}
</script>
@endpush

@endsection