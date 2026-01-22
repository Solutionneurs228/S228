<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\SendSmtpEmail;

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

    // Enregistrement BDD
    $devis = Devis::create($data);

    // Configuration Brevo API
    $config = Configuration::getDefaultConfiguration()
        ->setApiKey('api-key', env('BREVO_API_KEY'));

    $apiInstance = new TransactionalEmailsApi(
        new Client(),
        $config
    );

    $email = new SendSmtpEmail([
        'subject' => 'Nouveau devis reçu',
        'sender' => [
            'name' => 'Demande de devis',
            'email' => env('MAIL_FROM_ADDRESS'),
        ],
        'to' => [
            ['email' => env('MAIL_FROM_ADDRESS')]
        ],
        'htmlContent' => "
            <h2>Nouveau devis</h2>
            <p><b>Nom :</b> {$devis->name}</p>
            <p><b>Email :</b> {$devis->email}</p>
            <p><b>Téléphone :</b> {$devis->phone}</p>
            <p><b>Service :</b> {$devis->service}</p>
            <p><b>Message :</b><br>{$devis->message}</p>
        ",
    ]);

    $apiInstance->sendTransacEmail($email);

    return back()->with('success', 'Votre message a bien été envoyé.');
}

}
