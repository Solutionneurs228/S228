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
let startX = 0;

// ===== DURÉE VIDÉO LOCALE =====
document.querySelectorAll('video[data-duration]').forEach(video => {
    video.addEventListener('loadedmetadata', () => {
        const d = video.duration;
        const min = Math.floor(d / 60);
        const sec = Math.floor(d % 60).toString().padStart(2, '0');
        video.parentElement.querySelector('.duration').textContent = `${min}:${sec}`;
    });
});

// ===== OUVERTURE =====
items.forEach((item, index) => {
    item.addEventListener('click', () => {
        currentIndex = index;
        openItem(item);
    });
});

function openItem(item) {
    stopAll();
    lbContent.innerHTML = '';

    lbTitle.textContent = item.dataset.title || '';
    lbDesc.textContent = item.dataset.desc || '';
    counter.textContent = `${currentIndex + 1} / ${items.length}`;

    if (item.classList.contains('image')) {
        lbContent.appendChild(item.querySelector('img').cloneNode());
    }

    if (item.classList.contains('video')) {
        const video = item.querySelector('video').cloneNode(true);
        video.controls = true;
        video.autoplay = true;
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
}

// ===== NAVIGATION =====
nextBtn.onclick = e => { e.stopPropagation(); navigate(1); };
prevBtn.onclick = e => { e.stopPropagation(); navigate(-1); };

function navigate(step) {
    currentIndex = (currentIndex + step + items.length) % items.length;
    openItem(items[currentIndex]);
}

// ===== SWIPE MOBILE =====
lightbox.addEventListener('touchstart', e => startX = e.touches[0].clientX);
lightbox.addEventListener('touchend', e => {
    const diff = e.changedTouches[0].clientX - startX;
    if (diff > 60) navigate(-1);
    if (diff < -60) navigate(1);
});

// ===== FERMETURE =====
closeBtn.onclick = close;
lightbox.onclick = e => { if (e.target === lightbox) close(); };

function close() {
    stopAll();
    lightbox.classList.remove('active');
    lbContent.innerHTML = '';
}

function stopAll() {
    document.querySelectorAll('video').forEach(v => { v.pause(); v.currentTime = 0; });
    document.querySelectorAll('iframe').forEach(f => f.src = '');
}
