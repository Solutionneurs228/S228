@extends('layouts.base')

@section('title', 'admin')
@section('meta_description', 'espace administrateur de solutionneurs228')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/formation.css') }}"> --}}
    {{-- @vite(['resources/css/admin.css']) --}}
@endpush

@section('content')

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white">
            <div class="p-6">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-6">
                <a href="#" class="flex items-center gap-3 px-6 py-3 bg-gray-800 border-l-4 border-brand-500">
                    <i class="fas fa-comments"></i>
                    <span>Témoignages</span>
                    <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">3</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition-colors">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistiques</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Gestion des Témoignages</h2>
                    <p class="text-gray-600 mt-1">Examiner, approuver ou rejeter les soumissions</p>
                </div>
                <div class="flex gap-3">
                    <select class="px-4 py-2 border rounded-lg bg-white">
                        <option>Tous les statuts</option>
                        <option>En attente</option>
                        <option>Approuvés</option>
                        <option>Rejetés</option>
                    </select>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="text-3xl font-bold text-gray-900">24</div>
                    <div class="text-sm text-gray-500">Total</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-400">
                    <div class="text-3xl font-bold text-gray-900">3</div>
                    <div class="text-sm text-gray-500">En attente</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-400">
                    <div class="text-3xl font-bold text-gray-900">20</div>
                    <div class="text-sm text-gray-500">Publiés</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-red-400">
                    <div class="text-3xl font-bold text-gray-900">1</div>
                    <div class="text-sm text-gray-500">Rejetés</div>
                </div>
            </div>

            <!-- Liste des témoignages en attente -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b bg-gray-50">
                    <h3 class="font-semibold text-gray-900">Témoignages en attente de validation</h3>
                </div>
                
                <div class="divide-y">
                    <!-- Item 1 -->
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start gap-4">
                            <img src="https://ui-avatars.com/api/?name=Amadou+T&background=random" class="w-12 h-12 rounded-full">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Amadou T.</h4>
                                        <p class="text-sm text-gray-500">PDG / Entreprise XYZ • Service: Conseil</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">★★★★★</div>
                                    </div>
                                    <span class="text-xs text-gray-400">Soumis il y a 2h</span>
                                </div>
                                <p class="mt-3 text-gray-700 italic">"Service exceptionnel, je recommande vivement ! L'équipe a été très professionnelle et à l'écoute de nos besoins..."</p>
                                <div class="mt-4 flex gap-3">
                                    <button onclick="approveTestimonial(1)" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-check"></i> Approuver
                                    </button>
                                    <button onclick="requestEdit(1)" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-edit"></i> Demander modif
                                    </button>
                                    <button onclick="rejectTestimonial(1)" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-times"></i> Rejeter
                                    </button>
                                    <button onclick="previewTestimonial(1)" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors ml-auto">
                                        <i class="fas fa-eye"></i> Aperçu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">FK</div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Fatima K.</h4>
                                        <p class="text-sm text-gray-500">Marketing Manager / ABC Corp • Service: Vidéo</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">★★★★☆</div>
                                    </div>
                                    <span class="text-xs text-gray-400">Soumis hier</span>
                                </div>
                                <p class="mt-3 text-gray-700 italic">"Très bon travail sur notre campagne vidéo. Quelques délais à améliorer mais le résultat final est top !"</p>
                                <div class="mt-4 flex gap-3">
                                    <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-check"></i> Approuver
                                    </button>
                                    <button class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-edit"></i> Demander modif
                                    </button>
                                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center gap-2">
                                        <i class="fas fa-times"></i> Rejeter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historique récent -->
            <div class="mt-8 bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b bg-gray-50">
                    <h3 class="font-semibold text-gray-900">Activité récente</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-3 text-gray-600">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Témoignage de <strong>Marie L.</strong> approuvé et publié</span>
                            <span class="ml-auto text-gray-400">Il y a 2h</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-600">
                            <i class="fas fa-times-circle text-red-500"></i>
                            <span>Témoignage de <strong>Anonyme</strong> rejeté (spam suspecté)</span>
                            <span class="ml-auto text-gray-400">Hier</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Aperçu -->
    <div id="preview-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl max-w-2xl w-full mx-4 p-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold">Aperçu du témoignage</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div id="preview-content" class="bg-gray-50 p-6 rounded-xl">
                <!-- Contenu dynamique -->
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/formation.js') }}"></script> --}}
    @vite(['resources/js/admin.js'])
@endpush