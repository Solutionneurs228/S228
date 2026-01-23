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
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'adress'  => 'nullable|string|max:100',
            'phone'   => 'required|string|max:20',
            'service' => 'nullable|string|max:100',
            'email'   => 'nullable|email|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        $devis = Devis::create($data);

        $response = Http::withHeaders([
            'api-key' => env('BREVO_API_KEY'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'Site Web',
                'email' => 'contact@votredomaine.com',
            ],
            'to' => [
                ['email' => 'solutionneurs228@gmail.com'],
            ],
            'subject' => 'Nouveau devis reçu',
            'htmlContent' => "
                <h3>Nouveau devis</h3>
                <p>Nom : {$data['name']}</p>
                <p>Téléphone : {$data['phone']}</p>
                <p>Message : {$data['message']}</p>
            ",
        ]);

        Log::info('Brevo response', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        return back()->with('success', 'Demande envoyée avec succès');
    }
}
