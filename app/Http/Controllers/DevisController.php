<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DevisController extends Controller
{
public function store(Request $request)
{
    try {
        // Validation
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'adress'  => 'nullable|string|max:100',
            'phone'   => 'required|string|max:20',
            'service' => 'nullable|string|max:100',
            'email'   => 'nullable|email|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        // Enregistrement BDD
        $devis = Devis::create($data);

        // Envoi Brevo
        $response = Http::withHeaders([
            'api-key' => config('services.brevo.key'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'S228',
                'email' => config('mail.from.address'),
            ],
            'to' => [
                ['email' => 'solutionneurs228@gmail.com'],
            ],
            'subject' => 'Nouvelle demande de devis',
            'htmlContent' => view('emails.devis', compact('devis'))->render(),
        ]);

        // Log réponse Brevo (utile en prod)
        Log::info('Brevo email envoyé', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        return redirect()->back()->with(
            'success',
            'Votre demande a été envoyée avec succès.'
        );

    } catch (\Throwable $e) {

        Log::error('Erreur envoi devis', [
            'message' => $e->getMessage(),
        ]);

        return redirect()->back()->with(
            'error',
            'Une erreur est survenue. Veuillez réessayer plus tard.'
        );
    }
}

}
