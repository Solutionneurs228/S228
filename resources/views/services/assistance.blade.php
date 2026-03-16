@extends('layouts.base')

@section('title', 'Assistance Informatique à Distance')

@push('styles')
     @vite(['resources/css/assistance.css'])
@endpush

@section('content')
<div class="remote-support-container">
    <!-- Hero Section -->
    <section class="support-hero">
        <div class="hero-content">
            <h1>Assistance Informatique à Distance</h1>
            <p class="hero-subtitle">Support technique rapide et sécurisé pour tous vos problèmes informatiques</p>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">15 min</span>
                    <span class="stat-label">Temps moyen de connexion</span>
                </div>
                <div class="stat">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Problèmes résolus</span>
                </div>
                <div class="stat">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Disponibilité</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="connection-pulse"></div>
            <svg class="support-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
            </svg>
        </div>
    </section>

    <!-- Session Status -->
    <section class="session-status" id="sessionStatus">
        <div class="status-indicator" id="statusIndicator">
            <span class="status-dot"></span>
            <span class="status-text">En attente de connexion...</span>
        </div>
        <div class="session-timer" id="sessionTimer" style="display: none;">
            <span class="timer-label">Session active :</span>
            <span class="timer-value">00:00:00</span>
        </div>
    </section>

    <!-- Main Interface -->
    <div class="support-grid">
        <!-- Left Panel: Connection -->
        <section class="connection-panel">
            <h2>Démarrer une session</h2>

            <div class="connection-methods">
                <div class="method-tabs">
                    <button class="tab-btn active" data-tab="instant">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Connexion instantanée
                    </button>
                    <button class="tab-btn" data-tab="scheduled">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        Rendez-vous programmé
                    </button>
                </div>

                <!-- Instant Connection -->
                <div class="tab-content active" id="instant-tab">
                    <form id="instantForm" class="support-form">
                        <div class="form-group">
                            <label for="userName">Votre nom</label>
                            <input type="text" id="userName" name="user_name" required
                                   placeholder="Jean Dupont" value="{{ auth()->user()->name ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="issueType">Type de problème</label>
                            <select id="issueType" name="issue_type" required>
                                <option value="">Sélectionnez...</option>
                                <option value="software">Logiciel / Application</option>
                                <option value="hardware">Matériel / Périphérique</option>
                                <option value="network">Réseau / Internet</option>
                                <option value="account">Compte / Accès</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="issueDescription">Description du problème</label>
                            <textarea id="issueDescription" name="issue_description" rows="3"
                                      placeholder="Décrivez brièvement votre problème..."></textarea>
                        </div>

                        <div class="priority-selector">
                            <label>Urgence :</label>
                            <div class="priority-options">
                                <label class="priority-btn low">
                                    <input type="radio" name="priority" value="low">
                                    <span>Normale</span>
                                </label>
                                <label class="priority-btn medium active">
                                    <input type="radio" name="priority" value="medium" checked>
                                    <span>Élevée</span>
                                </label>
                                <label class="priority-btn high">
                                    <input type="radio" name="priority" value="high">
                                    <span>Critique</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn-connect" id="btnConnect">
                            <span class="btn-text">Demander l'assistance</span>
                            <span class="btn-loader" style="display: none;">
                                <svg class="spinner" viewBox="0 0 50 50">
                                    <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5"/>
                                </svg>
                            </span>
                        </button>
                    </form>

                    <!-- Connection Code Display -->
                    <div class="connection-code" id="connectionCode" style="display: none;">
                        <div class="code-display">
                            <span class="code-label">Votre code de session :</span>
                            <div class="code-value" id="sessionCode">---</div>
                            <button class="btn-copy" id="btnCopy" title="Copier le code">
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor">
                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                    <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                                </svg>
                            </button>
                        </div>
                        <p class="code-instruction">Communiquez ce code à votre technicien pour établir la connexion sécurisée.</p>
                        <div class="code-actions">
                            <button class="btn-secondary" id="btnCancelSession">Annuler</button>
                            <button class="btn-primary" id="btnJoinSession">Rejoindre la session</button>
                        </div>
                    </div>
                </div>

                <!-- Scheduled Appointment -->
                <div class="tab-content" id="scheduled-tab">
                    <form id="scheduledForm" class="support-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="appointmentDate">Date souhaitée</label>
                                <input type="date" id="appointmentDate" name="appointment_date" required
                                       min="{{ date('Y-m-d') }}">
                            </div>
                            <div class="form-group">
                                <label for="appointmentTime">Créneau horaire</label>
                                <select id="appointmentTime" name="appointment_time" required>
                                    <option value="">Choisir...</option>
                                    <option value="09:00">09:00 - 10:00</option>
                                    <option value="10:00">10:00 - 11:00</option>
                                    <option value="11:00">11:00 - 12:00</option>
                                    <option value="14:00">14:00 - 15:00</option>
                                    <option value="15:00">15:00 - 16:00</option>
                                    <option value="16:00">16:00 - 17:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="scheduledIssue">Nature de l'intervention</label>
                            <select id="scheduledIssue" name="issue_type" required>
                                <option value="">Sélectionnez...</option>
                                <option value="installation">Installation logicielle</option>
                                <option value="configuration">Configuration système</option>
                                <option value="training">Formation / Démonstration</option>
                                <option value="maintenance">Maintenance préventive</option>
                                <option value="diagnostic">Diagnostic complet</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="scheduledDescription">Détails complémentaires</label>
                            <textarea id="scheduledDescription" name="description" rows="3"
                                      placeholder="Précisez vos besoins..."></textarea>
                        </div>

                        <button type="submit" class="btn-schedule">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            Prendre rendez-vous
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Right Panel: Active Session / Info -->
        <section class="info-panel" id="infoPanel">
            <div class="panel-content" id="waitingContent">
                <div class="info-card">
                    <h3>Comment ça marche ?</h3>
                    <div class="steps">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-text">
                                <strong>Demandez l'assistance</strong>
                                <p>Remplissez le formulaire avec vos informations</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-text">
                                <strong>Recevez votre code</strong>
                                <p>Un code unique est généré pour votre session</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-text">
                                <strong>Connexion sécurisée</strong>
                                <p>Le technicien se connecte avec votre autorisation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="security-notice">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    <div>
                        <strong>Connexion sécurisée</strong>
                        <p>Toutes les sessions sont chiffrées et enregistrées. Vous gardez le contrôle à tout moment.</p>
                    </div>
                </div>
            </div>

            <!-- Active Session Interface (hidden by default) -->
            <div class="panel-content active-session" id="activeSessionContent" style="display: none;">
                <div class="session-header">
                    <h3>Session en cours</h3>
                    <span class="live-badge">LIVE</span>
                </div>

                <div class="technician-info" id="technicianInfo">
                    <div class="tech-avatar">
                        <img src="{{ asset('images/default-avatar.png') }}" alt="Technicien" id="techAvatar">
                    </div>
                    <div class="tech-details">
                        <strong id="techName">En attente...</strong>
                        <span id="techRole">Technicien support</span>
                    </div>
                </div>

                <div class="session-controls">
                    <button class="control-btn chat-toggle" id="btnToggleChat">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
                        </svg>
                        Chat
                    </button>
                    <button class="control-btn screen-share" id="btnScreenShare">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                        Partage d'écran
                    </button>
                    <button class="control-btn pause" id="btnPauseSession">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                            <rect x="6" y="4" width="4" height="16"/>
                            <rect x="14" y="4" width="4" height="16"/>
                        </svg>
                        Pause
                    </button>
                </div>

                <div class="chat-container" id="chatContainer" style="display: none;">
                    <div class="chat-messages" id="chatMessages">
                        <div class="message system">
                            <span>Session démarrée. Vous pouvez communiquer avec votre technicien.</span>
                        </div>
                    </div>
                    <div class="chat-input">
                        <input type="text" id="chatInput" placeholder="Votre message...">
                        <button id="btnSendMessage">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                                <line x1="22" y1="2" x2="11" y2="13"/>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button class="btn-end-session" id="btnEndSession">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                        <path d="M10.68 13.31a6 6 0 007.22-7.22l-2.83-2.83M13.31 10.68a6 6 0 00-7.22 7.22l2.83 2.83M15 9l-6 6"/>
                    </svg>
                    Terminer la session
                </button>
            </div>
        </section>
    </div>

    <!-- History Section -->
    <section class="history-section">
        <h2>Historique des sessions</h2>
        <div class="history-table-container">
            <table class="history-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Technicien</th>
                        <th>Durée</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="historyTableBody">
                    <tr class="empty-state">
                        <td colspan="6">Aucune session récente</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal: Session Ended -->
    <div class="modal" id="endSessionModal" style="display: none;">
        <div class="modal-content">
            <h3>Session terminée</h3>
            <p>Votre session d'assistance est maintenant close.</p>
            <div class="rating-section" id="ratingSection">
                <label>Évaluez l'assistance reçue :</label>
                <div class="star-rating">
                    <button class="star" data-rating="1">★</button>
                    <button class="star" data-rating="2">★</button>
                    <button class="star" data-rating="3">★</button>
                    <button class="star" data-rating="4">★</button>
                    <button class="star" data-rating="5">★</button>
                </div>
            </div>
            <div class="modal-actions">
                <button class="btn-secondary" id="btnCloseModal">Fermer</button>
                <button class="btn-primary" id="btnSubmitRating">Envoyer l'évaluation</button>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    <div class="toast-container" id="toastContainer"></div>
</div>
@endsection

@push('scripts')
    @vite(['resources/js/assistance.js'])
@endpush
