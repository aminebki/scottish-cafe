@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

{{-- ==========================================
     HERO SECTION
     ========================================== --}}
<section class="relative min-h-[45vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div id="contactParallax" class="absolute inset-0 scale-110 will-change-transform">
            <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1920&q=80" 
                 alt="Coffee shop ambiance" 
                 class="w-full h-full object-cover animate-[kenBurns_20s_ease-in-out_infinite]">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#4a2a1e] via-[#4a2a1e]/80 to-[#4a2a1e]/50 z-10"></div>
    </div>
    
    <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
        <span class="reveal-text inline-block text-[#c9a961] text-sm font-semibold uppercase tracking-[0.3em] mb-4 border border-[#c9a961]/30 rounded-full px-5 py-2 bg-white/10 backdrop-blur-md">
            Get In Touch
        </span>
        <h1 class="reveal-text text-5xl md:text-6xl lg:text-7xl text-white font-bold mb-6" style="transition-delay: 100ms;">
            Contact <span class="text-[#c9a961] italic font-['Playfair_Display']">Us</span>
        </h1>
        <p class="reveal-text text-white/60 text-lg md:text-xl max-w-2xl mx-auto" style="transition-delay: 200ms;">
            Have a question, feedback, or want to plan a private event? We'd love to hear from you.
        </p>
    </div>
</section>

{{-- ==========================================
     TWO-COLUMN LAYOUT: INFO + MAP
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#faf7f0]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            
            {{-- LEFT COLUMN: Contact Info --}}
            <div class="space-y-8">
                
                {{-- Section Header --}}
                <div class="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#4a2a1e] mb-4">Visit or Reach Out</h2>
                    <p class="text-gray-500 leading-relaxed">
                        Whether you're planning a special dinner, have dietary questions, or want to book a private event, our team is here to help.
                    </p>
                </div>
                
                {{-- Contact Cards --}}
                
<div class="space-y-4">
    
    {{-- Address --}}
    <div class="reveal group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500">
        <div class="flex items-start gap-5">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center flex-shrink-0 group-hover:bg-[#c9a961] transition-colors duration-300 shadow-lg shadow-[#c9a961]/10">
                <i class="fas fa-map-marker-alt text-[#c9a961] text-xl group-hover:text-[#4a2a1e] transition-colors duration-300"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-[#4a2a1e] text-lg mb-1 group-hover:text-[#c9a961] transition-colors">Address</h3>
                <p class="text-gray-500 text-sm mb-3">Val d'Hydra, Algiers, Algeria</p>
                <a href="https://maps.google.com/?q=Val+d'Hydra+Algiers" target="_blank" 
                   class="inline-flex items-center gap-2 text-[#c9a961] text-sm font-semibold hover:underline group/link">
                    <i class="fas fa-external-link-alt text-xs group-hover/link:translate-x-0.5 transition-transform"></i>
                    Open in Google Maps
                </a>
            </div>
        </div>
    </div>
    
    {{-- Phone --}}
    <div class="reveal group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500" style="transition-delay: 50ms;">
        <div class="flex items-start gap-5">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-green-500/5 flex items-center justify-center flex-shrink-0 group-hover:bg-green-500 transition-colors duration-300 shadow-lg shadow-green-500/10">
                <i class="fas fa-phone-alt text-green-500 text-xl group-hover:text-white transition-colors duration-300"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-[#4a2a1e] text-lg mb-1 group-hover:text-[#c9a961] transition-colors">Phone</h3>
                <p class="text-gray-500 text-sm mb-3">Call us for reservations and inquiries</p>
                <a href="tel:0794388936" 
                   class="inline-flex items-center gap-2 text-[#4a2a1e] font-bold text-lg hover:text-[#c9a961] transition-colors group/link">
                    0794 38 89 36
                    <i class="fas fa-arrow-right text-xs opacity-0 group-hover/link:opacity-100 group-hover/link:translate-x-1 transition-all"></i>
                </a>
            </div>
        </div>
    </div>
    
    {{-- Email --}}
    <div class="reveal group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500" style="transition-delay: 100ms;">
        <div class="flex items-start gap-5">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-500/5 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500 transition-colors duration-300 shadow-lg shadow-blue-500/10">
                <i class="fas fa-envelope text-blue-500 text-xl group-hover:text-white transition-colors duration-300"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-[#4a2a1e] text-lg mb-1 group-hover:text-[#c9a961] transition-colors">Email</h3>
                <p class="text-gray-500 text-sm mb-3">For events, catering, and general inquiries</p>
                <a href="mailto:hello@scottish-restaurant.dz" 
                   class="inline-flex items-center gap-2 text-[#4a2a1e] font-bold hover:text-[#c9a961] transition-colors group/link">
                    hello@scottish-restaurant.dz
                    <i class="fas fa-arrow-right text-xs opacity-0 group-hover/link:opacity-100 group-hover/link:translate-x-1 transition-all"></i>
                </a>
            </div>
        </div>
    </div>
    
    {{-- WhatsApp --}}
    <div class="reveal group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-[#4a2a1e]/5 hover:-translate-y-1.5 transition-all duration-500" style="transition-delay: 150ms;">
        <div class="flex items-start gap-5">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-600/20 to-green-600/5 flex items-center justify-center flex-shrink-0 group-hover:bg-green-600 transition-colors duration-300 shadow-lg shadow-green-600/10">
                <i class="fab fa-whatsapp text-green-600 text-xl group-hover:text-white transition-colors duration-300"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-[#4a2a1e] text-lg mb-1 group-hover:text-[#c9a961] transition-colors">WhatsApp</h3>
                <p class="text-gray-500 text-sm mb-3">Quick replies for reservations and questions</p>
                <a href="https://wa.me/213794388936" target="_blank"
                   class="inline-flex items-center gap-2 bg-green-600 text-white px-5 py-2.5 rounded-full font-semibold text-sm hover:bg-green-700 transition-all duration-300 shadow-lg shadow-green-600/20 hover:shadow-xl hover:shadow-green-600/30 hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp"></i>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
                
                {{-- Opening Hours Table --}}
                {{-- Opening Hours Table --}}
<div class="reveal bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-lg hover:shadow-[#4a2a1e]/5 transition-all duration-500" style="transition-delay: 200ms;">
    <div class="flex items-center gap-3 mb-6">
        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10">
            <i class="fas fa-clock text-[#c9a961] text-lg"></i>
        </div>
        <h3 class="font-bold text-[#4a2a1e] text-lg">Opening Hours</h3>
    </div>
    
    <div class="space-y-3">
        <div class="flex justify-between items-center py-3 border-b border-gray-100 group hover:bg-[#faf7f0] hover:px-3 hover:rounded-lg transition-all duration-300">
            <span class="text-gray-600 text-sm">Monday — Thursday</span>
            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 10:00 PM</span>
        </div>
        <div class="flex justify-between items-center py-3 border-b border-gray-100 group hover:bg-[#faf7f0] hover:px-3 hover:rounded-lg transition-all duration-300">
            <span class="text-gray-600 text-sm flex items-center gap-2">
                Friday
                <span class="text-[#c9a961] text-[10px] font-bold uppercase bg-[#c9a961]/10 px-2 py-0.5 rounded-full">Karaoke</span>
            </span>
            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 12:00 AM</span>
        </div>
        <div class="flex justify-between items-center py-3 border-b border-gray-100 group hover:bg-[#faf7f0] hover:px-3 hover:rounded-lg transition-all duration-300">
            <span class="text-gray-600 text-sm">Saturday — Sunday</span>
            <span class="font-bold text-[#4a2a1e] text-sm">10:00 AM — 11:00 PM</span>
        </div>
    </div>
    
    <div class="mt-4 p-4 bg-gradient-to-r from-[#c9a961]/10 to-[#c9a961]/5 rounded-xl border border-[#c9a961]/20">
        <p class="text-[#c9a961] text-xs font-semibold text-center flex items-center justify-center gap-2">
            <i class="fas fa-info-circle"></i>
            Kitchen closes 30 minutes before closing time
        </p>
    </div>
</div>
            </div>
            
            {{-- RIGHT COLUMN: Google Map --}}
            {{-- RIGHT COLUMN: Themed Google Map --}}
<div class="reveal lg:sticky lg:top-28 h-fit" style="transition-delay: 200ms;">
    <div class="bg-white rounded-3xl overflow-hidden shadow-xl shadow-[#4a2a1e]/5 border border-[#4a2a1e]/5 hover:shadow-2xl hover:shadow-[#4a2a1e]/10 transition-all duration-500">
        
        {{-- Map Embed with Sepia Filter --}}
        <div class="relative h-[400px] lg:h-[500px] bg-[#faf7f0]">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.953548456927!2d3.0456!3d36.7494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb27f1214db4b%3A0x5c1e5d1f5b5b5b5b!2sVal%20d'Hydra%2C%20Algiers!5e0!3m2!1sen!2sdz!4v1700000000000!5m2!1sen!2sdz"
                width="100%" 
                height="100%" 
                style="border:0; filter: sepia(0.4) saturate(0.6) brightness(0.95) contrast(1.1);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="absolute inset-0 grayscale-[0.3]">
            </iframe>
            
            {{-- Warm overlay to blend edges --}}
            <div class="absolute inset-0 pointer-events-none shadow-[inset_0_0_60px_rgba(74,42,30,0.15)]"></div>
            
            {{-- Custom Map Marker --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-full pointer-events-none z-10">
                <div class="relative">
                    <div class="w-14 h-14 bg-[#4a2a1e] rounded-full flex items-center justify-center shadow-2xl border-4 border-[#c9a961] animate-bounce" style="animation-duration: 2s;">
                        <i class="fas fa-utensils text-[#c9a961] text-lg"></i>
                    </div>
                    <div class="w-5 h-5 bg-[#4a2a1e] rotate-45 absolute -bottom-2 left-1/2 -translate-x-1/2 border-r-4 border-b-4 border-[#c9a961]"></div>
                </div>
            </div>
        </div>
        
        {{-- Map Card Footer --}}
        <div class="p-6 bg-gradient-to-r from-[#faf7f0] to-white">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="font-bold text-[#4a2a1e] text-lg">Scottish Restaurant</h3>
                    <p class="text-gray-400 text-sm flex items-center gap-1">
                        <i class="fas fa-map-pin text-[#c9a961] text-xs"></i>
                        Val d'Hydra, Algiers
                    </p>
                </div>
                <a href="https://maps.google.com/?q=Val+d'Hydra+Algiers" target="_blank"
                   class="w-12 h-12 rounded-full bg-[#4a2a1e] flex items-center justify-center text-[#c9a961] hover:bg-[#c9a961] hover:text-[#4a2a1e] transition-all duration-300 shadow-lg group">
                    <i class="fas fa-directions text-lg group-hover:rotate-45 transition-transform duration-300"></i>
                </a>
            </div>
            <div class="flex items-center gap-3">
                <span class="flex items-center gap-1.5 text-green-600 text-sm font-semibold bg-green-50 px-3 py-1.5 rounded-full">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    Open Now
                </span>
                <span class="text-gray-400 text-sm">Closes 11:00 PM</span>
            </div>
        </div>
    </div>
    
    {{-- Quick Action Buttons --}}
    <div class="grid grid-cols-2 gap-3 mt-4">
        <a href="https://maps.google.com/?q=Val+d'Hydra+Algiers" target="_blank"
           class="group flex items-center justify-center gap-2 bg-[#4a2a1e] rounded-xl p-4 text-sm font-bold text-[#c9a961] hover:bg-[#5a3a2e] transition-all shadow-lg shadow-[#4a2a1e]/20 hover:-translate-y-0.5">
            <i class="fas fa-car group-hover:translate-x-0.5 transition-transform"></i>
            Get Directions
        </a>
        <a href="tel:0794388936"
           class="group flex items-center justify-center gap-2 bg-[#c9a961] rounded-xl p-4 text-sm font-bold text-[#4a2a1e] hover:bg-[#b8984f] transition-all shadow-lg shadow-[#c9a961]/20 hover:-translate-y-0.5">
            <i class="fas fa-taxi group-hover:translate-x-0.5 transition-transform"></i>
            Call a Taxi
        </a>
    </div>
</div>
        </div>
    </div>
</section>

{{-- ==========================================
     CONTACT FORM SECTION
     ========================================== --}}
<section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white relative" x-data="contactForm()">
    <div class="max-w-4xl mx-auto">
        <x-section-title 
            title="Send Us a <span class='text-[#c9a961]'>Message</span>" 
            subtitle="Get In Touch" 
        />
        
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
                <h3 class="font-bold text-green-800 mb-1">Message Sent Successfully!</h3>
                <p class="text-green-600 text-sm">Thank you, <span x-text="formData.name"></span>. We've received your message and will get back to you within 24 hours.</p>
            </div>
        </div>
        
        {{-- Error Message --}}
        <div x-show="error" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="mb-8 bg-red-50 border border-red-200 rounded-2xl p-6 flex items-start gap-4"
             style="display: none;">
            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-exclamation-circle text-red-600 text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-red-800 mb-1">Something went wrong</h3>
                <p class="text-red-600 text-sm">Please try again or call us directly at <a href="tel:0794388936" class="underline">0794 38 89 36</a>.</p>
            </div>
        </div>
        
        <form x-show="!submitted" @submit.prevent="submitForm()" class="bg-[#faf7f0] rounded-3xl p-8 md:p-10 shadow-lg shadow-[#4a2a1e]/5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                {{-- Name --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#4a2a1e]">
                        Full Name <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" 
                               x-model="formData.name"
                               placeholder="Your name"
                               required
                               class="w-full px-4 py-3.5 pl-12 rounded-xl border border-gray-200 bg-white text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 outline-none transition-all duration-300">
                        <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                
                {{-- Email --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#4a2a1e]">
                        Email <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="email" 
                               x-model="formData.email"
                               placeholder="your@email.com"
                               required
                               class="w-full px-4 py-3.5 pl-12 rounded-xl border border-gray-200 bg-white text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 outline-none transition-all duration-300">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                {{-- Phone --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#4a2a1e]">
                        Phone
                    </label>
                    <div class="relative">
                        <input type="tel" 
                               x-model="formData.phone"
                               placeholder="0794 38 89 36"
                               class="w-full px-4 py-3.5 pl-12 rounded-xl border border-gray-200 bg-white text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 outline-none transition-all duration-300">
                        <i class="fas fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                
                {{-- Subject --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#4a2a1e]">
                        Subject <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <select x-model="formData.subject" required
                                class="w-full px-4 py-3.5 pl-12 rounded-xl border border-gray-200 bg-white text-[#4a2a1e] focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 outline-none transition-all duration-300 appearance-none cursor-pointer">
                            <option value="" disabled selected>Select a topic</option>
                            <option value="reservation">Reservation Inquiry</option>
                            <option value="feedback">Feedback</option>
                            <option value="event">Private Event</option>
                            <option value="catering">Catering</option>
                            <option value="other">Other</option>
                        </select>
                        <i class="fas fa-tag absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-xs"></i>
                    </div>
                </div>
            </div>
            
            {{-- Message --}}
            <div class="space-y-2 mb-6">
                <label class="block text-sm font-semibold text-[#4a2a1e]">
                    Message <span class="text-red-400">*</span>
                </label>
                <div class="relative">
                    <textarea x-model="formData.message"
                              rows="5"
                              placeholder="Tell us how we can help you..."
                              required
                              class="w-full px-4 py-3.5 pl-12 rounded-xl border border-gray-200 bg-white text-[#4a2a1e] placeholder-gray-400 focus:border-[#c9a961] focus:ring-2 focus:ring-[#c9a961]/20 outline-none transition-all duration-300 resize-none"></textarea>
                    <i class="fas fa-comment-alt absolute left-4 top-4 text-gray-400"></i>
                </div>
            </div>
            
            {{-- Submit --}}
            <button type="submit" 
                    :disabled="loading"
                    class="w-full bg-[#c9a961] text-[#4a2a1e] font-bold py-4 rounded-xl text-lg hover:bg-[#b8984f] transition-all duration-300 shadow-lg shadow-[#c9a961]/20 hover:shadow-xl hover:shadow-[#c9a961]/30 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-3">
                <span x-show="!loading">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </span>
                <span x-show="loading" class="flex items-center gap-2">
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                </span>
            </button>
        </form>
    </div>
</section>

{{-- ==========================================
     SOCIAL MEDIA ROW
     ========================================== --}}
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#faf7f0] border-t border-[#4a2a1e]/5 relative overflow-hidden">
    {{-- Decorative blob --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-[#c9a961]/5 to-purple-500/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto relative z-10">
        <div class="reveal-text text-center mb-12">
            <h3 class="text-2xl font-bold text-[#4a2a1e] mb-2">Follow Our Journey</h3>
            <p class="text-gray-400 text-sm">Daily updates, behind-the-scenes, and mouth-watering photos</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 stagger-children">
            {{-- Instagram --}}
            <a href="https://instagram.com/scottish_restaurant" target="_blank" 
               class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-pink-500/10 hover:-translate-y-2 transition-all duration-500 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-purple-600 via-pink-500 to-orange-400 flex items-center justify-center shadow-lg shadow-pink-500/20 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <i class="fab fa-instagram text-white text-2xl"></i>
                </div>
                <h4 class="font-bold text-[#4a2a1e] mb-1 group-hover:text-[#c9a961] transition-colors">Instagram</h4>
                <p class="text-[#c9a961] font-bold text-2xl mb-1">12.5K</p>
                <p class="text-gray-400 text-xs">followers</p>
            </a>
            
            {{-- Facebook --}}
            <a href="https://facebook.com/scottishrestaurant" target="_blank" 
               class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 text-center" style="transition-delay: 100ms;">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <i class="fab fa-facebook-f text-white text-2xl"></i>
                </div>
                <h4 class="font-bold text-[#4a2a1e] mb-1 group-hover:text-[#c9a961] transition-colors">Facebook</h4>
                <p class="text-[#c9a961] font-bold text-2xl mb-1">8.3K</p>
                <p class="text-gray-400 text-xs">followers</p>
            </a>
            
            {{-- TikTok --}}
            <a href="https://tiktok.com/@scottish_restaurant" target="_blank" 
               class="group bg-white rounded-2xl p-6 shadow-sm border border-[#4a2a1e]/5 hover:shadow-xl hover:shadow-gray-500/10 hover:-translate-y-2 transition-all duration-500 text-center" style="transition-delay: 200ms;">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-black flex items-center justify-center shadow-lg shadow-gray-500/20 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <i class="fab fa-tiktok text-white text-2xl"></i>
                </div>
                <h4 class="font-bold text-[#4a2a1e] mb-1 group-hover:text-[#c9a961] transition-colors">TikTok</h4>
                <p class="text-[#c9a961] font-bold text-2xl mb-1">24K</p>
                <p class="text-gray-400 text-xs">followers</p>
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
        <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1200&q=80'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#4a2a1e]/80 via-transparent to-[#4a2a1e]/80"></div>
    </div>
    
    {{-- Floating particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-10">
        <div class="absolute w-2 h-2 rounded-full bg-[#c9a961] top-[30%] left-[20%] animate-[float_10s_linear_infinite] opacity-30"></div>
        <div class="absolute w-1.5 h-1.5 rounded-full bg-[#c9a961] top-[60%] left-[75%] animate-[float_14s_linear_infinite_2s] opacity-20"></div>
    </div>
    
    <div class="relative z-20 max-w-4xl mx-auto text-center">
        <div class="reveal-text">
            <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-gradient-to-br from-[#c9a961]/20 to-[#c9a961]/5 flex items-center justify-center shadow-lg shadow-[#c9a961]/10">
                <i class="fas fa-phone-alt text-[#c9a961] text-3xl"></i>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Prefer to <span class="text-[#c9a961] italic font-['Playfair_Display']">Call</span>?
            </h2>
            <p class="text-white/60 text-lg max-w-2xl mx-auto mb-12 leading-relaxed">
                Our team is available daily from 10 AM to 11 PM. Call us for instant reservations and personalized service.
            </p>
            
            <a href="tel:0794388936" 
               class="inline-flex items-center gap-4 bg-white text-[#4a2a1e] px-10 py-5 rounded-full font-bold text-xl hover:bg-[#c9a961] hover:text-[#4a2a1e] transition-all duration-300 shadow-xl hover:shadow-2xl hover:shadow-[#c9a961]/30 hover:-translate-y-1 group">
                <div class="w-12 h-12 rounded-full bg-[#4a2a1e] flex items-center justify-center group-hover:bg-white transition-colors duration-300">
                    <i class="fas fa-phone-alt text-[#c9a961] group-hover:text-[#4a2a1e] transition-colors duration-300"></i>
                </div>
                <div class="text-left">
                    <div class="text-xs font-normal opacity-60">Call us now</div>
                    <div>0794 38 89 36</div>
                </div>
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script>
function contactForm() {
    return {
        formData: {
            name: '',
            email: '',
            phone: '',
            subject: '',
            message: ''
        },
        loading: false,
        submitted: false,
        error: false,
        
        submitForm() {
            this.loading = true;
            this.error = false;
            
            // Simulate API call
            setTimeout(() => {
                this.loading = false;
                
                // Random success (95% of the time)
                if (Math.random() > 0.05) {
                    this.submitted = true;
                    window.scrollTo({ top: document.querySelector('section').offsetHeight - 100, behavior: 'smooth' });
                } else {
                    this.error = true;
                }
            }, 1500);
        }
    }
}
</script>
@endpush

@endsection