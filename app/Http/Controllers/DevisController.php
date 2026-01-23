<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DevisController extends Controller
{
    public function store(Request $request)
    {
        Log::info('DEBUT store()');
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'adress'  => 'nullable|string|max:100',
            'phone'   => 'required|string|max:20',
            'service' => 'nullable|string|max:100',
            'email'   => 'nullable|email|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

 Log::info('VALIDATION OK', $data);

    $devis = Devis::create($data);

    Log::info('DEVIS SAUVE', ['id' => $devis->id]);

    // 👇 LOG AVANT BREVO
    Log::info('AVANT APPEL BREVO');

    // TEMPORAIRE : STOP ICI
    return response('TEST STOP AVANT BREVO', 200);}
}
