<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Devis;

class DevisController extends Controller
{
    public function store(Request $request) {
        // validation
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'adress' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',

             // 'service' => 'required|in:mir,photo,webdev,autre',
            'service' => 'nullable|string|max:100',

            'email' => 'required|email|max:100',
            'message' => 'required|string|max:1000',


        ]);

        // enregistrement dans la BDD
        Devis::create($validated);

        // Redirection avec massage
        return back()->with('success', 'votre message a bien été envoyé, Merci');
    }}
