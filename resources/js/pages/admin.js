

        function approveTestimonial(id) {
            if (confirm('Êtes-vous sûr de vouloir approuver ce témoignage ? Il sera immédiatement publié.')) {
                // API call pour approuver
                console.log('Témoignage ' + id + ' approuvé');
                // Reload ou mise à jour UI
            }
        }

        function rejectTestimonial(id) {
            const reason = prompt('Motif du rejet (sera envoyé au client par email):');
            if (reason) {
                console.log('Témoignage ' + id + ' rejeté: ' + reason);
            }
        }

        function requestEdit(id) {
            const suggestions = prompt('Suggestions de modification pour le client:');
            if (suggestions) {
                console.log('Demande de modif envoyée pour ' + id + ': ' + suggestions);
            }
        }

        function previewTestimonial(id) {
            document.getElementById('preview-modal').classList.remove('hidden');
            document.getElementById('preview-modal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('preview-modal').classList.add('hidden');
            document.getElementById('preview-modal').classList.remove('flex');
        }