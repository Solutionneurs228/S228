

        // Gestion des étoiles
        const starBtns = document.querySelectorAll('.star-btn');
        const ratingInput = document.getElementById('rating-input');
        
        starBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const value = btn.dataset.value;
                ratingInput.value = value;
                
                starBtns.forEach((star, index) => {
                    if (index < value) {
                        star.classList.remove('text-gray-300');
                        star.classList.add('text-brand-500');
                    } else {
                        star.classList.add('text-gray-300');
                        star.classList.remove('text-brand-500');
                    }
                });
            });
        });

        // Toggle text/video
        const typeInputs = document.querySelectorAll('input[name="type"]');
        const textSection = document.getElementById('text-testimonial');
        const videoSection = document.getElementById('video-testimonial');
        const messageInput = document.getElementById('message');
        const videoInput = document.getElementById('video_url');

        typeInputs.forEach(input => {
            input.addEventListener('change', () => {
                if (input.value === 'video') {
                    textSection.classList.add('hidden');
                    videoSection.classList.remove('hidden');
                    messageInput.removeAttribute('required');
                    videoInput.setAttribute('required', 'required');
                } else {
                    textSection.classList.remove('hidden');
                    videoSection.classList.add('hidden');
                    messageInput.setAttribute('required', 'required');
                    videoInput.removeAttribute('required');
                }
            });
        });

        // Compteur de caractères
        const message = document.getElementById('message');
        const charCount = document.getElementById('char-count');
        
        message.addEventListener('input', () => {
            charCount.textContent = message.value.length;
            if (message.value.length > 500) {
                charCount.classList.add('text-red-500');
            } else {
                charCount.classList.remove('text-red-500');
            }
        });

        // Preview photo
        const photoInput = document.getElementById('photo');
        const photoPreview = document.getElementById('photo-preview');
        
        photoInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    photoPreview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                };
                reader.readAsDataURL(file);
            }
        });

        // Soumission du formulaire
        const form = document.getElementById('testimonial-form');
        const submitBtn = document.getElementById('submit-btn');
        const successMessage = document.getElementById('success-message');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Validation
            if (!ratingInput.value) {
                document.getElementById('rating-error').classList.remove('hidden');
                return;
            }
            
            // Loading state
            submitBtn.disabled = true;
            submitBtn.querySelector('.btn-text').classList.add('hidden');
            submitBtn.querySelector('.btn-loading').classList.remove('hidden');
            
            // Simulation envoi (remplacer par votre API)
            await new Promise(resolve => setTimeout(resolve, 2000));
            
            // Succès
            form.classList.add('hidden');
            successMessage.classList.remove('hidden');
        });

        function resetForm() {
            form.reset();
            form.classList.remove('hidden');
            successMessage.classList.add('hidden');
            submitBtn.disabled = false;
            submitBtn.querySelector('.btn-text').classList.remove('hidden');
            submitBtn.querySelector('.btn-loading').classList.add('hidden');
            photoPreview.innerHTML = '<i class="fas fa-user text-gray-400 text-2xl"></i>';
            starBtns.forEach(star => {
                star.classList.add('text-gray-300');
                star.classList.remove('text-brand-500');
            });
            ratingInput.value = '';
        }

        // Filtres
        const filterBtns = document.querySelectorAll('.filter-btn');
        const testimonialCards = document.querySelectorAll('.testimonial-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Active state
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-brand-600', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                btn.classList.add('active', 'bg-brand-600', 'text-white');
                btn.classList.remove('bg-gray-200', 'text-gray-700');

                // Filter logic
                const filter = btn.dataset.filter;
                testimonialCards.forEach(card => {
                    if (filter === 'all' || card.dataset.type === filter || (filter === '5stars' && card.dataset.rating === '5')) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.5s ease';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });