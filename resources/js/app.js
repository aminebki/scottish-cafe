import './bootstrap';

// Scroll-triggered animations
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Optional: unobserve after animation
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements with scroll-animate class
    document.querySelectorAll('.scroll-animate').forEach(el => {
        observer.observe(el);
    });

    // Lazy image loading with blur effect
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));
});

// Alpine.js data for lightbox
document.addEventListener('alpine:init', () => {
    Alpine.data('lightbox', () => ({
        open: false,
        imageSrc: '',
        caption: '',

        init() {
            this.$el.addEventListener('open-lightbox', (e) => {
                this.imageSrc = e.detail.src;
                this.caption = e.detail.caption;
                this.open = true;
                document.body.style.overflow = 'hidden';
            });
        },

        close() {
            this.open = false;
            document.body.style.overflow = '';
        }
    }));

    // Testimonial carousel
    Alpine.data('testimonialCarousel', () => ({
        current: 0,
        autoplay: null,

        init() {
            this.startAutoplay();
        },

        startAutoplay() {
            this.autoplay = setInterval(() => {
                this.next();
            }, 5000);
        },

        stopAutoplay() {
            clearInterval(this.autoplay);
        },

        next() {
            const total = this.$refs.slides.children.length;
            this.current = (this.current + 1) % total;
        },

        prev() {
            const total = this.$refs.slides.children.length;
            this.current = (this.current - 1 + total) % total;
        },

        goTo(index) {
            this.current = index;
        }
    }));

    // Gallery filter
    Alpine.data('galleryFilter', () => ({
        activeFilter: 'all',

        filter(category) {
            this.activeFilter = category;
        },

        isVisible(category) {
            return this.activeFilter === 'all' || this.activeFilter === category;
        }
    }));

    // Mobile menu
    Alpine.data('mobileMenu', () => ({
        open: false,

        toggle() {
            this.open = !this.open;
            document.body.style.overflow = this.open ? 'hidden' : '';
        },

        close() {
            this.open = false;
            document.body.style.overflow = '';
        }
    }));
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar scroll effect (backup if Alpine fails)
let lastScroll = 0;
const navbar = document.querySelector('nav');
if (navbar) {
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;

        if (currentScroll > 50) {
            navbar.classList.add('bg-scottish-brown/95', 'backdrop-blur-md', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-scottish-brown/95', 'backdrop-blur-md', 'shadow-lg');
            navbar.classList.add('bg-transparent');
        }

        lastScroll = currentScroll;
    });
}
