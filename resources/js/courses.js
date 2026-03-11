/* resources/js/courses.js */
// resources/js/courses.js

document.addEventListener('DOMContentLoaded', function() {
    
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observer les cartes de formation
    document.querySelectorAll('.course-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        observer.observe(card);
    });

    // Accordion des modules (page détail)
    const moduleHeaders = document.querySelectorAll('.module-header');
    moduleHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isOpen = content.style.display === 'block';
            
            // Fermer tous les autres
            document.querySelectorAll('.module-content').forEach(c => {
                c.style.display = 'none';
            });
            
            // Ouvrir/fermer celui-ci
            content.style.display = isOpen ? 'none' : 'block';
        });
    });

    // Ouvrir le premier module par défaut
    const firstModule = document.querySelector('.module-content');
    if (firstModule) {
        firstModule.style.display = 'block';
    }

    // Filtres mobiles - toggle
    const filtersToggle = document.querySelector('.filters-toggle');
    const filtersForm = document.querySelector('.filters-form');
    
    if (filtersToggle && filtersForm) {
        filtersToggle.addEventListener('click', () => {
            filtersForm.classList.toggle('is-open');
        });
    }
});