console.log('Gallery JS loaded');

const items = Array.from(document.querySelectorAll('.gallery-item'));

const lightbox = document.getElementById('lightbox');
const lbContent = document.querySelector('.lightbox-content');
const lbTitle = document.getElementById('lb-title');
const lbDesc = document.getElementById('lb-desc');
const counter = document.getElementById('counter');

const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');
const closeBtn = document.querySelector('.close');

let currentIndex = 0;
let isOpen = false;

/* ======================================================
   OUVERTURE D'UN MEDIA
====================================================== */
items.forEach((item, index) => {
    item.addEventListener('click', () => {
        currentIndex = index;
        openItem(item);
    });
});

function openItem(item) {
    stopAllMedia();

    lbContent.innerHTML = '';
    lbTitle.textContent = item.dataset.title || '';
    lbDesc.textContent = item.dataset.desc || '';
    counter.textContent = `${currentIndex + 1} / ${items.length}`;

    if (item.classList.contains('image')) {
        const img = item.querySelector('img').cloneNode();
        lbContent.appendChild(img);
    }

    if (item.classList.contains('video')) {
        const video = item.querySelector('video').cloneNode(true);
        video.controls = true;
        video.autoplay = true;
        video.muted = false;

        // ARRÊTER LES AUTRES VIDÉOS QUAND CELLE-CI JOUE
        video.addEventListener('play', stopAllMedia);

        lbContent.appendChild(video);
    }

    if (item.classList.contains('youtube')) {
        const iframe = document.createElement('iframe');
        iframe.src = item.dataset.video + '?autoplay=1&rel=0';
        iframe.allow = 'autoplay; fullscreen';
        iframe.frameBorder = 0;

        lbContent.appendChild(iframe);
    }

    lightbox.classList.add('active');
    isOpen = true;
}

/* ======================================================
   NAVIGATION BOUTONS
====================================================== */
nextBtn.addEventListener('click', e => {
    e.stopPropagation();
    navigate(1);
});

prevBtn.addEventListener('click', e => {
    e.stopPropagation();
    navigate(-1);
});

function navigate(step) {
    currentIndex = (currentIndex + step + items.length) % items.length;
    openItem(items[currentIndex]);
}

/* ======================================================
   CLAVIER (FLÈCHES + ESC)
====================================================== */
document.addEventListener('keydown', e => {
    if (!isOpen) return;

    switch (e.key) {
        case 'ArrowRight':
            navigate(1);
            break;
        case 'ArrowLeft':
            navigate(-1);
            break;
        case 'Escape':
            closeLightbox();
            break;
    }
});

/* ======================================================
   FERMETURE
====================================================== */
closeBtn.addEventListener('click', closeLightbox);

lightbox.addEventListener('click', e => {
    if (e.target === lightbox) closeLightbox();
});

function closeLightbox() {
    stopAllMedia();
    lbContent.innerHTML = '';
    lightbox.classList.remove('active');
    isOpen = false;
}

/* ======================================================
   ARRÊT GLOBAL DES MÉDIAS
====================================================== */
function stopAllMedia() {
    // vidéos HTML5
    document.querySelectorAll('video').forEach(v => {
        v.pause();
        v.currentTime = 0;
    });

    // vidéos YouTube
    document.querySelectorAll('iframe').forEach(f => {
        f.src = '';
    });
}
