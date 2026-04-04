<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use Illuminate\Queue\SerializesModels;
// use SendinBlue\Client\Api\TransactionalEmailsApi;
// use SendinBlue\Client\Configuration;
// use SendinBlue\Client\Model\SendSmtpEmail;

// class InscriptionMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $inscription;

//     public function __construct($inscription)
//     {
//         $this->inscription = $inscription;
//     }

//     public function build()
//     {
//         // Configuration Brevo API
//         $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
//         $apiInstance = new TransactionalEmailsApi(new \GuzzleHttp\Client(), $config);

//         // Création de l'email
//         $email = new SendSmtpEmail([
//             'subject' => 'Nouvelle inscription',
//             'sender' => ['name' => env('MAIL_FROM_NAME'), 'email' => env('MAIL_FROM_ADDRESS')],
//             'to' => [['email' => env('MAIL_FROM_ADDRESS')]],
//             'htmlContent' => "<html><body>
//                 <h2>Nouvelle inscription reçue</h2>
//                 <p>Nom : {$this->inscription->name}</p>
//                 <p>Email : {$this->inscription->email}</p>
//                 <p>Phone : {$this->inscription->phone}</p>
//                 <p>Service : {$this->inscription->service}</p>
//                 <p>Message : {$this->inscription->message}</p>
//             </body></html>",
//         ]);

//         // Envoi via API
//         $apiInstance->sendTransacEmail($email);

//         // Retourne une vue Blade pour compatibilité Laravel
//         return $this->view('emails.inscription')->with(['inscription' => $this->inscription]);
    // }
// }
