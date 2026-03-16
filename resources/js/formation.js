/**
 * Catalogue Formations - Filtres
 */

document.addEventListener('DOMContentLoaded', function() {
    const filtresBtns = document.querySelectorAll('.filtre-btn');
    const formationCards = document.querySelectorAll('.formation-card');

    filtresBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filtresBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filtre = this.dataset.filtre;

            formationCards.forEach(card => {
                const niveau = card.dataset.niveau.toLowerCase();
                
                if (filtre === 'tous' || niveau === filtre) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeInUp 0.4s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    `;
    document.head.appendChild(style);
});