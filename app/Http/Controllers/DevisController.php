<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Devis;
use Illuminate\Support\Facades\Route;
use App\Mail\DevisMail;
use Illuminate\Support\Facades\Mail;



class DevisController extends Controller
{
public function store(Request $request)
{
    // 1️⃣ Validation (TABLEAU)
    $data = $request->validate([
        'name'    => 'required|string|max:100',
        'adress'  => 'nullable|string|max:100',
        'phone'   => 'required|string|max:20',
        'service' => 'nullable|string|max:100',
        'email'   => 'nullable|email|max:100',
        'message' => 'nullable|string|max:1000',
    ]);

    // 2️⃣ Enregistrement en base (OBJET Devis)
    $devis = Devis::create($data);


    // 3️⃣ Envoi email (OBJET attendu)
    Mail::to('solutionneurs228@gmail.com')->send(
        new DevisMail($devis)
    );

    // 4️⃣ Redirection avec message
    return back()->with('success', 'Votre message a bien été envoyé, merci.');
}


    }



