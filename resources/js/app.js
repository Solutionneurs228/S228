// ==========================================
// IMPORTS
// ==========================================

// Font Awesome
import '@fortawesome/fontawesome-free/css/all.min.css';

// Alpine.js
import Alpine from 'alpinejs';

// Votre CSS Tailwind
import '../css/style.css';

console.log("App loaded");
alert("App loaded");
// ==========================================
// ALPINE.JS
// ==========================================

window.Alpine = Alpine;
Alpine.start();

// ==========================================
// APP INITIALIZATION
// ==========================================

document.addEventListener('DOMContentLoaded', () => {
    console.log('Solutionneurs228 app loaded');
});

// ==========================================
// MOBILE MENU
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');

    function openMobileMenu() {
        if (mobileMenu) mobileMenu.classList.add('open');
        if (mobileOverlay) mobileOverlay.classList.add('visible');
        document.body.style.overflow = 'hidden';

        if (mobileMenuBtn) {
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        }
    }

    function closeMobileMenu() {
        if (mobileMenu) mobileMenu.classList.remove('open');
        if (mobileOverlay) mobileOverlay.classList.remove('visible');
        document.body.style.overflow = '';

        if (mobileMenuBtn) {
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        }
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (mobileMenu && mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            closeMobileMenu();
        });
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function(e) {
            e.preventDefault();
            closeMobileMenu();
        });
    }

    // Fermer au clic sur un lien
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            closeMobileMenu();
        });
    });

    // ==========================================
    // MOBILE DROPDOWN
    // ==========================================

    const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
    const mobileDropdownContent = document.getElementById('mobile-dropdown-content');
    const mobileDropdownIcon = document.getElementById('mobile-dropdown-icon');

    if (mobileDropdownBtn && mobileDropdownContent) {
        mobileDropdownBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = mobileDropdownContent.classList.contains('open');

            if (isOpen) {
                mobileDropdownContent.classList.remove('open');
                mobileDropdownContent.classList.add('hidden');
                if (mobileDropdownIcon) mobileDropdownIcon.classList.remove('rotate');
                mobileDropdownBtn.classList.remove('active');
            } else {
                mobileDropdownContent.classList.remove('hidden');
                setTimeout(() => {
                    mobileDropdownContent.classList.add('open');
                }, 10);
                if (mobileDropdownIcon) mobileDropdownIcon.classList.add('rotate');
                mobileDropdownBtn.classList.add('active');
            }
        });
    }

    // ==========================================
    // HERO SLIDER
    // ==========================================

    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (dots[i]) {
                    dots[i].classList.remove('active', 'bg-white');
                    dots[i].classList.add('bg-white/50');
                }
                if (i === index) {
                    slide.classList.add('active');
                    if (dots[i]) {
                        dots[i].classList.add('active', 'bg-white');
                        dots[i].classList.remove('bg-white/50');
                    }
                }
            });
            currentSlide = index;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            let prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
        }

        if (dots.length) {
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                    resetInterval();
                });
            });
        }

        function startInterval() {
            slideInterval = setInterval(nextSlide, 6000);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        startInterval();
    }

    // ==========================================
    // NAVBAR SCROLL
    // ==========================================

    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
    }

    // ==========================================
    // SMOOTH SCROLL
    // ==========================================

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ==========================================
    // TOUCHE ECHAP
    // ==========================================

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMobileMenu();

            if (mobileDropdownContent && mobileDropdownContent.classList.contains('open')) {
                mobileDropdownContent.classList.remove('open');
                mobileDropdownContent.classList.add('hidden');
                if (mobileDropdownIcon) mobileDropdownIcon.classList.remove('rotate');
                if (mobileDropdownBtn) mobileDropdownBtn.classList.remove('active');
            }
        }
    });
});
