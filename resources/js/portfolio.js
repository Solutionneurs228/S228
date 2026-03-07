// Données des projets pour les modals
const projectsData = {
    'projet1': {
        title: 'Marketplace Afrique Shop',
        category: 'Développement Web',
        date: '2024',
        description: 'Plateforme e-commerce multi-vendeurs permettant aux commerçants africains de vendre leurs produits en ligne. Intégration des paiements mobiles locaux (TMoney, Flooz) et système de gestion logistique intégré.',
        client: 'Afrique Shop SARL',
        duration: '3 mois',
        technologies: ['Laravel', 'Vue.js', 'MySQL', 'API Mobile Money', 'Docker'],
        results: [
            '150+ vendeurs inscrits en 3 mois',
            '10 000+ commandes traitées',
            'Réduction de 40% des coûts logistiques'
        ],
        gradient: 'linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%)',
        icon: '🛒'
    },
    'projet2': {
        title: 'Finances Plus Microfinance',
        category: 'Design Graphique',
        date: '2024',
        description: 'Refonte complète de l\'identité visuelle d\'une institution financière majeure au Togo. Création d\'une image moderne et rassurante pour attirer une clientèle plus jeune.',
        client: 'Finances Plus SA',
        duration: '6 semaines',
        technologies: ['Adobe Illustrator', 'Adobe InDesign', 'Figma', 'Print'],
        results: [
            'Notoriété de la marque +35%',
            'Nouveaux clients -25 ans x2',
            'Reconnaissance immédiate du logo'
        ],
        gradient: 'linear-gradient(135deg, #be185d 0%, #ec4899 100%)',
        icon: '🏦'
    },
    'projet3': {
        title: 'Sommet Tech Africa 2024',
        category: 'Photo & Vidéo',
        date: '2024',
        description: 'Couverture média complète du plus grand événement tech de la sous-région. Production de contenu pour les réseaux sociaux, documentation des conférences et création d\'un aftermovie percutant.',
        client: 'Tech Africa Organisation',
        duration: '3 jours événement + 1 semaine post-production',
        technologies: ['Sony A7IV', 'DJI Mavic 3', 'Premiere Pro', 'After Effects', 'Livestream'],
        results: [
            '2M+ vues sur les contenus produits',
            'Aftermovie viral (500k vues)',
            'Couverture live sans interruption'
        ],
        gradient: 'linear-gradient(135deg, #065f46 0%, #10b981 100%)',
        icon: '🎉'
    },
    'projet4': {
        title: 'App Livraison Express "Koliko"',
        category: 'Développement Web',
        date: '2023',
        description: 'Application mobile de livraison de repas à la demande, inspirée des grandes plateformes internationales mais adaptée au contexte local avec paiement cash et mobile money.',
        client: 'Koliko Delivery',
        duration: '4 mois',
        technologies: ['React Native', 'Node.js', 'MongoDB', 'Google Maps API', 'Firebase'],
        results: [
            '50 000+ téléchargements',
            'Partenariat avec 80 restaurants',
            'Temps moyen de livraison : 25 min'
        ],
        gradient: 'linear-gradient(135deg, #0f172a 0%, #1e40af 100%)',
        icon: '📱'
    },
    'projet5': {
        title: 'Spot TV "Togo Émergent"',
        category: 'Vidéo & Design',
        date: '2023',
        description: 'Production d\'un spot publicitaire de 30 secondes pour une campagne de sensibilisation gouvernementale. Tournage dans 5 régions du pays avec reconstitution historique et motion design.',
        client: 'Ministère de la Communication',
        duration: '1 mois',
        technologies: ['Red Komodo', 'Ronin RS3', 'After Effects', 'DaVinci Resolve', 'Maya 3D'],
        results: [
            'Diffusion sur 12 chaînes TV',
            'Reach estimé : 3M personnes',
            'Prix du meilleur spot institutionnel'
        ],
        gradient: 'linear-gradient(135deg, #7c2d12 0%, #f97316 100%)',
        icon: '📺'
    },
    'projet6': {
        title: 'Shooting Équipe Directoire',
        category: 'Photographie',
        date: '2023',
        description: 'Séance photo corporate en studio pour le renouvellement de l\'image de marque d\'un cabinet d\'avocats international. Mise en valeur de la diversité et du professionnalisme de l\'équipe.',
        client: 'Cabinet Juridique International',
        duration: '2 jours',
        technologies: ['Canon R5', 'Éclairage Profoto', 'Capture One', 'Photoshop'],
        results: [
            'Nouveau site corporate +200% de trafic',
            'Photos utilisées dans 12 pays',
            'Satisfaction client : 10/10'
        ],
        gradient: 'linear-gradient(135deg, #064e3b 0%, #059669 100%)',
        icon: '👔'
    },
    'projet7': {
        title: 'Restaurant "Saveurs d\'Afrique"',
        category: 'Développement Web',
        date: '2023',
        description: 'Site vitrine gourmand pour un restaurant haut de gamme spécialisé dans la cuisine africaine revisitée. Expérience utilisateur immersive avec photos grand format et animations élégantes.',
        client: 'Saveurs d\'Afrique',
        duration: '6 semaines',
        technologies: ['WordPress', 'PHP', 'GSAP', 'Lightbox', 'SEO local'],
        results: [
            'Réservations en ligne +150%',
            'Positionnement Google Maps #1',
            'Temps sur site : 4 min moyenne'
        ],
        gradient: 'linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%)',
        icon: '🍽️'
    },
    'projet8': {
        title: 'Ligne de Cosmétiques "Natura"',
        category: 'Design Graphique',
        date: '2022',
        description: 'Conception packaging pour une marque de cosmétiques bio made in Togo. Design épuré mettant en valeur les ingrédients naturels avec finitions print haut de gamme (vernis sélectif, dorure).',
        client: 'Natura Beauty',
        duration: '2 mois',
        technologies: ['Illustrator', 'Photoshop', 'Blender 3D', 'Packly'],
        results: [
            'Disponible dans 45 points de vente',
            'Prix du meilleur packaging 2023',
            'Ventes +80% après redesign'
        ],
        gradient: 'linear-gradient(135deg, #831843 0%, #db2777 100%)',
        icon: '📦'
    },
    'projet9': {
        title: 'Documentaire "Tech au Féminin"',
        category: 'Production Vidéo',
        date: '2022',
        description: 'Documentaire de 15 minutes sur les femmes pionnières de la tech au Togo. Production indépendante sélectionnée dans 3 festivals internationaux du film documentaire.',
        client: 'Projet indépendant / ONG',
        duration: '6 mois (tournage + post)',
        technologies: ['Sony FX6', 'Tournage multi-sites', 'Premiere Pro', 'Color grading cinéma'],
        results: [
            'Sélection Festival de Cannes (court métrage)',
            'Diffusion TV5 Monde',
            'Impact politique : subvention état pour femmes tech'
        ],
        gradient: 'linear-gradient(135deg, #9a3412 0%, #ea580c 100%)',
        icon: '🎥'
    }
};

// Gestion des filtres
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const emptyState = document.getElementById('empty-state');
    const grid = document.getElementById('portfolio-grid');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');
            let visibleCount = 0;

            portfolioItems.forEach(item => {
                const categories = item.getAttribute('data-category').split(' ');
                
                if (filter === 'all' || categories.includes(filter)) {
                    item.classList.remove('hidden');
                    item.style.display = 'block';
                    visibleCount++;
                    
                    // Reset animation
                    item.style.animation = 'none';
                    setTimeout(() => {
                        item.style.animation = `fadeInUp 0.6s ease forwards`;
                    }, 10);
                } else {
                    item.classList.add('hidden');
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 400);
                }
            });

            // Show/hide empty state
            if (visibleCount === 0) {
                emptyState.style.display = 'block';
                grid.style.display = 'none';
            } else {
                emptyState.style.display = 'none';
                grid.style.display = 'grid';
            }
        });
    });
});

// Modal functions
function openModal(projectId) {
    const modal = document.getElementById('portfolio-modal');
    const modalBody = document.getElementById('modal-body');
    const project = projectsData[projectId];

    if (!project) return;

    // Generate modal content
    modalBody.innerHTML = `
        <div class="modal-header" style="background: ${project.gradient}; padding: 40px; margin: -40px -40px 30px -40px; border-radius: 24px 24px 0 0; text-align: center; color: white;">
            <div style="font-size: 4rem; margin-bottom: 15px;">${project.icon}</div>
            <span style="display: inline-block; padding: 5px 15px; background: rgba(255,255,255,0.2); border-radius: 20px; font-size: 0.85rem; margin-bottom: 15px;">${project.category}</span>
            <h2 style="font-size: 2rem; margin: 0;">${project.title}</h2>
        </div>
        
        <div class="modal-details">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px; text-align: center;">
                <div style="padding: 20px; background: var(--bg-input); border-radius: 12px;">
                    <div style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 5px;">Client</div>
                    <div style="color: var(--text-primary); font-weight: 600;">${project.client}</div>
                </div>
                <div style="padding: 20px; background: var(--bg-input); border-radius: 12px;">
                    <div style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 5px;">Durée</div>
                    <div style="color: var(--text-primary); font-weight: 600;">${project.duration}</div>
                </div>
                <div style="padding: 20px; background: var(--bg-input); border-radius: 12px;">
                    <div style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 5px;">Année</div>
                    <div style="color: var(--text-primary); font-weight: 600;">${project.date}</div>
                </div>
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 1.1rem;">Description du projet</h3>
            <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 25px;">${project.description}</p>
            
            <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 1.1rem;">Technologies utilisées</h3>
            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 25px;">
                ${project.technologies.map(tech => `<span style="padding: 8px 16px; background: var(--bg-input); border: 1px solid var(--border); border-radius: 20px; color: var(--text-secondary); font-size: 0.85rem;">${tech}</span>`).join('')}
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 1.1rem;">Résultats clés</h3>
            <ul style="list-style: none; padding: 0;">
                ${project.results.map(result => `
                    <li style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px; color: var(--text-secondary);">
                        <span style="color: var(--primary); font-size: 1.2rem;">✓</span>
                        ${result}
                    </li>
                `).join('')}
            </ul>
            
            <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid var(--border); text-align: center;">
                <p style="color: var(--text-muted); margin-bottom: 15px;">Vous avez un projet similaire ?</p>
                <a href="/devis" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 28px; background: var(--primary); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; transition: all 0.3s;">
                    <span>📋 Demander un devis similaire</span>
                </a>
            </div>
        </div>
    `;

    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('portfolio-modal');
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
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