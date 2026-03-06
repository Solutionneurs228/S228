/* dropdown.css */


/**
 * DROPDOWN MENU CONTROLLER - Solutionneurs228
 * Gère le dropdown Services pour desktop (hover) et mobile (click)
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // MOBILE MENU EXISTANT (conservé)
    // ==========================================
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuOverlay = document.getElementById('menu-overlay');

    function toggleMobileMenu() {
        const isOpen = mobileMenu.classList.contains('open');
        
        if (isOpen) {
            mobileMenu.classList.remove('open');
            menuOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            // Reset icon
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        } else {
            mobileMenu.classList.add('open');
            menuOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            // Change icon
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    if (menuOverlay) {
        menuOverlay.addEventListener('click', toggleMobileMenu);
    }

    // Fermer le menu mobile au clic sur un lien (sauf dropdown)
    document.querySelectorAll('#mobile-menu a:not(.dropdown-trigger):not(.dropdown-item)').forEach(link => {
        link.addEventListener('click', toggleMobileMenu);
    });

    // ==========================================
    // DROPDOWN MOBILE - Services
    // ==========================================
    const mobileDropdownTrigger = document.getElementById('mobile-dropdown-trigger');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    const mobileDropdownChevron = document.getElementById('mobile-dropdown-chevron');

    if (mobileDropdownTrigger && mobileDropdownMenu) {
        mobileDropdownTrigger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Toggle classes
            mobileDropdownMenu.classList.toggle('active');
            mobileDropdownChevron.classList.toggle('active');
            mobileDropdownTrigger.classList.toggle('active');
        });

        // Fermer le dropdown au clic sur un item
        mobileDropdownMenu.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function() {
                toggleMobileMenu(); // Ferme tout le menu mobile
            });
        });
    }

    // ==========================================
    // FERMETURE AU CLIC EXTERIEUR (mobile)
    // ==========================================
    document.addEventListener('click', function(e) {
        // Fermer le dropdown mobile si clic ailleurs
        if (mobileDropdownMenu && mobileDropdownMenu.classList.contains('active')) {
            if (!mobileDropdownTrigger.contains(e.target) && !mobileDropdownMenu.contains(e.target)) {
                mobileDropdownMenu.classList.remove('active');
                mobileDropdownChevron.classList.remove('active');
                mobileDropdownTrigger.classList.remove('active');
            }
        }
    });

    // ==========================================
    // TOUCHE ECHAP
    // ==========================================
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Fermer menu mobile
            if (mobileMenu && mobileMenu.classList.contains('open')) {
                toggleMobileMenu();
            }
            // Fermer dropdown mobile
            if (mobileDropdownMenu && mobileDropdownMenu.classList.contains('active')) {
                mobileDropdownMenu.classList.remove('active');
                mobileDropdownChevron.classList.remove('active');
                mobileDropdownTrigger.classList.remove('active');
            }
        }
    });
});