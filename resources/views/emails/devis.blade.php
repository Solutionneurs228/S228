<h2>Nouvelle demande de devis</h2>

<ul>
    <li><strong>Nom :</strong> {{ $devis->name }}</li>
    <li><strong>Adresse :</strong> {{ $devis->adress }}</li>
    <li><strong>Téléphone :</strong> {{ $devis->phone }}</li>
    <li><strong>Service :</strong> {{ $devis->service }}</li>
    <li><strong>Email :</strong> {{ $devis->email }}</li>
</ul>

<p><strong>Message :</strong></p>
<p>{!! nl2br(e($devis->message)) !!}</p>
