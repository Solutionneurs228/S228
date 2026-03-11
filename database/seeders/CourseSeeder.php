<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = $this->getCoursesData();
        
        foreach ($courses as $courseData) {
            $course = Course::create([
                'title' => $courseData['title'],
                'slug' => $courseData['slug'],
                'description' => $courseData['description'],
                'short_description' => $courseData['short_description'],
                'category' => $courseData['category'],
                'level' => $courseData['level'],
                'duration_hours' => $courseData['duration_hours'],
                'objectives' => $courseData['objectives'],
                'skills_acquired' => $courseData['skills_acquired'],
                'prerequisites' => $courseData['prerequisites'] ?? [],
                'is_published' => true,
                'requires_approval' => true,
            ]);

            foreach ($courseData['modules'] as $moduleIndex => $moduleData) {
                $module = Module::create([
                    'course_id' => $course->id,
                    'title' => $moduleData['title'],
                    'description' => $moduleData['description'],
                    'order' => $moduleIndex + 1,
                    'duration_minutes' => $moduleData['duration_minutes'],
                    'has_quiz' => $moduleData['has_quiz'] ?? false,
                ]);

                foreach ($moduleData['lessons'] as $lessonIndex => $lessonData) {
                    Lesson::create([
                        'module_id' => $module->id,
                        'title' => $lessonData['title'],
                        'description' => $lessonData['description'] ?? null,
                        'order' => $lessonIndex + 1,
                        'type' => $lessonData['type'],
                        'content' => $lessonData['content'],
                        'resources' => $lessonData['resources'] ?? [],
                        'duration_minutes' => $lessonData['duration_minutes'],
                    ]);
                }
            }
        }
    }

    private function getCoursesData(): array
    {
        return [
            // ============================================
            // 1. INFOGRAPHIE / GRAPHIC DESIGN
            // ============================================
            [
                'title' => 'Infographie & Graphic Design Professionnel',
                'slug' => 'infographie-graphic-design-professionnel',
                'category' => 'infographie',
                'level' => 'debutant',
                'duration_hours' => 45,
                'short_description' => 'Maîtrisez la création visuelle professionnelle : logos, flyers, branding et identité visuelle complète.',
                'description' => 'Cette formation complète vous transforme en graphiste professionnel capable de créer des identités visuelles impactantes. Vous apprendrez les fondamentaux du design, la psychologie des couleurs, la typographie, et maîtriserez les outils professionnels comme Adobe Illustrator, InDesign et Figma. À travers des projets concrets, vous développerez un portfolio solide pour décrocher vos premiers clients ou emplois.',
                'objectives' => [
                    'Comprendre les principes fondamentaux du design graphique',
                    'Maîtriser la théorie des couleurs et son application',
                    'Créer des logos professionnels et mémorables',
                    'Concevoir des supports print (flyers, affiches, brochures)',
                    'Développer une identité visuelle complète de marque',
                    'Utiliser les logiciels professionnels (Illustrator, InDesign, Figma)',
                    'Préparer des fichiers pour l\'impression et le web'
                ],
                'skills_acquired' => [
                    'Création de logo et charte graphique',
                    'Mise en page éditoriale',
                    'Design d\'interfaces utilisateur (UI)',
                    'Préparation de fichiers print',
                    'Gestion de projet design',
                    'Communication visuelle efficace'
                ],
                'prerequisites' => ['Aucun prérequis technique', 'Ordinateur avec 8Go RAM minimum', 'Connexion internet stable'],
                'modules' => [
                    [
                        'title' => 'Fondamentaux du Design Graphique',
                        'description' => 'Les bases théoriques indispensables pour tout graphiste professionnel.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Introduction au design graphique',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/introduction-design-graphique',
                                'duration_minutes' => 45,
                                'description' => 'Histoire du design, métiers du graphisme, débouchés professionnels.'
                            ],
                            [
                                'title' => 'Théorie des couleurs et psychologie',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/theorie-couleurs-psychologie',
                                'duration_minutes' => 60,
                                'description' => 'Cercle chromatique, harmonies colorées, émotions et couleurs.'
                            ],
                            [
                                'title' => 'Typographie : choisir et associer les polices',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/typographie-professionnelle',
                                'duration_minutes' => 55,
                                'description' => 'Anatomie des caractères, familles typographiques, hiérarchie.'
                            ],
                            [
                                'title' => 'Exercice : Analyse de designs célèbres',
                                'type' => 'exercise',
                                'content' => 'Analysez 5 logos célèbres (Apple, Nike, Coca-Cola, etc.) en identifiant : les couleurs utilisées et leur signification, la typographie et son message, les formes géométriques, l\'équilibre visuel. Rédigez une fiche d\'analyse pour chaque logo.',
                                'duration_minutes' => 90,
                                'resources' => ['Template fiche analyse', 'Exemples de références']
                            ],
                            [
                                'title' => 'Quiz : Fondamentaux du design',
                                'type' => 'quiz',
                                'content' => json_encode([
                                    'questions' => [
                                        ['q' => 'Quelle est la couleur complémentaire du bleu ?', 'options' => ['Rouge', 'Orange', 'Jaune', 'Vert'], 'correct' => 1],
                                        ['q' => 'Quelle police est sans-serif ?', 'options' => ['Times New Roman', 'Helvetica', 'Georgia', 'Garamond'], 'correct' => 1],
                                        ['q' => 'Le kerning désigne :', 'options' => ['L\'espacement entre lettres', 'La hauteur des caractères', 'L\'épaisseur du trait', 'L\'inclinaison'], 'correct' => 0]
                                    ]
                                ]),
                                'duration_minutes' => 20
                            ]
                        ]
                    ],
                    [
                        'title' => 'Création de Logos Professionnels',
                        'description' => 'De la conception à la livraison finale, maîtrisez l\'art du logo design.',
                        'duration_minutes' => 600,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Les 7 types de logos et quand les utiliser',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/7-types-logos',
                                'duration_minutes' => 50,
                                'description' => 'Logotypographie, monogramme, pictogramme, abstrait, mascotte, emblème, combinaison.'
                            ],
                            [
                                'title' => 'Processus créatif : du brief à l\'esquisse',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/processus-creatif-logo',
                                'duration_minutes' => 65,
                                'description' => 'Analyse du brief, recherche, mind mapping, esquisses papier.'
                            ],
                            [
                                'title' => 'Tutoriel Illustrator : Vectorisation pro',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/illustrator-vectorisation-pro',
                                'duration_minutes' => 80,
                                'description' => 'Plume, formes géométriques, pathfinder, dégradés, export.'
                            ],
                            [
                                'title' => 'Projet : Créer un logo pour un restaurant',
                                'type' => 'project',
                                'content' => 'Créez l\'identité visuelle complète d\'un restaurant italien "Bella Vita" : brief client fourni, 3 propositions de logos, charte graphique avec codes couleurs et typographies, mockups sur menu, enseigne et uniforme. Livrables : fichiers AI, PDF, PNG, JPG.',
                                'duration_minutes' => 240,
                                'resources' => ['Brief client Bella Vita', 'Template charte graphique', 'Mockups PSD']
                            ],
                            [
                                'title' => 'Droit d\'auteur et dépôt de marque',
                                'type' => 'document',
                                'content' => 'Guide complet sur la protection intellectuelle : vérification des antériorités (INPI), dépôt de marque, contrats de cession de droits, facturation et devis. Templates de contrats inclus.',
                                'duration_minutes' => 45,
                                'resources' => ['Template contrat cession', 'Template devis', 'Checklist légale']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Design Print et Supports Marketing',
                        'description' => 'Maîtrisez la création de supports imprimés professionnels.',
                        'duration_minutes' => 540,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Mise en page avec InDesign',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/indesign-mise-en-page',
                                'duration_minutes' => 70,
                                'description' => 'Maîtres pages, grilles de mise en page, styles de paragraphes, gestion des images.'
                            ],
                            [
                                'title' => 'Conception de flyers et affiches impactants',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/flyers-affiches-design',
                                'duration_minutes' => 55,
                                'description' => 'Hiérarchie visuelle, appel à l\'action, contraintes techniques d\'impression.'
                            ],
                            [
                                'title' => 'Brochures et catalogues professionnels',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/brochures-catalogues',
                                'duration_minutes' => 60,
                                'description' => 'Plis, fonds perdus, gestion des pages, imposition.'
                            ],
                            [
                                'title' => 'Préparation des fichiers pour l\'impression',
                                'type' => 'document',
                                'content' => 'Checklist technique complète : résolution (300 DPI), mode colorimétrique (CMJN), fonds perdus (3mm), vectorisation des polices, formats d\'export (PDF/X-1a). Communication avec les imprimeurs.',
                                'duration_minutes' => 40,
                                'resources' => ['Checklist pré-impression', 'Template fiche technique']
                            ],
                            [
                                'title' => 'Projet : Campagne marketing complète',
                                'type' => 'project',
                                'content' => 'Concevez une campagne pour l\'ouverture d\'une salle de sport : flyer A5 recto-verso, affiche A2, carte de visite, bannière web. Respectez la charte graphique fournie et préparez les fichiers pour impression.',
                                'duration_minutes' => 180,
                                'resources' => ['Charte graphique GymFit', 'Photos haute résolution', 'Mockups']
                            ]
                        ]
                    ],
                    [
                        'title' => 'UI Design et Identité Digitale',
                        'description' => 'Créez des interfaces modernes et des systèmes de design cohérents.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Introduction à Figma',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/figma-bases',
                                'duration_minutes' => 50,
                                'description' => 'Interface, frames, composants, auto-layout, prototypes.'
                            ],
                            [
                                'title' => 'Design d\'interface mobile',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/ui-design-mobile',
                                'duration_minutes' => 65,
                                'description' => 'Guidelines iOS et Android, composants natifs, navigation.'
                            ],
                            [
                                'title' => 'Système de design et Design Tokens',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/design-system-tokens',
                                'duration_minutes' => 55,
                                'description' => 'Création de bibliothèques de composants réutilisables.'
                            ],
                            [
                                'title' => 'Projet : Refonte d\'un site web',
                                'type' => 'project',
                                'content' => 'Refonte complète du site d\'un restaurant : wireframes, maquettes desktop et mobile, prototype interactif, système de design documenté. Livraison sur Figma avec organisation professionnelle.',
                                'duration_minutes' => 200,
                                'resources' => ['Audit site existant', 'Inspiration UI', 'Icon library']
                            ]
                        ]
                    ]
                ]
            ],

            // ============================================
            // 2. PHOTOGRAPHIE ET VIDÉOGRAPHIE
            // ============================================
            [
                'title' => 'Photographie et Vidéographie Professionnelle',
                'slug' => 'photographie-videographie-professionnelle',
                'category' => 'photographie',
                'level' => 'intermediaire',
                'duration_hours' => 60,
                'short_description' => 'Maîtrisez la prise de vue, le montage vidéo et la production de contenus audiovisuels professionnels.',
                'description' => 'Devenez un créateur de contenu visuel complet. Cette formation couvre la photographie (composition, lumière, post-traitement) et la vidéographie (tournage, montage, étalonnage). Vous apprendrez à réaliser des vidéos publicitaires, des interviews professionnelles et du contenu pour les réseaux sociaux avec un rendu broadcast.',
                'objectives' => [
                    'Maîtriser les réglages manuels d\'un appareil photo/vidéo',
                    'Comprendre et contrôler la lumière naturelle et artificielle',
                    'Cadrer avec précision selon les règles de composition',
                    'Retoucher des photos professionnellement (Lightroom/Photoshop)',
                    'Tournage vidéo : planification, captation, son',
                    'Montage vidéo avancé sur Premiere Pro et DaVinci Resolve',
                    'Étalonnage colorimétrique et étalonnage créatif',
                    'Exporter pour différents formats (web, TV, cinéma)'
                ],
                'skills_acquired' => [
                    'Photographie produit et portrait',
                    'Direction de modèles',
                    'Tournage multi-caméras',
                    'Montage narratif',
                    'Étalonnage professionnel',
                    'Motion design basique',
                    'Gestion de projet vidéo'
                ],
                'prerequisites' => ['Appareil photo hybride ou reflex recommandé', 'Ordinateur puissant pour le montage', 'Bases de l\'informatique'],
                'modules' => [
                    [
                        'title' => 'Maîtrise Technique de l\'Image',
                        'description' => 'Contrôlez totalement votre appareil pour des résultats professionnels.',
                        'duration_minutes' => 600,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Triangle d\'exposition parfait',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/triangle-exposition',
                                'duration_minutes' => 55,
                                'description' => 'Ouverture, vitesse d\'obturation, ISO : équilibre et créativité.'
                            ],
                            [
                                'title' => 'Mise au point et profondeur de champ',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/mise-au-point-pdc',
                                'duration_minutes' => 45,
                                'description' => 'Modes AF, hyperfocale, map sélective, focus peaking.'
                            ],
                            [
                                'title' => 'Composition : règles et ruptures',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/composition-photo',
                                'duration_minutes' => 50,
                                'description' => 'Règle des tiers, lignes de force, cadrage, équilibre, vide plein.'
                            ],
                            [
                                'title' => 'Exercice pratique : Séance portrait',
                                'type' => 'exercise',
                                'content' => 'Réalisez une séance portrait en lumière naturelle : 10 photos avec différentes ouvertures (f/1.8 à f/11), 10 photos avec vitesses différentes (motion floue vs figée), variations de composition. Analysez l\'impact technique sur le rendu.',
                                'duration_minutes' => 180,
                                'resources' => ['Fiche technique séance', 'Grille d\'évaluation']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Lumière et Éclairage Professionnel',
                        'description' => 'Contrôlez la lumière en toute situation pour des images spectaculaires.',
                        'duration_minutes' => 540,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Lumière naturelle : heures dorées et bleues',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/lumiere-naturelle',
                                'duration_minutes' => 40,
                                'description' => 'Qualité de lumière selon les heures, orientation, réflecteurs.'
                            ],
                            [
                                'title' => 'Éclairage studio : schémas classiques',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/eclairage-studio',
                                'duration_minutes' => 70,
                                'description' => 'Éclairage clair-obscur, boucle, Rembrandt, papillon, éclairage plat.'
                            ],
                            [
                                'title' => 'Flash et lumière continue',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/flash-vs-continue',
                                'duration_minutes' => 55,
                                'description' => 'Speedlight vs studio, synchronisation, modificateurs.'
                            ],
                            [
                                'title' => 'Projet : Portrait studio professionnel',
                                'type' => 'project',
                                'content' => 'Réalisez un portrait corporate pour un CEO : mise en place éclairage 3 points, direction du modèle, 20 photos minimum, sélection et retouche des 3 meilleures. Livrables haute résolution pour presse.',
                                'duration_minutes' => 240,
                                'resources' => ['Plan de lighting', 'Direction de modèle', 'Checklist matériel']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Post-Production Photo',
                        'description' => 'Développez vos fichiers RAW comme un professionnel.',
                        'duration_minutes' => 480,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Workflow Lightroom complet',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/lightroom-workflow',
                                'duration_minutes' => 65,
                                'description' => 'Importation, organisation, développement, export, catalogues.'
                            ],
                            [
                                'title' => 'Retouche avancée Photoshop',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/photoshop-retouche',
                                'duration_minutes' => 80,
                                'description' => 'Frequency separation, dodge & burn, composition avancée.'
                            ],
                            [
                                'title' => 'Étalonnage créatif',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/etalonnage-creatif',
                                'duration_minutes' => 50,
                                'description' => 'Courbes, split toning, LUTs, cohérence de série.'
                            ],
                            [
                                'title' => 'Exercice : Restauration photo ancienne',
                                'type' => 'exercise',
                                'content' => 'Restaurez une photo ancienne endommagée : réparation des rayures, reconstruction de parties manquantes, correction des décolorations, respect du grain d\'époque. Rendu print-ready.',
                                'duration_minutes' => 150,
                                'resources' => ['Scans haute résolution', 'Brosses de restauration']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Tournage Vidéo Professionnel',
                        'description' => 'Techniques de captation pour des vidéos de qualité broadcast.',
                        'duration_minutes' => 600,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Paramètres vidéo : résolutions et fréquences',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/parametres-video',
                                'duration_minutes' => 45,
                                'description' => '4K vs 1080p, 24fps vs 60fps, codecs, débit binaire.'
                            ],
                            [
                                'title' => 'Stabilisation : trépied, steadycam, gimbal',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/stabilisation-video',
                                'duration_minutes' => 50,
                                'description' => 'Mouvements de caméra fluides, walking shots, travelling.'
                            ],
                            [
                                'title' => 'Son professionnel sur le tournage',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/son-professionnel',
                                'duration_minutes' => 55,
                                'description' => 'Micros cravate, perche, enregistreurs, monitoring.'
                            ],
                            [
                                'title' => 'Éclairage vidéo : continu et LED',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/eclairage-video',
                                'duration_minutes' => 60,
                                'description' => 'Température de couleur, CRI, panneaux LED, softbox.'
                            ],
                            [
                                'title' => 'Projet : Interview professionnelle',
                                'type' => 'project',
                                'content' => 'Réalisez une interview corporate 3 minutes : planification (storyboard, questions), tournage multi-caméras (A-cam + B-cam), son double système, éclairage 3 points. Livraison des rushes organisés.',
                                'duration_minutes' => 300,
                                'resources' => ['Template storyboard', 'Liste matériel', 'Contrat de tournage']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Montage et Post-Production Vidéo',
                        'description' => 'Racontez des histoires à travers le montage.',
                        'duration_minutes' => 720,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Montage narratif sur Premiere Pro',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/montage-premiere',
                                'duration_minutes' => 75,
                                'description' => 'Organisation projet, timeline, raccords, rythme, J-cuts/L-cuts.'
                            ],
                            [
                                'title' => 'Étalonnage avec DaVinci Resolve',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/davinci-etalonnage',
                                'duration_minutes' => 90,
                                'description' => 'Nodes, correction primaire, secondaire, looks créatifs.'
                            ],
                            [
                                'title' => 'Motion design avec After Effects',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/after-effects-bases',
                                'duration_minutes' => 70,
                                'description' => 'Keyframes, masques, tracking, incrustation.'
                            ],
                            [
                                'title' => 'Export et livraison multi-formats',
                                'type' => 'document',
                                'content' => 'Paramètres d\'export pour chaque plateforme : YouTube (H.264, 4K), Instagram (carré, vertical, stories), Broadcast (ProRes), Cinéma (DCP). Gestion des métadonnées et livraison au client.',
                                'duration_minutes' => 40,
                                'resources' => ['Presets export', 'Template livraison client']
                            ],
                            [
                                'title' => 'Projet final : Vidéo publicitaire',
                                'type' => 'project',
                                'content' => 'Produisez une vidéo publicitaire 30 secondes pour un produit : scénario, storyboard, tournage, montage, étalonnage, sound design, motion graphics. Qualité diffusion TV/web.',
                                'duration_minutes' => 400,
                                'resources' => ['Brief créatif', 'Banque de musique libre', 'Sound FX']
                            ]
                        ]
                    ]
                ]
            ],

            // ============================================
            // 3. INFORMATIQUE BUREAUTIQUE
            // ============================================
            [
                'title' => 'Informatique Bureautique Expert',
                'slug' => 'informatique-bureautique-expert',
                'category' => 'bureautique',
                'level' => 'debutant',
                'duration_hours' => 35,
                'short_description' => 'Maîtrisez Word, Excel, PowerPoint et Outlook comme un professionnel de l\'entreprise.',
                'description' => 'Devenez un expert des outils bureautiques Microsoft 365 et Google Workspace. Cette formation intensive vous permettra de créer des documents professionnels, automatiser des tableurs complexes, concevoir des présentations impactantes et gérer votre productivité digitale. Idéal pour les assistants de direction, secrétaires et tout professionnel souhaitant optimiser son efficacité.',
                'objectives' => [
                    'Créer des documents Word complexes et automatiques',
                    'Maîtriser Excel : formules avancées, tableaux croisés, macros',
                    'Concevoir des présentations PowerPoint professionnelles',
                    'Gérer efficacement emails et calendriers',
                    'Automatiser les tâches répétitives',
                    'Collaborer en temps réel sur des documents',
                    'Sécuriser et organiser ses données professionnelles'
                ],
                'skills_acquired' => [
                    'Traitement de texte avancé',
                    'Analyse de données et reporting',
                    'Présentation et storytelling visuel',
                    'Gestion de projet digitale',
                    'Automatisation VBA',
                    'Collaboration cloud'
                ],
                'prerequisites' => ['Connaissance basique de l\'ordinateur', 'Suite Office installée ou abonnement Microsoft 365'],
                'modules' => [
                    [
                        'title' => 'Word : Documents Professionnels Avancés',
                        'description' => 'Créez des documents complexes, automatiques et conformes aux standards entreprise.',
                        'duration_minutes' => 420,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Mise en page professionnelle',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/word-mise-en-page',
                                'duration_minutes' => 45,
                                'description' => 'Styles, modèles, en-têtes/pieds de page, sections, colonnes.'
                            ],
                            [
                                'title' => 'Tableaux complexes et mise en forme',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/word-tableaux',
                                'duration_minutes' => 40,
                                'description' => 'Fusion, fractionnement, calculs dans tableaux, styles de tableau.'
                            ],
                            [
                                'title' => 'Publipostage et documents automatiques',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/word-publipostage',
                                'duration_minutes' => 50,
                                'description' => 'Fusion avec Excel, étiquettes, enveloppes, emails personnalisés.'
                            ],
                            [
                                'title' => 'Exercice : Créer un rapport annuel',
                                'type' => 'exercise',
                                'content' => 'Créez un rapport annuel professionnel 20 pages : page de garde, sommaire automatique, styles de titres hiérarchisés, tableaux de données, graphiques liés Excel, en-tête/pied personnalisés, annexes numérotées.',
                                'duration_minutes' => 120,
                                'resources' => ['Données Excel source', 'Template charte entreprise']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Excel : Analyse de Données et Reporting',
                        'description' => 'De l\'utilisateur basique à l\'expert en analyse de données.',
                        'duration_minutes' => 600,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Formules et fonctions avancées',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/excel-formules-avancees',
                                'duration_minutes' => 65,
                                'description' => 'SI, RECHERCHEV, INDEX/EQUIV, SOMMEPROD, matrices.'
                            ],
                            [
                                'title' => 'Tableaux croisés dynamiques',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/excel-tcd',
                                'duration_minutes' => 55,
                                'description' => 'Création, segments, graphiques croisés, actualisation.'
                            ],
                            [
                                'title' => 'Validation des données et formulaires',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/excel-validation',
                                'duration_minutes' => 45,
                                'description' => 'Listes déroulantes, contrôles de saisie, protection.'
                            ],
                            [
                                'title' => 'Macros et VBA initiation',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/excel-vba-debutant',
                                'duration_minutes' => 70,
                                'description' => 'Enregistreur de macros, éditeur VBA, variables, boucles.'
                            ],
                            [
                                'title' => 'Projet : Tableau de bord RH',
                                'type' => 'project',
                                'content' => 'Créez un tableau de bord RH interactif : base de données employés, calculs automatiques (absences, salaires, ancienneté), TCD analyses, graphiques dynamiques, boutons de navigation. Interface professionnelle protégée.',
                                'duration_minutes' => 240,
                                'resources' => ['Données RH anonymisées', 'Template dashboard']
                            ]
                        ]
                    ],
                    [
                        'title' => 'PowerPoint : Présentations Impactantes',
                        'description' => 'Concevez des présentations qui convainquent et mémorisent.',
                        'duration_minutes' => 360,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Storytelling et structure narrative',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/powerpoint-storytelling',
                                'duration_minutes' => 40,
                                'description' => 'Accroche, problématique, solution, preuve, appel à l\'action.'
                            ],
                            [
                                'title' => 'Design visuel et diapositives modernes',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/powerpoint-design',
                                'duration_minutes' => 50,
                                'description' => 'Grilles, hiérarchie visuelle, images, icônes, espaces blancs.'
                            ],
                            [
                                'title' => 'Animations et transitions professionnelles',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/powerpoint-animations',
                                'duration_minutes' => 45,
                                'description' => 'Motion design sobre, déclencheurs, chronologie.'
                            ],
                            [
                                'title' => 'Projet : Pitch deck investisseurs',
                                'type' => 'project',
                                'content' => 'Créez un pitch deck 12 diapositives pour une startup tech : problème, solution, marché, business model, traction, équipe, demande. Design moderne, animations subtiles, version PDF et présentation.',
                                'duration_minutes' => 150,
                                'resources' => ['Exemples pitch decks célèbres', 'Banque d\'icônes', 'Template']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Productivité et Collaboration Cloud',
                        'description' => 'Optimisez votre workflow professionnel quotidien.',
                        'duration_minutes' => 300,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Gestion efficace des emails (Outlook/Gmail)',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/gestion-emails',
                                'duration_minutes' => 40,
                                'description' => 'Règles automatiques, dossiers, recherche avancée, signatures.'
                            ],
                            [
                                'title' => 'Calendrier et planification',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/calendrier-pro',
                                'duration_minutes' => 35,
                                'description' => 'Partage de disponibilités, planification de réunions, rappels.'
                            ],
                            [
                                'title' => 'OneDrive et SharePoint : Gestion documentaire',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/sharepoint-gestion',
                                'duration_minutes' => 50,
                                'description' => 'Synchronisation, partage sécurisé, versions, workflows.'
                            ],
                            [
                                'title' => 'Teams et collaboration en temps réel',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/teams-collaboration',
                                'duration_minutes' => 45,
                                'description' => 'Réunions, canaux, co-édition, intégrations.'
                            ]
                        ]
                    ]
                ]
            ],

            // ============================================
            // 4. DÉVELOPPEMENT WEB ET MOBILE
            // ============================================
            [
                'title' => 'Développement Web et Mobile Full Stack',
                'slug' => 'developpement-web-mobile-fullstack',
                'category' => 'developpement',
                'level' => 'intermediaire',
                'duration_hours' => 80,
                'short_description' => 'Devenez développeur full stack : créez des applications web modernes et mobiles natives.',
                'description' => 'Formation complète pour maîtriser le développement moderne. Front-end (HTML5, CSS3, JavaScript, React), back-end (PHP/Laravel, Node.js, bases de données), et mobile (React Native). Vous construirez des applications réelles, déployerez sur le cloud et apprendrez les bonnes pratiques du code professionnel (Git, tests, CI/CD).',
                'objectives' => [
                    'Maîtriser HTML5 sémantique et CSS3 avancé (Flexbox, Grid)',
                    'Programmer en JavaScript moderne (ES6+) et TypeScript',
                    'Développer avec React et Next.js',
                    'Créer des API RESTful avec Laravel et Node.js',
                    'Gérer des bases de données SQL et NoSQL',
                    'Développer des applications mobiles cross-platform',
                    'Implémenter l\'authentification sécurisée (JWT, OAuth)',
                    'Déployer et scaler des applications cloud'
                ],
                'skills_acquired' => [
                    'Développement frontend responsive',
                    'Architecture backend MVC',
                    'Conception de bases de données',
                    'API RESTful sécurisées',
                    'Applications mobiles iOS/Android',
                    'DevOps basique (Docker, CI/CD)',
                    'Méthodologies agiles'
                ],
                'prerequisites' => ['Logique algorithmique de base', 'Connaissance basique du web', 'Ordinateur 16Go RAM recommandé', 'Éditeur de code (VS Code)'],
                'modules' => [
                    [
                        'title' => 'Fondamentaux du Web Moderne',
                        'description' => 'Base solide des technologies web essentielles.',
                        'duration_minutes' => 720,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'HTML5 sémantique et accessibilité',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/html5-semantique',
                                'duration_minutes' => 55,
                                'description' => 'Structure sémantique, balises sémantiques, ARIA, SEO de base.'
                            ],
                            [
                                'title' => 'CSS3 avancé : Flexbox et Grid',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/css3-flexbox-grid',
                                'duration_minutes' => 70,
                                'description' => 'Layouts modernes, responsive design, media queries.'
                            ],
                            [
                                'title' => 'JavaScript ES6+ fondamentaux',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/javascript-es6',
                                'duration_minutes' => 80,
                                'description' => 'Variables, fonctions fléchées, destructuring, async/await, modules.'
                            ],
                            [
                                'title' => 'DOM manipulation et événements',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/dom-javascript',
                                'duration_minutes' => 60,
                                'description' => 'Sélection, modification, création d\'éléments, gestion événements.'
                            ],
                            [
                                'title' => 'Projet : Landing page interactive',
                                'type' => 'project',
                                'content' => 'Développez une landing page complète : hero section avec animation, formulaire de contact avec validation JS, galerie filtrable, menu responsive, dark mode toggle. Code propre, commenté, versionné sur Git.',
                                'duration_minutes' => 300,
                                'resources' => ['Maquette Figma', 'Assets (images, icônes)', 'Checklist critères']
                            ]
                        ]
                    ],
                    [
                        'title' => 'React et Écosystème Frontend',
                        'description' => 'Maîtrisez la bibliothèque JavaScript la plus demandée sur le marché.',
                        'duration_minutes' => 840,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'React fondamentaux : composants et JSX',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-fondamentaux',
                                'duration_minutes' => 65,
                                'description' => 'Virtual DOM, composants fonctionnels, props, state.'
                            ],
                            [
                                'title' => 'Hooks et gestion d\'état',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-hooks',
                                'duration_minutes' => 75,
                                'description' => 'useState, useEffect, useContext, custom hooks.'
                            ],
                            [
                                'title' => 'React Router et SPA',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-router',
                                'duration_minutes' => 55,
                                'description' => 'Navigation, routes dynamiques, guards, lazy loading.'
                            ],
                            [
                                'title' => 'State management avec Redux Toolkit',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/redux-toolkit',
                                'duration_minutes' => 70,
                                'description' => 'Store, slices, actions, reducers, RTK Query.'
                            ],
                            [
                                'title' => 'Styling : CSS Modules, Styled Components, Tailwind',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-styling',
                                'duration_minutes' => 60,
                                'description' => 'Approches modernes de stylisation en React.'
                            ],
                            [
                                'title' => 'Projet : Application e-commerce frontend',
                                'type' => 'project',
                                'content' => 'Construisez une SPA e-commerce complète : catalogue produits avec filtres, panier d\'achat persistant, checkout multi-étapes, authentification JWT, dashboard utilisateur. Intégration avec API REST existante.',
                                'duration_minutes' => 400,
                                'resources' => ['API documentation', 'Wireframes', 'User stories']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Backend avec Laravel',
                        'description' => 'Développez des API robustes et sécurisées avec le framework PHP leader.',
                        'duration_minutes' => 780,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Architecture MVC et routing',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/laravel-mvc',
                                'duration_minutes' => 60,
                                'description' => 'Structure projet, routes, contrôleurs, vues Blade.'
                            ],
                            [
                                'title' => 'Eloquent ORM et relations',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/laravel-eloquent',
                                'duration_minutes' => 70,
                                'description' => 'Modèles, migrations, relations 1-n, n-n, polymorphes.'
                            ],
                            [
                                'title' => 'API RESTful et ressources',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/laravel-api-rest',
                                'duration_minutes' => 65,
                                'description' => 'Controllers API, Resources, pagination, filtres.'
                            ],
                            [
                                'title' => 'Authentification Sanctum et policies',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/laravel-sanctum',
                                'duration_minutes' => 75,
                                'description' => 'Tokens API, guards, autorisation, gates.'
                            ],
                            [
                                'title' => 'Tests unitaires et feature',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/laravel-testing',
                                'duration_minutes' => 60,
                                'description' => 'PHPUnit, factories, mocking, TDD.'
                            ],
                            [
                                'title' => 'Projet : API complète avec dashboard',
                                'type' => 'project',
                                'content' => 'Développez une API Laravel complète pour une plateforme de réservation : authentification, CRUD complet, relations complexes, emails, notifications, tests couvrant 80%, documentation API. Dashboard admin avec charts.',
                                'duration_minutes' => 360,
                                'resources' => ['Cahier des charges', 'MCD', 'Postman collection']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Bases de Données et SQL Avancé',
                        'description' => 'Concevez et optimisez des bases de données professionnelles.',
                        'duration_minutes' => 540,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Modélisation : MCD, MLD, MPD',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/modelisation-bdd',
                                'duration_minutes' => 55,
                                'description' => 'Entités, associations, cardinalités, normalisation.'
                            ],
                            [
                                'title' => 'SQL avancé : jointures, sous-requêtes, CTE',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/sql-avance',
                                'duration_minutes' => 70,
                                'description' => 'Requêtes complexes, fenêtres, fonctions d\'agrégation.'
                            ],
                            [
                                'title' => 'Optimisation et indexation',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/sql-optimisation',
                                'duration_minutes' => 50,
                                'description' => 'EXPLAIN, indexes, requêtes N+1, caching.'
                            ],
                            [
                                'title' => 'NoSQL avec MongoDB',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/mongodb-bases',
                                'duration_minutes' => 65,
                                'description' => 'Documents, collections, agrégations, quand choisir NoSQL.'
                            ],
                            [
                                'title' => 'Exercice : Migration et optimisation',
                                'type' => 'exercise',
                                'content' => 'Reprenez une base de données mal conçue : analyse des problèmes, refactorisation du schéma, migration des données, création d\'indexes, réécriture des requêtes lentes. Mesure des gains de performance.',
                                'duration_minutes' => 180,
                                'resources' => ['Dump SQL à corriger', 'Rapport d\'analyse']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Développement Mobile React Native',
                        'description' => 'Créez des applications mobiles natives iOS et Android avec un seul codebase.',
                        'duration_minutes' => 720,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'React Native : environnement et bases',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-native-setup',
                                'duration_minutes' => 60,
                                'description' => 'Expo vs CLI, émulateurs, composants natifs, styles.'
                            ],
                            [
                                'title' => 'Navigation et gestion d\'état mobile',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-native-navigation',
                                'duration_minutes' => 70,
                                'description' => 'React Navigation, stack, tabs, drawer, state global.'
                            ],
                            [
                                'title' => 'Accès natif : caméra, géolocalisation, notifications',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-native-native-modules',
                                'duration_minutes' => 80,
                                'description' => 'Permissions, API natives, async storage.'
                            ],
                            [
                                'title' => 'Publication sur App Store et Play Store',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/react-native-publication',
                                'duration_minutes' => 55,
                                'description' => 'Build production, signing stores, metadata, review process.'
                            ],
                            [
                                'title' => 'Projet final : Application mobile complète',
                                'type' => 'project',
                                'content' => 'Développez une application mobile de suivi de fitness : authentification, profil utilisateur, enregistrement séances (timer, exercices), historique avec stats, notifications push, synchronisation cloud. Builds iOS et Android fonctionnels.',
                                'duration_minutes' => 400,
                                'resources' => ['Design Figma mobile', 'API backend fournie', 'Assets (icones, splash)']
                            ]
                        ]
                    ]
                ]
            ],

            // ============================================
            // 5. CYBERSÉCURITÉ
            // ============================================
            [
                'title' => 'Cybersécurité : Protection et Ethical Hacking',
                'slug' => 'cybersecurite-protection-ethical-hacking',
                'category' => 'cybersecurite',
                'level' => 'avance',
                'duration_hours' => 55,
                'short_description' => 'Protégez les systèmes d\'information et apprenez l\'ethical hacking pour sécuriser les entreprises.',
                'description' => 'Formation complète en cybersécurité défensive et offensive. Vous apprendrez à identifier les vulnérabilités, sécuriser les réseaux et applications, répondre aux incidents et implémenter une culture sécurité. Inclut la préparation aux certifications CompTIA Security+ et CEH (Certified Ethical Hacker).',
                'objectives' => [
                    'Comprendre les menaces et vecteurs d\'attaque modernes',
                    'Sécuriser les réseaux (firewalls, IDS/IPS, segmentation)',
                    'Auditer la sécurité des applications web',
                    'Implémenter le chiffrement et la cryptographie',
                    'Gérer les incidents et la réponse aux cyberattaques',
                    'Établir des politiques de sécurité et conformité (RGPD, ISO 27001)',
                    'Pratiquer l\'ethical hacking sur environnements légitimes'
                ],
                'skills_acquired' => [
                    'Analyse de vulnérabilités',
                    'Test d\'intrusion web et réseau',
                    'Sécurisation infrastructure',
                    'Forensics numérique',
                    'Gestion des risques',
                    'Conformité réglementaire',
                    'Sensibilisation sécurité'
                ],
                'prerequisites' => ['Connaissances réseau (TCP/IP, DNS, HTTP)', 'Bases Linux et Windows', 'Programmation de base (Python recommandé)', 'Ordinateur capable de faire tourner des VMs'],
                'modules' => [
                    [
                        'title' => 'Fondamentaux de la Cybersécurité',
                        'description' => 'Comprendre l\'écosystème des menaces et les principes de défense.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Paysage des menaces cyber',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/menaces-cyber-landscape',
                                'duration_minutes' => 55,
                                'description' => 'APT, ransomware, phishing, DDoS, insider threats, cybercriminalité.'
                            ],
                            [
                                'title' => 'Triade CIA et principes fondamentaux',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/cia-triade',
                                'duration_minutes' => 45,
                                'description' => 'Confidentialité, Intégrité, Disponibilité, défense en profondeur.'
                            ],
                            [
                                'title' => 'Cadres réglementaires et conformité',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/conformite-cyber',
                                'duration_minutes' => 60,
                                'description' => 'RGPD, ISO 27001, NIST, PCI-DSS, Loi sur la confiance numérique.'
                            ],
                            [
                                'title' => 'Exercice : Analyse de breach réel',
                                'type' => 'exercise',
                                'content' => 'Analysez la fuite de données d\'une entreprise majeure (cas réel dépublicié) : vecteur d\'entrée, failles exploitées, impact, réponse incident, leçons apprises. Rédaction d\'un rapport d\'analyse.',
                                'duration_minutes' => 120,
                                'resources' => ['Rapport d\'incident', 'Timeline de l\'attaque']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Sécurité des Réseaux',
                        'description' => 'Sécurisez l\'infrastructure réseau contre les intrusions.',
                        'duration_minutes' => 600,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Architecture réseau sécurisée',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/archi-reseau-securise',
                                'duration_minutes' => 65,
                                'description' => 'Segmentation, DMZ, VLANs, Zero Trust architecture.'
                            ],
                            [
                                'title' => 'Firewalls et filtrage de trafic',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/firewalls-avances',
                                'duration_minutes' => 70,
                                'description' => 'Règles iptables/pfSense, NAT, proxy, inspection profonde.'
                            ],
                            [
                                'title' => 'Détection d\'intrusion (IDS/IPS)',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/ids-ips-snort',
                                'duration_minutes' => 60,
                                'description' => 'Snort, Suricata, signatures, anomalies, SIEM.'
                            ],
                            [
                                'title' => 'VPN et communications sécurisées',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/vpn-securise',
                                'duration_minutes' => 55,
                                'description' => 'IPsec, SSL/TLS, WireGuard, certificats.'
                            ],
                            [
                                'title' => 'Lab : Configuration firewall entreprise',
                                'type' => 'project',
                                'content' => 'Configurez un pfSense complet : WAN/LAN/DMZ, VLANs par département, VPN site-à-site, règles de filtrage granulaires, IDS avec Snort, reporting. Documentation complète.',
                                'duration_minutes' => 240,
                                'resources' => ['Topologie réseau', 'VM pfSense', 'Scénarios de test']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Sécurité Applicative et Web',
                        'description' => 'Sécurisez les applications contre les attaques les plus courantes.',
                        'duration_minutes' => 660,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'OWASP Top 10 détaillé',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/owasp-top10-detail',
                                'duration_minutes' => 80,
                                'description' => 'Injection, XSS, CSRF, IDOR, sécurité défaillante, etc.'
                            ],
                            [
                                'title' => 'Tests d\'intrusion web avec Burp Suite',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/burp-suite-pentest',
                                'duration_minutes' => 75,
                                'description' => 'Proxy, repeater, intruder, scanner, extensions.'
                            ],
                            [
                                'title' => 'Sécurisation du code : revue et SAST',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/securite-code-sast',
                                'duration_minutes' => 65,
                                'description' => 'Revue de code, SonarQube, linters sécurité, Snyk.'
                            ],
                            [
                                'title' => 'Cryptographie appliquée',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/cryptographie-appliquee',
                                'duration_minutes' => 70,
                                'description' => 'Hashing, chiffrement symétrique/asymétrique, PKI, TLS 1.3.'
                            ],
                            [
                                'title' => 'Lab : Pentest application web',
                                'type' => 'project',
                                'content' => 'Test d\'intrusion complet sur application vulnérable (DVWA/WebGoat) : reconnaissance, scan, exploitation XSS/SQLi, élévation privilèges, rapport de vulnérabilités avec preuves et correctifs.',
                                'duration_minutes' => 300,
                                'resources' => ['Environnement lab', 'Checklist OWASP Testing Guide', 'Template rapport']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Gestion des Incidents et Forensics',
                        'description' => 'Préparez-vous à répondre efficacement aux cyberattaques.',
                        'duration_minutes' => 540,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Préparation et plan de réponse incident',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/plan-reponse-incident',
                                'duration_minutes' => 55,
                                'description' => 'CSIRT, procédures, playbooks, communication crise.'
                            ],
                            [
                                'title' => 'Analyse forensics : disques et mémoire',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/forensics-disque-memoire',
                                'duration_minutes' => 75,
                                'description' => 'Autopsy, Volatility, chaîne de garde, preuves numériques.'
                            ],
                            [
                                'title' => 'Analyse de malwares',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/analyse-malware',
                                'duration_minutes' => 70,
                                'description' => 'Bac à sable, reverse engineering basique, IOCs.'
                            ],
                            [
                                'title' => 'Simulation : Tabletop exercise',
                                'type' => 'exercise',
                                'content' => 'Participez à un exercice de crise ransomware : scénario réaliste, rôles (DSI, RSSI, juridique, com), prises de décision sous pression, communication interne/externe, retour d\'expérience.',
                                'duration_minutes' => 240,
                                'resources' => ['Scénario détaillé', 'Rôles et responsabilités', 'Timeline exercice']
                            ]
                        ]
                    ]
                ]
            ],

             // ============================================
            // 6. PHOTOSHOP
            // ============================================
            [
                'title' => 'Adobe Photoshop Maîtrise Professionnelle',
                'slug' => 'adobe-photoshop-maitrise-professionnelle',
                'category' => 'photoshop',
                'level' => 'intermediaire',
                'duration_hours' => 40,
                'short_description' => 'Devenez expert Photoshop : retouche photo, photomanipulation, design web et effets spéciaux.',
                'description' => 'Maîtrisez l\'outil de retouche photo le plus puissant au monde. De la correction basique à la création artistique avancée, vous apprendrez les techniques professionnelles utilisées dans l\'industrie de la photographie, de la publicité et du cinéma.',
                'objectives' => [
                    'Maîtriser l\'interface et optimiser le workflow Photoshop',
                    'Retoucher des portraits professionnels (dodge & burn, frequency separation)',
                    'Réaliser des photomanipulations complexes et réalistes',
                    'Créer des compositions graphiques pour le web et print',
                    'Maîtriser les masques, calques de réglage et modes de fusion',
                    'Automatiser les tâches avec les actions et scripts',
                    'Préparer des fichiers pour différents supports de diffusion'
                ],
                'skills_acquired' => [
                    'Retouche photo haut de gamme',
                    'Photomanipulation créative',
                    'Design d\'interfaces web',
                    'Création de mockups',
                    'Restauration d\'images anciennes',
                    'Workflow automatisé',
                    'Gestion des couleurs professionnelle'
                ],
                'prerequisites' => ['Photoshop CC installé', 'Connaissance basique de l\'interface', 'Tablette graphique recommandée (Wacom)'],
                'modules' => [
                    [
                        'title' => 'Workflow et Fondamentaux',
                        'description' => 'Optimisez votre travail et maîtrisez les outils essentiels.',
                        'duration_minutes' => 360,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Interface personnalisée et raccourcis',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/photoshop-interface-pro',
                                'duration_minutes' => 40,
                                'description' => 'Espaces de travail, panneaux personnalisés, raccourcis essentiels.'
                            ],
                            [
                                'title' => 'Gestion des calques avancée',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/calques-avances-photoshop',
                                'duration_minutes' => 50,
                                'description' => 'Groupes, styles, masques vectoriels, objets dynamiques.'
                            ],
                            [
                                'title' => 'Sélections précises et masques',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/selections-masques-pro',
                                'duration_minutes' => 60,
                                'description' => 'Sélection rapide, plume, alpha channels, affiner les bords.'
                            ],
                            [
                                'title' => 'Calques de réglage non destructifs',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/calques-reglage',
                                'duration_minutes' => 55,
                                'description' => 'Courbes, niveaux, équilibre des couleurs, teinte/saturation.'
                            ]
                        ]
                    ],
                    [
                        'title' => 'Retouche Portrait Professionnelle',
                        'description' => 'Techniques de retouche haut de gamme pour la photographie portrait.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Nettoyage de peau : outils de base',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/nettoyage-peau-photoshop',
                                'duration_minutes' => 45,
                                'description' => 'Correcteur, tampon de duplication, patch, contenu pris en compte.'
                            ],
                            [
                                'title' => 'Frequency Separation avancé',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/frequency-separation-pro',
                                'duration_minutes' => 65,
                                'description' => 'Séparation texture/couleur, retouche haute fréquence, lissage basse fréquence.'
                            ],
                            [
                                'title' => 'Dodge & Burn professionnel',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/dodge-burn-pro',
                                'duration_minutes' => 70,
                                'description' => 'Sculpture de la lumière, volumes, peau 3D, courbes de tonalité.'
                            ],
                            [
                                'title' => 'Retouche des yeux, dents et cheveux',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/retouche-details-portrait',
                                'duration_minutes' => 55,
                                'description' => 'Blanchiment dentaire, intensification regard, nettoyage cheveux.'
                            ],
                            [
                                'title' => 'Projet : Beauty retouching complet',
                                'type' => 'project',
                                'content' => 'Retouche complète portrait beauté : nettoyage peau professionnel, frequency separation, dodge & burn, color grading, netteté sélective. Rendu haute résolution pour magazine.',
                                'duration_minutes' => 180,
                                'resources' => ['RAW portrait haute résolution', 'Actions Photoshop', 'Checklist retouche']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Photomanipulation et Compositing',
                        'description' => 'Créez des images surréalistes et des compositions complexes.',
                        'duration_minutes' => 540,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Techniques de compositing avancé',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/compositing-avance',
                                'duration_minutes' => 65,
                                'description' => 'Harmonisation des sources, perspective, échelle, cohérence lumineuse.'
                            ],
                            [
                                'title' => 'Intégration réaliste d\'éléments',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/integration-realiste',
                                'duration_minutes' => 70,
                                'description' => 'Ombres, reflets, atmosphère, profondeur de champ simulée.'
                            ],
                            [
                                'title' => 'Effets spéciaux : feu, fumée, particules',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/effets-speciaux-photoshop',
                                'duration_minutes' => 75,
                                'description' => 'Brosses personnalisées, modes de fusion, filtres dynamiques.'
                            ],
                            [
                                'title' => 'Color grading cinématographique',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/color-grading-cinema',
                                'duration_minutes' => 60,
                                'description' => 'Lookup tables, split toning, courbes couleur, atmosphère.'
                            ],
                            [
                                'title' => 'Projet : Affiche de film fantastique',
                                'type' => 'project',
                                'content' => 'Créez une affiche de film fantastique : composition de 5+ images sources, intégration personnage dans décor, effets spéciaux (magie, particules), color grading cinématographique, typographie impactante. Format 27x40 inches, 300 DPI.',
                                'duration_minutes' => 240,
                                'resources' => ['Banque d\'images', 'Brosses effets spéciaux', 'Polices cinéma']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Design Web et Automatisation',
                        'description' => 'Créez des interfaces et optimisez votre workflow.',
                        'duration_minutes' => 420,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Design d\'interfaces et mockups',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/design-ui-photoshop',
                                'duration_minutes' => 55,
                                'description' => 'Grilles 960px/12 colonnes, assets exportables, smart objects.'
                            ],
                            [
                                'title' => 'Création de mockups réalistes',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/mockups-realistes',
                                'duration_minutes' => 50,
                                'description' => 'Smart objects dynamiques, perspectives, reflets, ombres.'
                            ],
                            [
                                'title' => 'Actions et scripts d\'automatisation',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/actions-photoshop',
                                'duration_minutes' => 60,
                                'description' => 'Enregistrement d\'actions, traitement par lots, scripts JavaScript.'
                            ],
                            [
                                'title' => 'Projet : UI Kit complet et mockups',
                                'type' => 'project',
                                'content' => 'Créez un UI Kit pour application mobile : boutons, formulaires, icônes, typographie. Réalisez 3 mockups réalistes (iPhone, MacBook, iPad) présentant l\'application. Export d\'assets pour développeur.',
                                'duration_minutes' => 200,
                                'resources' => ['Template devices', 'Guidelines iOS/Android', 'Specs techniques']
                            ]
                        ]
                    ]
                ]
            ],

                       // ============================================
            // 7. INSTALLATION SYSTÈMES ET LOGICIELS
            // ============================================
            [
                'title' => 'Installation de Systèmes d\'Exploitation et Logiciels',
                'slug' => 'installation-systemes-logiciels',
                'category' => 'systeme',
                'level' => 'debutant',
                'duration_hours' => 30,
                'short_description' => 'Maîtrisez l\'installation, la configuration et la maintenance des systèmes d\'exploitation et logiciels professionnels.',
                'description' => 'Devenez autonome dans la gestion complète des environnements informatiques. Cette formation couvre l\'installation de Windows, Linux et macOS, la virtualisation, le déploiement de logiciels en entreprise, et la maintenance préventive et curative des systèmes. Vous apprendrez à résoudre les problèmes courants, sécuriser les postes de travail et optimiser les performances des machines.',
                'objectives' => [
                    'Installer et configurer Windows 10/11 professionnellement',
                    'Maîtriser l\'installation de distributions Linux (Ubuntu, Debian)',
                    'Gérer les partitions, dual-boot et virtualisation',
                    'Déployer et configurer les logiciels métier en entreprise',
                    'Sécuriser les systèmes et gérer les mises à jour',
                    'Diagnostiquer et résoudre les pannes matérielles et logicielles',
                    'Automatiser les installations et configurations',
                    'Gérer les réseaux locaux et les partages'
                ],
                'skills_acquired' => [
                    'Installation OS multi-plateformes',
                    'Configuration réseau avancée',
                    'Virtualisation et containers',
                    'Gestion des logiciels et licences',
                    'Sécurisation des postes de travail',
                    'Maintenance préventive et curative',
                    'Support technique niveau 1 et 2',
                    'Documentation technique'
                ],
                'prerequisites' => ['Connaissance basique de l\'informatique', 'Ordinateur avec 8Go RAM minimum', 'Clé USB 16Go pour installations', 'Accès à Internet'],
                'modules' => [
                    [
                        'title' => 'Installation et Configuration Windows',
                        'description' => 'Maîtrisez l\'installation professionnelle de Windows et son optimisation.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Préparation et choix de l\'édition Windows',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/windows-preparation-installation',
                                'duration_minutes' => 45,
                                'description' => 'Différences entre éditions, vérification compatibilité matérielle, création média d\'installation.'
                            ],
                            [
                                'title' => 'Installation propre et partitionnement',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/windows-installation-propre',
                                'duration_minutes' => 60,
                                'description' => 'GPT vs MBR, partitions système, dual-boot, récupération.'
                            ],
                            [
                                'title' => 'Configuration post-installation essentielle',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/windows-post-install',
                                'duration_minutes' => 55,
                                'description' => 'Pilotes, Windows Update, paramètres de confidentialité, comptes utilisateurs.'
                            ],
                            [
                                'title' => 'Optimisation et personnalisation avancée',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/windows-optimisation',
                                'duration_minutes' => 50,
                                'description' => 'Désactivation services inutiles, optimisation démarrage, nettoyage système.'
                            ],
                            [
                                'title' => 'Exercice : Installation complète Windows 11',
                                'type' => 'exercise',
                                'content' => 'Réalisez une installation complète de Windows 11 Pro sur machine virtuelle puis sur matériel réel : création média bootable, partitionnement personnalisé, installation pilotes, configuration réseau domaine, installation suite Office. Documentez chaque étape avec captures d\'écran.',
                                'duration_minutes' => 180,
                                'resources' => ['Checklist installation', 'ISO Windows 11', 'Outil création média']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Maîtrise de Linux Ubuntu',
                        'description' => 'Devenez autonome sur les systèmes Linux professionnels.',
                        'duration_minutes' => 540,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Introduction aux distributions Linux',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/linux-distributions',
                                'duration_minutes' => 40,
                                'description' => 'Ubuntu, Debian, CentOS, RHEL : choix selon le contexte professionnel.'
                            ],
                            [
                                'title' => 'Installation Ubuntu Server et Desktop',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/ubuntu-installation',
                                'duration_minutes' => 65,
                                'description' => 'Installation graphique et CLI, LVM, RAID logiciel, chiffrement disque.'
                            ],
                            [
                                'title' => 'Ligne de commande essentielle',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/linux-cli-essentiel',
                                'duration_minutes' => 75,
                                'description' => 'Navigation, gestion fichiers, permissions, paquets (apt), services.'
                            ],
                            [
                                'title' => 'Configuration réseau et SSH',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/linux-reseau-ssh',
                                'duration_minutes' => 60,
                                'description' => 'IP statique/dynamique, firewall UFW, clés SSH, accès distant sécurisé.'
                            ],
                            [
                                'title' => 'Projet : Serveur LAMP complet',
                                'type' => 'project',
                                'content' => 'Installez et configurez un serveur web complet sous Ubuntu Server : Apache/Nginx, MySQL, PHP, certificat SSL Let\'s Encrypt, virtual hosts, sauvegarde automatisée. Documentation technique complète pour reprise par un autre admin.',
                                'duration_minutes' => 240,
                                'resources' => ['Guide installation LAMP', 'Scripts de configuration', 'Checklist sécurité']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Virtualisation et Conteneurs',
                        'description' => 'Créez et gérez des environnements virtuels professionnels.',
                        'duration_minutes' => 420,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Virtualisation avec VirtualBox et VMware',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/virtualisation-bases',
                                'duration_minutes' => 55,
                                'description' => 'Création VM, snapshots, réseau virtuel, partage dossiers, clones liés.'
                            ],
                            [
                                'title' => 'Hyper-V et gestion avancée',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/hyper-v-avance',
                                'duration_minutes' => 65,
                                'description' => 'Rôles Hyper-V, commutateurs virtuels, migration live, réplication.'
                            ],
                            [
                                'title' => 'Introduction à Docker',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/docker-introduction',
                                'duration_minutes' => 70,
                                'description' => 'Images, containers, Dockerfile, docker-compose, registry.'
                            ],
                            [
                                'title' => 'Lab : Infrastructure virtuelle complète',
                                'type' => 'project',
                                'content' => 'Créez une infrastructure virtuelle complète : hôte Windows avec Hyper-V, VM Ubuntu Server (web), VM Windows 10 (client), VM pfSense (firewall), réseau isolé avec accès Internet. Testez la communication entre VMs et documentez la topologie.',
                                'duration_minutes' => 200,
                                'resources' => ['Topologie réseau', 'ISO nécessaires', 'Guide configuration']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Déploiement Logiciels en Entreprise',
                        'description' => 'Gérez efficacement le parc logiciel professionnel.',
                        'duration_minutes' => 360,
                        'has_quiz' => false,
                        'lessons' => [
                            [
                                'title' => 'Gestion des licences et conformité',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/gestion-licences',
                                'duration_minutes' => 50,
                                'description' => 'Types de licences (OEM, Volume, SaaS), audit, SAM, conformité légale.'
                            ],
                            [
                                'title' => 'Déploiement silencieux et GPO',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/deploiement-silencieux',
                                'duration_minutes' => 65,
                                'description' => 'MSI, switches d\'installation, GPO Windows, scripts PowerShell.'
                            ],
                            [
                                'title' => 'Outils de gestion de parc (OCS, GLPI)',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/gestion-parc-ocsglpi',
                                'duration_minutes' => 60,
                                'description' => 'Inventaire automatique, helpdesk, gestion des demandes.'
                            ],
                            [
                                'title' => 'Projet : Déploiement automatisé Office 365',
                                'type' => 'project',
                                'content' => 'Configurez le déploiement automatisé de Microsoft 365 Apps for Enterprise : ODT (Office Deployment Tool), fichier XML personnalisé, installation silencieuse, activation KMS, mise à jour automatique. Test sur 3 VMs.',
                                'duration_minutes' => 150,
                                'resources' => ['Outil ODT', 'Templates XML', 'Guide Microsoft Deploy']
                            ]
                        ]
                    ],
                    [
                        'title' => 'Maintenance et Dépannage',
                        'description' => 'Diagnosticquez et résolvez les problèmes informatiques.',
                        'duration_minutes' => 480,
                        'has_quiz' => true,
                        'lessons' => [
                            [
                                'title' => 'Outils de diagnostic matériel',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/diagnostic-materiel',
                                'duration_minutes' => 55,
                                'description' => 'POST, beep codes, tests RAM, SMART disques, monitoring températures.'
                            ],
                            [
                                'title' => 'Récupération et réparation Windows',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/recuperation-windows',
                                'duration_minutes' => 70,
                                'description' => 'Mode sans échec, restauration système, réparation démarrage, DISM, SFC.'
                            ],
                            [
                                'title' => 'Sauvegarde et restauration professionnelles',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/sauvegarde-restauration',
                                'duration_minutes' => 60,
                                'description' => 'Images système, sauvegarde incrémentale, cloud, plan de reprise.'
                            ],
                            [
                                'title' => 'Sécurisation des postes de travail',
                                'type' => 'video',
                                'content' => 'https://www.youtube.com/embed/securisation-postes',
                                'duration_minutes' => 65,
                                'description' => 'Antivirus centralisé, pare-feu, chiffrement BitLocker, policies sécurité.'
                            ],
                            [
                                'title' => 'Simulation : Résolution de tickets support',
                                'type' => 'exercise',
                                'content' => 'Traitez 5 scénarios réels de support : PC ne démarre plus (écran noir), lenteur extrême Windows, infection ransomware, perte données utilisateur, conflit logiciel après mise à jour. Pour chaque cas : diagnostic, solution mise en œuvre, documentation, prévention.',
                                'duration_minutes' => 180,
                                'resources' => ['Scénarios détaillés', 'Environnements de test', 'Grille d\'évaluation']
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}