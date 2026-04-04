@extends('layouts.base')

@section('title', 'Nos Formations Professionnelles')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/formation.css') }}"> --}}
    @vite(['resources/css/formation.css'])
@endpush

@section('content')
@php
// Données des formations (statique, pas de BDD)
$formations = [
    [
        'titre' => 'Initiation à l\'informatique',
        'description' => 'Connaissances de base en informatique',
        'duree' => '3 semaines',
        'niveau' => 'debutant',
        'formateur' => 'Gilbert ALOUA',
        'prix' => 20000,
        'ancien_prix' => null,
        'image' => null,
        'prerequis' => 'Aucun',
        'certification' => 'Attestation de fin de formation',
        'points' => ['Windows', 'Word', 'Excel', 'Powerpoint']
    ],

    [
        'titre' => 'Bureautique Avancée',
        'description' => 'Perfectionnez-vous sur Word, Excel, PowerPoint... Automatisez vos tâches et gagnez en productivité au quotidien.',
        'duree' => '2 mois',
        'niveau' => 'debutant',
        'formateur' => 'Gilbert ALOUA',
        'prix' => 50000,
        'ancien_prix' => null,
        'image' => null,
        'prerequis' => 'Aucun',
        'certification' => 'Attestation de formation',
        'points' => ['Windows', 'Word avancé', 'Excel avancé', 'PowerPoint avancé', 'Internet']
    ],

    [
        'titre' => 'Design Graphique & UI/UX',
        'description' => 'Devenez designer professionnel. Maîtrisez Photoshop, Illustrator, Figma et créez des interfaces utilisateur modernes et attractives.',
        'duree' => '4 mois',
        'niveau' => 'debutant',
        'formateur' => 'Xieme communication',
        'prix' => 120000,
        'ancien_prix' => 150000,
        'image' => null,
        'prerequis' => 'Aucun',
        'certification' => 'Certificat designer UI/UX',
        'points' => ['Photoshop', 'Illustrator', 'Figma', 'Prototypage', 'Design system']
    ],

    [
        'titre' => 'Développement Web Full Stack',
        'description' => 'Maîtrisez HTML, CSS, JavaScript, PHP et Laravel. Créez des applications web complètes de A à Z avec les meilleures pratiques du métier.',
        'duree' => '6 mois',
        'niveau' => 'debutant',
        'formateur' => 'Gilbert ALOUA',
        'prix' => 150000,
        'ancien_prix' => 200000,
        'image' => null,
        'prerequis' => 'Aucun',
        'certification' => 'Certificat de développeur web',
        'points' => ['HTML5/CSS3', 'JavaScript', 'PHP/Laravel', 'MySQL', 'Déploiement']
    ],

    [
        'titre' => 'Marketing Digital & Réseaux Sociaux',
        'description' => 'Apprenez à créer des stratégies marketing efficaces, gérer des campagnes publicitaires et analyser vos performances sur tous les réseaux sociaux.',
        'duree' => '3 mois',
        'niveau' => 'intermediaire',
        'formateur' => 'Xieme communication',
        'prix' => 115000,
        'ancien_prix' => null,
        'image' => null,
        'prerequis' => 'Connaissances base informatique',
        'certification' => 'Certificat marketing digital',
        'points' => ['Facebook Ads', 'Google Ads', 'SEO/SEA', 'Analytics', 'Content marketing']
    ],

    [
        'titre' => 'Photographie & vidéographie',
        'description' => 'Apprenez les techniques de prise de vues, filmage et montage vidéo',
        'duree' => '9 mois',
        'niveau' => 'avance',
        'formateur' => 'Gilbert ALOUA',
        'prix' => 200000,
        'ancien_prix' => 250000,
        'image' => null,
        'prerequis' => '',
        'certification' => 'CAP',
        'points' => ['prise de vues', 'traitement de photos pro', 'techniques de cadrage pro', 'montage vidéo']
    ],
    
    [
        'titre' => 'Installation de Systèmes d\'exploitation & logiciels',
        'description' => 'Apprenez à installer les systèmes d\'exploitation et les logiciels de plusieurs types',
        'duree' => '9 mois',
        'niveau' => 'débutant',
        'formateur' => 'Gilbert ALOUA',
        'prix' => 200000,
        'ancien_prix' => 250000,
        'image' => null,
        'prerequis' => '',
        'certification' => 'CAP',
        'points' => ['Windows 7, 8, 10, 11 ...', 'installation de logiciels', 'activation de logiciels', 'bonus surprise']
    ],
    

    [
        'titre' => 'Gestion de Projet & Agile',
        'description' => 'Apprenez les méthodes agiles (Scrum, Kanban) et les outils de gestion de projet pour mener vos équipes vers la réussite.',
        'duree' => '3 mois',
        'niveau' => 'avance',
        'formateur' => 'chef DABANA',
        'prix' => 180000,
        'ancien_prix' => 220000,
        'image' => null,
        'prerequis' => 'Expérience professionnelle',
        'certification' => 'Certificat Scrum Master',
        'points' => ['Scrum', 'Kanban', 'Jira/Trello', 'Gestion d\'équipe', 'Rapports KPI']
    ]
    
];
@endphp

<div class="catalogue-container">
    <!-- En-tête -->
    <header class="catalogue-header">
        <h1>Nos Formations Professionnelles</h1>
        <p>Des programmes complets pour booster votre carrière. Contactez-nous directement sur WhatsApp pour vous inscrire ou obtenir plus d'informations.</p>
        
        <a href="https://wa.me/22892671533" target="_blank" class="btn-whatsapp-main">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            Contact WhatsApp : +228 92 67 15 33
        </a>
    </header>

    <!-- Filtres -->
    <div class="filtres-container">
        <button class="filtre-btn active" data-filtre="tous">Toutes</button>
        <button class="filtre-btn" data-filtre="debutant">Débutant</button>
        <button class="filtre-btn" data-filtre="intermediaire">Intermédiaire</button>
        <button class="filtre-btn" data-filtre="avance">Avancé</button>
    </div>

    <!-- Grille formations -->
    <div class="formations-grid">
        @forelse($formations as $formation)
            <article class="formation-card" data-niveau="{{ $formation['niveau'] }}">
                <!-- Image -->
                <div class="formation-image">
                    @if($formation['image'])
                        <img src="{{ asset($formation['image']) }}" alt="{{ $formation['titre'] }}">
                    @else
                        <div class="image-placeholder">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                    @endif
                    <span class="niveau-badge">{{ $formation['niveau'] }}</span>
                </div>

                <!-- Contenu -->
                <div class="formation-contenu">
                    <h2>{{ $formation['titre'] }}</h2>
                    
                    <p class="formation-description">{{ $formation['description'] }}</p>
                    
                    <!-- Points clés -->
                    <div class="points-cles">
                        @foreach($formation['points'] as $point)
                            <span class="point-tag">{{ $point }}</span>
                        @endforeach
                    </div>
                    
                    <!-- Détails -->
                    <div class="formation-details">
                        <div class="detail-item">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 6v6l4 2"/>
                            </svg>
                            <span><strong>Durée :</strong> {{ $formation['duree'] }}</span>
                        </div>
                        
                        <div class="detail-item">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <span><strong>Formateur :</strong> {{ $formation['formateur'] }}</span>
                        </div>
                        
                        <div class="detail-item">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor">
                                <path d="M9 11l3 3L22 4"/>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                            <span><strong>Prérequis :</strong> {{ $formation['prerequis'] }}</span>
                        </div>
                        
                        <div class="detail-item">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor">
                                <circle cx="12" cy="8" r="7"/>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                            </svg>
                            <span><strong>Certification :</strong> {{ $formation['certification'] }}</span>
                        </div>
                    </div>

                    <!-- Prix -->
                    <div class="formation-prix">
                        <span class="prix">{{ number_format($formation['prix'], 0, ',', ' ') }} FCFA</span>
                        @if($formation['ancien_prix'])
                            <span class="ancien-prix">{{ number_format($formation['ancien_prix'], 0, ',', ' ') }} FCFA</span>
                            <span class="reduction">-{{ round((1 - $formation['prix']/$formation['ancien_prix']) * 100) }}%</span>
                        @endif
                    </div>

                    <!-- Actions WhatsApp -->
                    <div class="formation-actions">
                        <a href="{{ route('inscription') }}" 
                           target="_blank" 
                           class="btn-inscrire">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            S'inscrire
                        </a>
                        
                        <a href="https://wa.me/22892671533?text=Bonjour, j'ai des questions sur la formation : {{ urlencode($formation['titre']) }}" 
                           target="_blank" 
                           class="btn-renseigner">
                            Renseignements
                        </a>
                    </div>
                </div>
            </article>
        @empty
            <div class="aucune-formation">
                <svg viewBox="0 0 24 24" width="64" height="64" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 12h8M12 8v8"/>
                </svg>
                <p>Aucune formation disponible pour le moment.</p>
            </div>
        @endforelse
    </div>

    <!-- Contact fixe -->
    <div class="contact-fixe">
        <a href="https://wa.me/22892671533" target="_blank">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            <span>+228 92 67 15 33</span>
        </a>
    </div>
</div>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/formation.js') }}"></script> --}}
    @vite(['resources/js/formation.js'])
@endpush