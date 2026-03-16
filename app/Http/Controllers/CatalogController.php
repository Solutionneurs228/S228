<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        // ✅ Vérifie que la variable s'appelle bien $formations
        $formations = Training::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        // ✅ Vérifie le compact
        return view('formation', compact('formations'));
        
        // Alternative explicite si tu préfères :
        // return view('catalog.index', ['formations' => $formations]);
    }
}