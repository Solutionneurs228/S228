@extends('layouts.app')

@section('title', 'Maintenance informatique, Photo, Vidéo & Design – TonNom')
@section('meta_description', 'Réparation ordinateur, photographie, création de cartes de visite, affiches publicitaires. Demandez votre devis gratuit dès maintenant.')

@section('content')

<!-- 🟦 HERO SECTION -->
<section class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Maintenance Informatique, Photo & Pub sur Mesure</h1>
        <p class="text-lg mb-6">Nous réparons, créons et mettons en valeur votre image, vos outils et vos projets.</p>
        <a href="" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg text-lg">📩 Demander un devis gratuit</a>
    </div>
</section>

<!-- 🛠️ SERVICES SECTION -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-12">Nos Services</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 border rounded shadow">
                <h3 class="text-xl font-semibold mb-2">🔧 Maintenance & Réparation</h3>
                <p>PC lents, virus, pannes... Nous réparons tout rapidement.</p>
            </div>
            <div class="p-6 border rounded shadow">
                <h3 class="text-xl font-semibold mb-2">📸 Photographie & Vidéo</h3>
                <p>Shootings, reportages, événements — une qualité professionnelle.</p>
            </div>
            <div class="p-6 border rounded shadow">
                <h3 class="text-xl font-semibold mb-2">🖼️ Graphisme & Impression</h3>
                <p>Cartes de visite, affiches publicitaires, flyers sur mesure.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🧾 DEVIS CTA -->
<section class="bg-blue-100 py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Prêt à donner vie à votre projet ?</h2>
    <a href="" class="bg-blue-600 text-white py-3 px-6 rounded-lg text-lg hover:bg-blue-700">📩 Demander un devis maintenant</a>
</section>

<!-- 👥 TÉMOIGNAGES -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Témoignages de Clients</h2>
        <div class="md:flex md:justify-center md:space-x-8">
            <div class="bg-white p-6 rounded shadow mb-6 md:mb-0">
                <p>“Intervention rapide et efficace. Mon PC refonctionne parfaitement. Merci !”</p>
                <p class="mt-2 font-bold">— Jean, Ouagadougou</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <p>“Les photos de notre mariage sont sublimes. Travail pro et à l’écoute.”</p>
                <p class="mt-2 font-bold">— Awa, Bobo-Dioulasso</p>
            </div>
        </div>
    </div>
</section>

<!-- 🎨 RÉALISATIONS -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-12">Quelques Réalisations</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <img src="/images/projet1.jpg" alt="Photo projet" class="rounded shadow">
            <img src="/images/projet2.jpg" alt="Affiche" class="rounded shadow">
            <img src="/images/projet3.jpg" alt="Vidéo" class="rounded shadow">
        </div>
    </div>
</section>

<!-- 📞 CONTACT RAPIDE -->
<section class="bg-gray-900 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Une question ? Besoin d’un devis rapide ?</h2>
    <p class="mb-6">Appelez-nous au <strong>+226 XX XX XX XX</strong> ou écrivez-nous sur WhatsApp.</p>
    <a href="https://wa.me/226XXXXXXXX" class="bg-green-500 py-3 px-6 rounded text-lg hover:bg-green-600">💬 Discuter sur WhatsApp</a>
</section>

@endsection
