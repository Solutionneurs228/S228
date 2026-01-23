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


     $response = Http::withHeaders([
        'api-key' => env('BREVO_API_KEY'),
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->post('https://api.brevo.com/v3/smtp/email', [
        'sender' => [
            'name' => 'S228',
            'email' => env('MAIL_FROM_ADDRESS'),
        ],
        'to' => [
            ['email' => 'solutionneurs228@gmail.com'],
        ],
        'subject' => 'Nouvelle demande de devis',
        'htmlContent' => '
        <p>Email test</p>
        <ul>
            <li>Nom: ' . htmlspecialchars($devis->name) . '</li>
            <li>Adresse: ' . htmlspecialchars($devis->adress) . '</li>
            <li>Téléphone: ' . htmlspecialchars($devis->phone) . '</li>
            <li>Service: ' . htmlspecialchars($devis->service) . '</li>
            <li>Email: ' . htmlspecialchars($devis->email) . '</li>
            <li>Message: ' . nl2br(htmlspecialchars($devis->message)) . '</li>
        </ul>

        ',
    ]);

    return [
        'status' => $response->status(),
        'body' => $response->body(),
    ];

    // TEMPORAIRE : STOP ICI
    return response('TEST STOP AVANT BREVO', 200);}
}
