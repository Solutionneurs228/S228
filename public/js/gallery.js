console.log('Gallery JS loaded');

const items = document.querySelectorAll('.gallery-item');
const lightbox = document.getElementById('lightbox');
const content = document.getElementById('lightboxContent');
const counter = document.getElementById('counter');
const lbTitle = document.getElementById('lbTitle');
const lbDesc = document.getElementById('lbDesc');

let index = 0;
let currentMedia = null;

/* ===== STOP MEDIA PRO ===== */
function stopMedia() {
    if (!currentMedia) return;

    if (currentMedia.tagName === 'VIDEO') {
        currentMedia.pause();
        currentMedia.src = '';
        currentMedia.load();
    }

    if (currentMedia.tagName === 'IFRAME') {
        currentMedia.src = '';
    }

    currentMedia = null;
}

/* ===== SHOW ITEM ===== */
function showItem(i) {
    stopMedia();
    content.innerHTML = '';

    const item = items[i];
    const type = item.dataset.type;
    const src = item.dataset.src;

    lbTitle.textContent = item.dataset.title || '';
    lbDesc.textContent = item.dataset.desc || '';

    let el;

    if (type === 'image') {
        el = document.createElement('img');
        el.src = src;
    }

    if (type === 'video') {
        el = document.createElement('video');
        el.src = src;
        el.controls = true;
        el.autoplay = true;
    }

    if (type === 'youtube') {
        el = document.createElement('iframe');
        el.src = `${src}?autoplay=1&rel=0`;
        el.allow = 'autoplay; encrypted-media';
        el.allowFullscreen = true;
    }

    content.appendChild(el);
    currentMedia = el;
    counter.textContent = `${i + 1} / ${items.length}`;
}

/* ===== EVENTS ===== */
items.forEach((item, i) => {
    item.addEventListener('click', () => {
        index = i;
        lightbox.classList.add('active');
        showItem(index);
    });
});

/* ===== CLOSE ===== */
document.getElementById('close').onclick = () => {
    stopMedia();
    content.innerHTML = '';
    lightbox.classList.remove('active');
};

/* ===== NAV ===== */
document.getElementById('next').onclick = () => {
    index = (index + 1) % items.length;
    showItem(index);
};

document.getElementById('prev').onclick = () => {
    index = (index - 1 + items.length) % items.length;
    showItem(index);
};

/* ===== KEYBOARD ===== */
document.addEventListener('keydown', e => {
    if (!lightbox.classList.contains('active')) return;

    if (e.key === 'Escape') {
        stopMedia();
        lightbox.classList.remove('active');
    }

    if (e.key === 'ArrowRight') document.getElementById('next').click();
    if (e.key === 'ArrowLeft') document.getElementById('prev').click();
});
