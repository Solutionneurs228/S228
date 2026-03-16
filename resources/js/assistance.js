/**
 * Remote Support System
 * LMS Platform Integration
 */

class RemoteSupportSystem {
    constructor() {
        this.sessionActive = false;
        this.sessionCode = null;
        this.sessionStartTime = null;
        this.timerInterval = null;
        this.currentRating = 0;
        
        this.init();
    }

    init() {
        this.cacheDOM();
        this.bindEvents();
        this.loadHistory();
        this.initWebSocket();
    }

    cacheDOM() {
        // Forms
        this.instantForm = document.getElementById('instantForm');
        this.scheduledForm = document.getElementById('scheduledForm');
        
        // Tabs
        this.tabBtns = document.querySelectorAll('.tab-btn');
        this.tabContents = document.querySelectorAll('.tab-content');
        
        // Session elements
        this.connectionCode = document.getElementById('connectionCode');
        this.sessionCodeDisplay = document.getElementById('sessionCode');
        this.btnConnect = document.getElementById('btnConnect');
        this.statusIndicator = document.getElementById('statusIndicator');
        this.sessionTimer = document.getElementById('sessionTimer');
        this.timerValue = this.sessionTimer?.querySelector('.timer-value');
        
        // Active session
        this.infoPanel = document.getElementById('infoPanel');
        this.waitingContent = document.getElementById('waitingContent');
        this.activeSessionContent = document.getElementById('activeSessionContent');
        this.chatContainer = document.getElementById('chatContainer');
        this.chatMessages = document.getElementById('chatMessages');
        this.chatInput = document.getElementById('chatInput');
        
        // Modal
        this.endSessionModal = document.getElementById('endSessionModal');
        
        // Priority buttons
        this.priorityBtns = document.querySelectorAll('.priority-btn');
    }

    bindEvents() {
        // Tab switching
        this.tabBtns.forEach(btn => {
            btn.addEventListener('click', (e) => this.switchTab(e));
        });

        // Form submissions
        this.instantForm?.addEventListener('submit', (e) => this.handleInstantSubmit(e));
        this.scheduledForm?.addEventListener('submit', (e) => this.handleScheduledSubmit(e));

        // Priority selection
        this.priorityBtns.forEach(btn => {
            btn.addEventListener('click', () => this.selectPriority(btn));
        });

        // Session controls
        document.getElementById('btnCopy')?.addEventListener('click', () => this.copyCode());
        document.getElementById('btnCancelSession')?.addEventListener('click', () => this.cancelSession());
        document.getElementById('btnJoinSession')?.addEventListener('click', () => this.joinSession());
        document.getElementById('btnEndSession')?.addEventListener('click', () => this.endSession());
        document.getElementById('btnToggleChat')?.addEventListener('click', () => this.toggleChat());
        document.getElementById('btnSendMessage')?.addEventListener('click', () => this.sendMessage());
        document.getElementById('chatInput')?.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') this.sendMessage();
        });

        // Modal
        document.getElementById('btnCloseModal')?.addEventListener('click', () => this.closeModal());
        document.getElementById('btnSubmitRating')?.addEventListener('click', () => this.submitRating());
        
        // Star rating
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', (e) => this.setRating(e));
        });

        // Screen share simulation
        document.getElementById('btnScreenShare')?.addEventListener('click', () => this.toggleScreenShare());
        
        // Pause session
        document.getElementById('btnPauseSession')?.addEventListener('click', () => this.togglePause());
    }

    initWebSocket() {
        // Simulated WebSocket connection
        // In production: new WebSocket('wss://your-domain.com/ws/support')
        this.ws = {
            connected: false,
            send: (data) => console.log('WS Send:', data),
            close: () => console.log('WS Closed')
        };

        // Simulate connection after 2 seconds
        setTimeout(() => {
            this.ws.connected = true;
            console.log('WebSocket connected');
        }, 2000);
    }

    switchTab(e) {
        const tabId = e.currentTarget.dataset.tab;
        
        // Update buttons
        this.tabBtns.forEach(btn => btn.classList.remove('active'));
        e.currentTarget.classList.add('active');
        
        // Update content
        this.tabContents.forEach(content => {
            content.classList.remove('active');
            if (content.id === `${tabId}-tab`) {
                content.classList.add('active');
            }
        });
    }

    selectPriority(btn) {
        this.priorityBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        btn.querySelector('input').checked = true;
    }

    async handleInstantSubmit(e) {
        e.preventDefault();
        
        if (this.sessionActive) {
            this.showToast('Une session est déjà active', 'warning');
            return;
        }

        const formData = new FormData(this.instantForm);
        const data = Object.fromEntries(formData);
        
        // Show loader
        this.setLoading(true);

        try {
            // Simulate API call
            await this.simulateApiCall(1500);
            
            // Generate session code
            this.sessionCode = this.generateSessionCode();
            this.sessionCodeDisplay.textContent = this.sessionCode;
            
            // Show code section
            this.instantForm.style.display = 'none';
            this.connectionCode.style.display = 'block';
            
            // Update status
            this.updateStatus('waiting', 'En attente du technicien...');
            
            // Simulate technician connection after 5 seconds
            setTimeout(() => this.simulateTechnicianConnection(), 5000);
            
            this.showToast('Code de session généré', 'success');
            
        } catch (error) {
            this.showToast('Erreur lors de la création de la session', 'error');
        } finally {
            this.setLoading(false);
        }
    }

    async handleScheduledSubmit(e) {
        e.preventDefault();
        
        const formData = new FormData(this.scheduledForm);
        const data = Object.fromEntries(formData);
        
        this.setLoading(true, this.scheduledForm.querySelector('button[type="submit"]'));

        try {
            await this.simulateApiCall(1000);
            
            // Add to history
            this.addToHistory({
                date: new Date(data.appointment_date + 'T' + data.appointment_time),
                type: this.getIssueTypeLabel(data.issue_type),
                technician: '-',
                duration: '-',
                status: 'scheduled'
            });
            
            this.showToast('Rendez-vous confirmé', 'success');
            this.scheduledForm.reset();
            
        } catch (error) {
            this.showToast('Erreur lors de la prise de rendez-vous', 'error');
        } finally {
            this.setLoading(false, this.scheduledForm.querySelector('button[type="submit"]'));
        }
    }

    generateSessionCode() {
        return Math.random().toString(36).substring(2, 8).toUpperCase();
    }

    copyCode() {
        if (!this.sessionCode) return;
        
        navigator.clipboard.writeText(this.sessionCode).then(() => {
            this.showToast('Code copié !', 'success');
        }).catch(() => {
            // Fallback
            const textarea = document.createElement('textarea');
            textarea.value = this.sessionCode;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            this.showToast('Code copié !', 'success');
        });
    }

    cancelSession() {
        if (!confirm('Voulez-vous vraiment annuler cette session ?')) return;
        
        this.resetSession();
        this.showToast('Session annulée', 'info');
    }

    joinSession() {
        // Open connection interface
        this.startSession({
            technicianName: 'Technicien en cours de connexion...',
            technicianAvatar: '/images/default-avatar.png'
        });
    }

    startSession(techInfo) {
        this.sessionActive = true;
        this.sessionStartTime = Date.now();
        
        // Update UI
        this.waitingContent.style.display = 'none';
        this.activeSessionContent.style.display = 'block';
        
        // Update technician info
        document.getElementById('techName').textContent = techInfo.technicianName;
        document.getElementById('techAvatar').src = techInfo.technicianAvatar;
        
        // Update status
        this.updateStatus('connected', 'Session active - Connecté');
        document.querySelector('.session-status').classList.add('connected');
        
        // Start timer
        this.sessionTimer.style.display = 'flex';
        this.startTimer();
        
        // Add system message
        this.addChatMessage('system', 'Session démarrée. Vous pouvez communiquer avec votre technicien.');
        
        this.showToast('Session démarrée avec succès', 'success');
    }

    simulateTechnicianConnection() {
        if (!this.sessionCode) return;
        
        this.startSession({
            technicianName: 'Thomas Martin',
            technicianAvatar: '/images/tech-avatar.jpg'
        });
        
        // Simulate incoming message
        setTimeout(() => {
            this.addChatMessage('incoming', 'Bonjour ! Je suis Thomas, votre technicien support. Comment puis-je vous aider aujourd\'hui ?');
        }, 2000);
    }

    startTimer() {
        this.timerInterval = setInterval(() => {
            const elapsed = Date.now() - this.sessionStartTime;
            const hours = Math.floor(elapsed / 3600000);
            const minutes = Math.floor((elapsed % 3600000) / 60000);
            const seconds = Math.floor((elapsed % 60000) / 1000);
            
            this.timerValue.textContent = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }, 1000);
    }

    toggleChat() {
        const isVisible = this.chatContainer.style.display !== 'none';
        this.chatContainer.style.display = isVisible ? 'none' : 'flex';
        document.getElementById('btnToggleChat').classList.toggle('active', !isVisible);
    }

    sendMessage() {
        const message = this.chatInput.value.trim();
        if (!message) return;
        
        this.addChatMessage('outgoing', message);
        this.chatInput.value = '';
        
        // Simulate response
        setTimeout(() => {
            this.addChatMessage('incoming', 'Je comprends. Laissez-moi vérifier cela pour vous...');
        }, 1500);
    }

    addChatMessage(type, content) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}`;
        messageDiv.textContent = content;
        this.chatMessages.appendChild(messageDiv);
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    toggleScreenShare() {
        const btn = document.getElementById('btnScreenShare');
        const isActive = btn.classList.toggle('active');
        
        if (isActive) {
            this.showToast('Partage d\'écran démarré', 'success');
            // Simulate screen share start
        } else {
            this.showToast('Partage d\'écran arrêté', 'info');
        }
    }

    togglePause() {
        const btn = document.getElementById('btnPauseSession');
        const isPaused = btn.classList.toggle('active');
        
        if (isPaused) {
            clearInterval(this.timerInterval);
            btn.innerHTML = `
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                    <polygon points="5 3 19 12 5 21 5 3"/>
                </svg>
                Reprendre
            `;
            this.updateStatus('waiting', 'Session en pause');
            this.showToast('Session mise en pause', 'warning');
        } else {
            this.startTimer();
            btn.innerHTML = `
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor">
                    <rect x="6" y="4" width="4" height="16"/>
                    <rect x="14" y="4" width="4" height="16"/>
                </svg>
                Pause
            `;
            this.updateStatus('connected', 'Session active - Connecté');
            this.showToast('Session reprise', 'success');
        }
    }

    endSession() {
        if (!confirm('Voulez-vous vraiment terminer cette session ?')) return;
        
        // Stop timer
        clearInterval(this.timerInterval);
        
        // Calculate duration
        const duration = this.timerValue.textContent;
        
        // Add to history
        this.addToHistory({
            date: new Date(),
            type: 'Assistance instantanée',
            technician: 'Thomas Martin',
            duration: duration,
            status: 'completed'
        });
        
        // Show rating modal
        this.endSessionModal.style.display = 'flex';
        
        // Reset session state
        this.resetSession();
    }

    resetSession() {
        this.sessionActive = false;
        this.sessionCode = null;
        this.sessionStartTime = null;
        
        // Reset UI
        this.instantForm.style.display = 'block';
        this.instantForm.reset();
        this.connectionCode.style.display = 'none';
        
        this.waitingContent.style.display = 'block';
        this.activeSessionContent.style.display = 'none';
        this.chatContainer.style.display = 'none';
        this.chatMessages.innerHTML = '';
        
        this.sessionTimer.style.display = 'none';
        this.timerValue.textContent = '00:00:00';
        
        this.updateStatus('waiting', 'En attente de connexion...');
        document.querySelector('.session-status').classList.remove('connected');
        
        // Reset buttons
        document.getElementById('btnToggleChat')?.classList.remove('active');
        document.getElementById('btnScreenShare')?.classList.remove('active');
        document.getElementById('btnPauseSession')?.classList.remove('active');
    }

    setRating(e) {
        const rating = parseInt(e.target.dataset.rating);
        this.currentRating = rating;
        
        document.querySelectorAll('.star').forEach((star, index) => {
            star.classList.toggle('active', index < rating);
        });
    }

    submitRating() {
        if (this.currentRating === 0) {
            this.showToast('Veuillez sélectionner une note', 'warning');
            return;
        }
        
        // Simulate API call
        console.log('Rating submitted:', this.currentRating);
        this.showToast('Merci pour votre évaluation !', 'success');
        this.closeModal();
        
        // Reset rating
        this.currentRating = 0;
        document.querySelectorAll('.star').forEach(star => star.classList.remove('active'));
    }

    closeModal() {
        this.endSessionModal.style.display = 'none';
    }

    updateStatus(type, text) {
        const dot = this.statusIndicator.querySelector('.status-dot');
        const textSpan = this.statusIndicator.querySelector('.status-text');
        
        textSpan.textContent = text;
        
        // Update dot color based on type
        dot.style.background = type === 'connected' ? 'var(--success-color)' : 
                              type === 'error' ? 'var(--danger-color)' : 
                              'var(--warning-color)';
    }

    addToHistory(session) {
        const tbody = document.getElementById('historyTableBody');
        
        // Remove empty state if exists
        const emptyState = tbody.querySelector('.empty-state');
        if (emptyState) emptyState.remove();
        
        const row = document.createElement('tr');
        const dateStr = session.date.toLocaleDateString('fr-FR');
        const statusClass = session.status;
        const statusText = {
            'completed': 'Terminée',
            'cancelled': 'Annulée',
            'scheduled': 'Planifiée'
        }[session.status];
        
        row.innerHTML = `
            <td>${dateStr}</td>
            <td>${session.type}</td>
            <td>${session.technician}</td>
            <td>${session.duration}</td>
            <td><span class="status-badge ${statusClass}">${statusText}</span></td>
            <td>
                ${session.status === 'completed' ? 
                    '<button class="btn-secondary" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">Détails</button>' : 
                    '<button class="btn-secondary" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">Modifier</button>'}
            </td>
        `;
        
        tbody.insertBefore(row, tbody.firstChild);
    }

    loadHistory() {
        // Load from localStorage or API
        const history = JSON.parse(localStorage.getItem('supportHistory') || '[]');
        history.forEach(session => this.addToHistory(session));
    }

    setLoading(isLoading, button = this.btnConnect) {
        const text = button.querySelector('.btn-text');
        const loader = button.querySelector('.btn-loader') || button.querySelector('.spinner')?.parentElement;
        
        button.disabled = isLoading;
        if (text) text.style.display = isLoading ? 'none' : 'inline';
        if (loader) loader.style.display = isLoading ? 'flex' : 'none';
    }

    simulateApiCall(duration) {
        return new Promise(resolve => setTimeout(resolve, duration));
    }

    getIssueTypeLabel(type) {
        const labels = {
            'installation': 'Installation logicielle',
            'configuration': 'Configuration système',
            'training': 'Formation',
            'maintenance': 'Maintenance',
            'diagnostic': 'Diagnostic'
        };
        return labels[type] || type;
    }

    showToast(message, type = 'info') {
        const container = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;
        
        const icon = {
            'success': '✓',
            'error': '✕',
            'warning': '⚠',
            'info': 'ℹ'
        }[type];
        
        toast.innerHTML = `
            <span style="font-size: 1.25rem;">${icon}</span>
            <span>${message}</span>
        `;
        
        container.appendChild(toast);
        
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.remoteSupport = new RemoteSupportSystem();
});