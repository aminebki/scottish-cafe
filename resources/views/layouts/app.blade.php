<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Scottish Restaurant') — Pizza au feu de bois & Café</title>
    
    {{-- Preconnect for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://images.unsplash.com">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    {{-- Tailwind + Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        :root {
            --scottish-brown: #4a2a1e;
            --scottish-gold: #c9a961;
            --scottish-cream: #faf7f0;
            --text-dark: #2c2c2c;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--scottish-cream);
            color: var(--text-dark);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Smooth scroll with easing */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar - premium thin style */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--scottish-gold), var(--scottish-brown));
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--scottish-gold);
        }
        
        /* ==========================================
           ANIMATION SYSTEM
           ========================================== */
        
        /* Fade up with stagger */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), 
                        transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Scale reveal for images */
        .reveal-scale {
            opacity: 0;
            transform: scale(0.92);
            transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), 
                        transform 1s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-scale.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Text reveal - line by line */
        .reveal-text {
            opacity: 0;
            transform: translateY(20px);
            filter: blur(4px);
            transition: opacity 0.6s ease, 
                        transform 0.6s ease,
                        filter 0.6s ease;
        }
        .reveal-text.visible {
            opacity: 1;
            transform: translateY(0);
            filter: blur(0);
        }
        
        /* Stagger children */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .stagger-children.visible > *:nth-child(1) { transition-delay: 0ms; opacity: 1; transform: translateY(0); }
        .stagger-children.visible > *:nth-child(2) { transition-delay: 100ms; opacity: 1; transform: translateY(0); }
        .stagger-children.visible > *:nth-child(3) { transition-delay: 200ms; opacity: 1; transform: translateY(0); }
        .stagger-children.visible > *:nth-child(4) { transition-delay: 300ms; opacity: 1; transform: translateY(0); }
        .stagger-children.visible > *:nth-child(5) { transition-delay: 400ms; opacity: 1; transform: translateY(0); }
        .stagger-children.visible > *:nth-child(6) { transition-delay: 500ms; opacity: 1; transform: translateY(0); }
        
        /* ==========================================
           PARALLAX & HOVER EFFECTS
           ========================================== */
        
        /* True parallax container */
        .parallax-container {
            overflow: hidden;
            position: relative;
        }
        .parallax-bg {
            will-change: transform;
            transition: transform 0.1s linear;
        }
        
        /* Ken Burns effect */
          @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }   
        @keyframes kenBurns {
            0% { transform: scale(1) translate(0, 0); }
            50% { transform: scale(1.08) translate(-1%, -1%); }
            100% { transform: scale(1) translate(0, 0); }
        }
        .ken-burns {
            animation: kenBurns 20s ease-in-out infinite;
        }
        
        /* Image grayscale to color */
        .img-reveal {
            filter: grayscale(100%) brightness(0.9);
            transition: filter 0.8s ease, transform 0.8s ease;
        }
        .img-reveal:hover, .group:hover .img-reveal {
            filter: grayscale(0%) brightness(1);
        }
        
        /* ==========================================
           GLASSMORPHISM
           ========================================== */
        
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px) saturate(1.2);
            -webkit-backdrop-filter: blur(20px) saturate(1.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .glass-dark {
            background: rgba(74, 42, 30, 0.7);
            backdrop-filter: blur(20px) saturate(1.2);
            -webkit-backdrop-filter: blur(20px) saturate(1.2);
            border: 1px solid rgba(201, 169, 97, 0.2);
        }
        
        /* ==========================================
           MAGNETIC BUTTON
           ========================================== */
        
        .magnetic-btn {
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        /* ==========================================
           FLOATING PARTICLES
           ========================================== */
        
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); opacity: 0.4; }
            25% { transform: translateY(-20px) translateX(10px); opacity: 0.8; }
            50% { transform: translateY(-10px) translateX(-5px); opacity: 0.6; }
            75% { transform: translateY(-30px) translateX(5px); opacity: 0.3; }
        }
        .particle {
            position: absolute;
            border-radius: 50%;
            background: var(--scottish-gold);
            pointer-events: none;
            animation: float linear infinite;
        }
        
        /* ==========================================
           LOADING STATES
           ========================================== */
        
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(201, 169, 97, 0.1), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        
        /* ==========================================
           CURSOR GLOW (desktop only)
           ========================================== */
        
        @media (hover: hover) and (pointer: fine) {
            .cursor-glow {
                position: fixed;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(201, 169, 97, 0.08) 0%, transparent 70%);
                pointer-events: none;
                z-index: 9999;
                transform: translate(-50%, -50%);
                transition: opacity 0.3s ease;
                opacity: 0;
            }
            body:hover .cursor-glow {
                opacity: 1;
            }
        }
        
        /* ==========================================
           PAGE TRANSITION
           ========================================== */
        
       
        
        /* ==========================================
           NOISE TEXTURE OVERLAY
           ========================================== */
        
        .noise-overlay::before {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
        @keyframes float {
    0%, 100% { transform: translateY(0) translateX(0); opacity: 0.3; }
    25% { transform: translateY(-20px) translateX(10px); opacity: 0.6; }
    50% { transform: translateY(-10px) translateX(-5px); opacity: 0.4; }
    75% { transform: translateY(-30px) translateX(5px); opacity: 0.2; }
}

@keyframes kenBurns {
    0% { transform: scale(1) translate(0, 0); }
    50% { transform: scale(1.08) translate(-1%, -1%); }
    100% { transform: scale(1) translate(0, 0); }
}
    </style>
    
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-[#c9a961] selection:text-[#4a2a1e]">
    
    {{-- Cursor glow effect --}}
    <div class="cursor-glow hidden lg:block" id="cursorGlow"></div>
    
    {{-- Page transition overlay --}}
    
    
    @include('components.navbar')
    
    <main class="flex-grow relative">
        @yield('content')
    </main>
    
    @include('components.footer')
    
    {{-- ==========================================
         GLOBAL SCRIPTS
         ========================================== --}}
    <script>
        // ==========================================
        // INTERSECTION OBSERVER - REVEAL ANIMATIONS
        // ==========================================
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Optional: unobserve after first reveal
                        // observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe all reveal elements
            document.querySelectorAll('.reveal, .reveal-scale, .reveal-text, .stagger-children').forEach(el => {
                observer.observe(el);
            });
        });
        
        // ==========================================
        // PARALLAX SCROLL EFFECT
        // ==========================================
                let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const heroParallax = document.getElementById('heroParallax');
            
            if (heroParallax) {
                const speed = 0.4;
                const yPos = -(scrolled * speed);
                heroParallax.style.transform = `translate3d(0, ${yPos}px, 0)`;
            }
            
            ticking = false;
        });
        ticking = true;
    }
});

        
        // ==========================================
        // CURSOR GLOW EFFECT
        // ==========================================
        const cursorGlow = document.getElementById('cursorGlow');
        if (cursorGlow && window.matchMedia('(hover: hover)').matches) {
            document.addEventListener('mousemove', (e) => {
                cursorGlow.style.left = e.clientX + 'px';
                cursorGlow.style.top = e.clientY + 'px';
            });
        }
        
        // ==========================================
        // MAGNETIC BUTTONS
        // ==========================================
        document.querySelectorAll('.magnetic-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translate(0, 0)';
            });
        });
        
        // ==========================================
        // NAVBAR SCROLL BEHAVIOR (hide on down, show on up)
        // ==========================================
        
    </script>
    
    @stack('scripts')
</body>
</html>