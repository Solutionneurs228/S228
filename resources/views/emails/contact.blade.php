<h2>Nouveau message de contact</h2>

<ul>
    <li><strong>Nom :</strong> {{ $contact->name }}</li>
    <li><strong>Téléphone :</strong> {{ $contact->phone }}</li>
    <li><strong>Email :</strong> {{ $contact->email }}</li>
</ul>

<p><strong>Message :</strong></p>
<p>{!! nl2br(e($contact->message)) !!}</p>
