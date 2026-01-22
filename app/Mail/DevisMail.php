<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use Illuminate\Queue\SerializesModels;
// use SendinBlue\Client\Api\TransactionalEmailsApi;
// use SendinBlue\Client\Configuration;
// use SendinBlue\Client\Model\SendSmtpEmail;

// class DevisMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $devis;

//     public function __construct($devis)
//     {
//         $this->devis = $devis;
//     }

//     public function build()
//     {
//         // Configuration Brevo API
//         $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
//         $apiInstance = new TransactionalEmailsApi(new \GuzzleHttp\Client(), $config);

//         // Création de l'email
//         $email = new SendSmtpEmail([
//             'subject' => 'Nouveau devis',
//             'sender' => ['name' => env('MAIL_FROM_NAME'), 'email' => env('MAIL_FROM_ADDRESS')],
//             'to' => [['email' => env('MAIL_FROM_ADDRESS')]],
//             'htmlContent' => "<html><body>
//                 <h2>Nouveau devis reçu</h2>
//                 <p>Nom : {$this->devis->name}</p>
//                 <p>Email : {$this->devis->email}</p>
//                 <p>Phone : {$this->devis->phone}</p>
//                 <p>Service : {$this->devis->service}</p>
//                 <p>Message : {$this->devis->message}</p>
//             </body></html>",
//         ]);

//         // Envoi via API
//         $apiInstance->sendTransacEmail($email);

//         // Retourne une vue Blade pour compatibilité Laravel
//         return $this->view('emails.devis')->with(['devis' => $this->devis]);
    // }
// }
