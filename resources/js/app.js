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


