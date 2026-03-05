<footer class="bg-gray-900 text-gray-200 py-10">

{{-- <div class="footer-top">
    <div class="footer-logo">
        <img src="/images/logo-1.png" alt="logo mtc">
    </div>
    <div>
        <div>SOLUTIONNEURS228</div>
    <div>Un bon travail en un temps reccord !!!</div>
    </div>
</div> --}}

    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 footer-container">

      <!-- Logo et slogan -->
      <div class="footer-col">
        <h3 class="footer-title">S228 Services</h3>
        <ul class="footer-ul">
            <li><a class="" href="{{ route('services.maintenance') }}">Maintenance Informatique</a></li>
            <li><a class="" href="{{ route('services.photographie') }}">Photographe & Vidéographie</a></li>
            <li><a class="" href="{{ route('services.webdev') }}">Développement Web & Mobile</a></li>
            <li><a class="" href="{{ route('services.infographie') }}">Infographie</a></li>
            <li><a class="" href="#">autres</a></li>
        </ul>
      </div>


      <div class="footer-col">
        <h3 class="footer-title">S228 Formations</h3>
        <ul class="footer-ul">
            <li><a class="" href="{{ route('formation') }}">Informatique</a></li>
            <li><a class="" href="{{ route('formation') }}">Infographie & Photoshop</a></li>
            <li><a class="" href="{{ route('formation') }}">Montage Vidéo</a></li>
            <li><a class="" href="{{ route('formation')}}">Dévéloppement Web</a></li>
            <li><a class="" href="{{ route('formation')}}">autres</a></li>
        </ul>
      </div>


      <!-- Contact -->
      <div class="footer-col">
        <h3 class="footer-title">Contact</h3>
        <ul class="footer-ul">
          <li><a href="">📍 Kara, Togo</a></li>
          <li><a href="">📞 +228 92 67 15 33</a></li>
          <li><a href="">📞 +228 97 57 49 46</a></li>
          <li><a href="">✉️ solutionneurs228@gmail.com</a></li>
        </ul>
      </div>

      <!-- Réseaux sociaux -->
      <div class="footer-col">
        <h3 class="footer-title">Suivez-nous</h3>
        <div class="flex space-x-3 mt-2">
            <ul class="footer-ul">
                <li><a href="#" class="hover:text-white">🌐 Facebook</a></li>
                <li><a href="#" class="hover:text-white">📸 Tiktok</a></li>
                <li> <a href="#" class="hover:text-white">📸 notre chaîne Whatsapp</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="mt-10 text-center text-sm text-gray-500 footer-bottom">
      © {{ date('Y') }} S228 Services. Tous droits réservés.
    </div>
  </footer>

  

