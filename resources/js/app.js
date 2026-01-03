import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.gallery-item.video').forEach(item => {
    const video = item.querySelector('video');
    const icon = item.querySelector('.play-icon');

    item.addEventListener('click', () => {
      if (video.paused) {
        video.play();
        video.controls = true;
        if (icon) icon.style.display = 'none';
      } else {
        video.pause();
      }
    });
  });
});




document.addEventListener('DOMContentLoaded', () => {

    function stopAllVideos() {

        // Vidéos locales
        document.querySelectorAll('[data-video] video').forEach(v => {
            v.pause();
            v.currentTime = 0;
            v.muted = true;
        });

        // YouTube
        document.querySelectorAll('.gallery-card.youtube.playing').forEach(card => {
            const id = card.dataset.youtube;
            card.innerHTML = `
                <img src="https://img.youtube.com/vi/${id}/hqdefault.jpg">
                <div class="overlay">
                    <span class="play-btn"></span>
                </div>
            `;
            card.classList.remove('playing');
        });
    }

    /* ===== VIDÉOS LOCALES ===== */
    document.querySelectorAll('[data-video]').forEach(card => {
        const video = card.querySelector('video');

        card.addEventListener('click', () => {
            stopAllVideos();

            video.muted = false;
            video.volume = 1;
            video.play();

            card.classList.add('playing');
        });

        video.addEventListener('ended', () => {
            card.classList.remove('playing');
        });
    });

    /* ===== YOUTUBE ===== */
    document.addEventListener('click', e => {
        const card = e.target.closest('.gallery-card.youtube');
        if (!card) return;

        stopAllVideos();

        const id = card.dataset.youtube;

        card.innerHTML = `
            <iframe
                src="https://www.youtube.com/embed/${id}?autoplay=1&rel=0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        `;

        card.classList.add('playing');
    });

});


document.addEventListener('DOMContentLoaded', () => {

    const lightbox = document.getElementById('lightbox');
    const content = lightbox.querySelector('.lightbox-content');
    const closeBtn = lightbox.querySelector('.lightbox-close');

    function closeLightbox() {
        content.innerHTML = '';
        lightbox.classList.remove('active');
    }

    // Fermeture
    closeBtn.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) closeLightbox();
    });
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeLightbox();
    });

    // Clic sur carte
    document.querySelectorAll('.gallery-card').forEach(card => {
        card.addEventListener('click', () => {

            const type = card.dataset.type;
            const src  = card.dataset.src;

            content.innerHTML = '';

            if (type === 'image') {
                content.innerHTML = `<img src="${src}">`;
            }

            if (type === 'video') {
                content.innerHTML = `
                    <video controls autoplay playsinline>
                        <source src="${src}">
                    </video>`;
            }

            if (type === 'youtube') {
                content.innerHTML = `
                    <iframe
                        src="https://www.youtube.com/embed/${src}?autoplay=1"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>`;
            }

            lightbox.classList.add('active');
        });
    });

});



