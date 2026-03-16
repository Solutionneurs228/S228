@extends('layouts.base')
@section('title', 'S228 contact')

@section('Demande de devis')
@section('meta_description',
    'Réparation ordinateur, photographie, création de cartes de visite, affiches publicitaires.
    Demandez votre devis gratuit dès maintenant.')




@section('content')

    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Contactez-nous</h2>
                <p>Discutons de votre projet et obtenez une réponse sous 24h</p>
            </div>

            <!-- Toggle Buttons -->
            <div class="form-toggle">
                <a href="https://wa.me/22892671533" class="toggle-btn active" target="_blank">
                     <i class="fab fa-whatsapp"></i>
                     Message WhatsApp 
                    </a>
                <a href="tel:+22892671533" class="toggle-btn" target="_blank">
                    <i class="fas fa-phone"></i>
                    Appel Téléphonique
                </a>
            </div>

            <div class="forms-container">
                <!-- Formulaire de Contact Simple -->
                <div id="contact-form" class="form-wrapper active">
                    <div class="form-grid">
                        <div class="form-card">
                            <h3 class="form-title">Envoyez-nous un message</h3>
                            <p class="form-subtitle">Une question ? Besoin d'informations ? Écrivez-nous directement.</p>

                            <div class="success-message" id="contact-success">
                                ✅ Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
                            </div>

                            <form onsubmit="handleSubmit(event, 'contact')">
                                <div class="input-group">
                                    <label for="contact-name" class="required">Nom complet</label>
                                    <input type="text" id="contact-name" name="name" required
                                        placeholder="Votre nom et prénom">
                                </div>

                                <div class="input-group">
                                    <label for="contact-email" class="required">Email</label>
                                    <input type="email" id="contact-email" name="email" required
                                        placeholder="votre@email.com">
                                </div>

                                <div class="input-group">
                                    <label for="contact-phone">Téléphone</label>
                                    <input type="tel" id="contact-phone" name="phone" placeholder="+228 XX XX XX XX">
                                </div>

                                <div class="input-group">
                                    <label for="contact-subject" class="required">Sujet</label>
                                    <select id="contact-subject" name="subject" required>
                                        <option value="">Sélectionnez un sujet</option>
                                        <option value="info">Demande d'information</option>
                                        <option value="support">Support technique</option>
                                        <option value="partenariat">Partenariat</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <label for="contact-message" class="required">Message</label>
                                    <textarea id="contact-message" name="message" required placeholder="Décrivez votre demande en détail..."></textarea>
                                </div>

                                <button type="submit" class="submit-btn" id="contact-submit">
                                    Envoyer le message
                                </button>
                            </form>
                        </div>

                        <!-- Info Card -->
                        <div class="info-card">
                            <h3>Informations de contact</h3>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Téléphone</h4>
                                    <p><a href="tel:+22892671533">+228 92 67 15 33</a><br>
                                        <span style="font-size: 0.8rem; color: var(--text-muted);">Lun-Sam, 6h-18h</span>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Email</h4>
                                    <p><a href="mailto:solutionneurs228@gmail.com">solutionneurs228@gmail.com</a><br>
                                        <span style="font-size: 0.8rem; color: var(--text-muted);">Réponse en moins de 24h</span>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Adresse</h4>
                                    <p>Kara, Togo<br>
                                        <span style="font-size: 0.8rem; color: var(--text-muted);">Quartier Tchannadè</span>
                                    </p>
                                </div>
                            </div>

                            <div class="social-links">
                                <h4>Suivez-nous</h4>
                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook">
                                        <svg fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="social-icon" title="LinkedIn">
                                        <svg fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="social-icon" title="WhatsApp">
                                        <svg fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="social-icon" title="Instagram">
                                        <svg fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de Devis Détaillé -->
                <div id="devis-form" class="form-wrapper">
                    <div class="form-grid">
                        <div class="form-card">
                            <h3 class="form-title">Demande de devis personnalisé</h3>
                            <p class="form-subtitle">Décrivez votre projet pour recevoir une estimation détaillée sous 48h.
                            </p>

                            <div class="success-message" id="devis-success">
                                ✅ Votre demande de devis a été envoyée ! Notre équipe vous contactera sous 48h avec une
                                proposition personnalisée.
                            </div>

                            <form onsubmit="handleSubmit(event, 'devis')">
                                <!-- Informations personnelles -->
                                <div class="input-group">
                                    <label for="devis-name" class="required">Nom complet / Entreprise</label>
                                    <input type="text" id="devis-name" name="name" required
                                        placeholder="Votre nom ou raison sociale">
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                    <div class="input-group">
                                        <label for="devis-email" class="required">Email professionnel</label>
                                        <input type="email" id="devis-email" name="email" required
                                            placeholder="email@entreprise.tg">
                                    </div>
                                    <div class="input-group">
                                        <label for="devis-phone" class="required">Téléphone</label>
                                        <input type="tel" id="devis-phone" name="phone" required
                                            placeholder="+228 XX XX XX XX">
                                    </div>
                                </div>

                                <!-- Type de service -->
                                <div class="input-group">
                                    <label class="required">Type de service souhaité</label>
                                    <div class="checkbox-group">
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="maintenance"
                                                id="svc-maintenance">
                                            <label for="svc-maintenance">Maintenance Informatique</label>
                                        </div>
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="web" id="svc-web">
                                            <label for="svc-web">Développement Web</label>
                                        </div>
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="design" id="svc-design">
                                            <label for="svc-design">Design Graphique</label>
                                        </div>
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="photo" id="svc-photo">
                                            <label for="svc-photo">Photo & Vidéo</label>
                                        </div>
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="formation" id="svc-formation">
                                            <label for="svc-formation">Formation</label>
                                        </div>
                                        <div class="checkbox-item" onclick="toggleCheckbox(this)">
                                            <input type="checkbox" name="services" value="support" id="svc-support">
                                            <label for="svc-support">Support à Distance</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Budget -->
                                <div class="input-group">
                                    <label>Budget estimé (FCFA)</label>
                                    <div class="radio-group">
                                        <div class="radio-item" onclick="selectRadio(this)">
                                            <input type="radio" name="budget" value="0-500k" id="budget-1">
                                            <label for="budget-1">0 - 500 000</label>
                                        </div>
                                        <div class="radio-item" onclick="selectRadio(this)">
                                            <input type="radio" name="budget" value="500k-1m" id="budget-2">
                                            <label for="budget-2">500 000 - 1M</label>
                                        </div>
                                        <div class="radio-item" onclick="selectRadio(this)">
                                            <input type="radio" name="budget" value="1m-3m" id="budget-3">
                                            <label for="budget-3">1M - 3M</label>
                                        </div>
                                        <div class="radio-item" onclick="selectRadio(this)">
                                            <input type="radio" name="budget" value="3m+" id="budget-4">
                                            <label for="budget-4">+ 3 Millions</label>
                                        </div>
                                        <div class="radio-item" onclick="selectRadio(this)">
                                            <input type="radio" name="budget" value="na" id="budget-5">
                                            <label for="budget-5">À définir</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Délai -->
                                <div class="input-group">
                                    <label for="devis-delai">Délai souhaité</label>
                                    <select id="devis-delai" name="delai">
                                        <option value="">Sélectionnez un délai</option>
                                        <option value="urgent">Urgent (sous 1 semaine)</option>
                                        <option value="1mois">Dans le mois</option>
                                        <option value="3mois">Dans 3 mois</option>
                                        <option value="flexible">Flexible</option>
                                    </select>
                                </div>

                                <!-- Description projet -->
                                <div class="input-group">
                                    <label for="devis-description" class="required">Description du projet</label>
                                    <textarea id="devis-description" name="description" required
                                        placeholder="Décrivez votre projet en détail : objectifs, fonctionnalités souhaitées, public cible, etc."></textarea>
                                </div>

                                <!-- Fichiers -->
                                <div class="input-group">
                                    <label for="devis-file">Documents complémentaires (cahier des charges,
                                        inspirations...)</label>
                                    <input type="file" id="devis-file" name="file"
                                        style="padding: 12px; color: var(--text-secondary);"
                                        accept=".pdf,.doc,.docx,.jpg,.png">
                                    <small style="color: var(--text-muted); font-size: 0.8rem;">PDF, Word ou images (max
                                        10Mo)</small>
                                </div>

                                <button type="submit" class="submit-btn" id="devis-submit">
                                    Demander mon devis gratuit
                                </button>
                            </form>
                        </div>

                        <!-- Info Card pour Devis -->
                        <div class="info-card">
                            <h3>Pourquoi nous choisir ?</h3>

                            <div class="contact-info-item"
                                style="background: linear-gradient(135deg, rgba(139, 92, 246, 0.1) 0%, transparent 100%); border-color: var(--primary);">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Réponse rapide</h4>
                                    <p>Devis personnalisé sous 48h ouvrées</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Devis gratuit</h4>
                                    <p>Étude de votre projet sans engagement</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4>Paiement flexible</h4>
                                    <p>Échelonnement possible selon le projet</p>
                                </div>
                            </div>

                            <div
                                style="margin-top: 30px; padding: 20px; background: var(--bg-input); border-radius: 12px; border: 1px solid var(--border);">
                                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 0.9rem;">💡 Besoin d'aide
                                    ?</h4>
                                <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                                    Vous n'êtes pas sûr de ce dont vous avez besoin ? <a href="#"
                                        onclick="switchForm('contact'); return false;"
                                        style="color: var(--primary);">Contactez-nous directement</a> pour un conseil
                                    personnalisé.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
