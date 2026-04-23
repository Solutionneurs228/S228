
<h2>Nouvelle inscription à une formation</h2>

<ul>
    <li><strong>Nom :</strong> {{ $inscription->name }}</li>
    <li><strong>Adresse :</strong> {{ $inscription->adress }}</li>
    <li><strong>Téléphone :</strong> {{ $inscription->phone }}</li>
    <li><strong>Formation :</strong> {{ $inscription->service }}</li>
    <li><strong>Email :</strong> {{ $inscription->email }}</li>
</ul>

<p><strong>Message :</strong></p>
<p>{!! nl2br(e($inscription->message)) !!}</p>
