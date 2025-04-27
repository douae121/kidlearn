class ActivityTracker {
    constructor() {
        this.startTime = null;
        this.currentActivity = null;
        this.timer = null;
        this.initializeEventListeners();
    }

    initializeEventListeners() {
        // Écouter les clics sur les activités
        document.querySelectorAll('.activity-link').forEach(link => {
            link.addEventListener('click', (e) => {
                const activityType = e.currentTarget.dataset.activity;
                this.startActivity(activityType);
            });
        });

        // Écouter la fin des exercices
        document.addEventListener('exerciseCompleted', (e) => {
            this.updateProgress(e.detail);
        });

        // Écouter les changements de niveau
        document.addEventListener('levelUp', (e) => {
            this.updateLevel(e.detail);
        });
    }

    startActivity(activityType) {
        this.currentActivity = activityType;
        this.startTime = Date.now();
        
        // Démarrer le timer pour le temps passé
        this.timer = setInterval(() => {
            this.updateTimeSpent();
        }, 60000); // Mise à jour toutes les minutes
    }

    updateTimeSpent() {
        if (!this.startTime || !this.currentActivity) return;

        const timeSpent = Math.floor((Date.now() - this.startTime) / 60000); // en minutes
        this.sendUpdate({
            type_activite: this.currentActivity,
            temps_passe: timeSpent
        });
    }

    updateProgress(details) {
        this.sendUpdate({
            type_activite: details.type_activite,
            score: details.score,
            niveau: details.niveau
        });
    }

    updateLevel(details) {
        this.sendUpdate({
            type_activite: details.type_activite,
            niveau: details.niveau
        });
    }

    async sendUpdate(data) {
        try {
            const response = await fetch('/enfant/activity/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    nom_enfant: document.querySelector('meta[name="enfant-name"]').content,
                    ...data
                })
            });

            if (!response.ok) {
                throw new Error('Erreur lors de la mise à jour');
            }

            const result = await response.json();
            console.log('Mise à jour réussie:', result);
        } catch (error) {
            console.error('Erreur:', error);
        }
    }

    stopActivity() {
        if (this.timer) {
            clearInterval(this.timer);
            this.timer = null;
        }
        this.currentActivity = null;
        this.startTime = null;
    }
}

// Initialiser le tracker
document.addEventListener('DOMContentLoaded', () => {
    window.activityTracker = new ActivityTracker();
}); 