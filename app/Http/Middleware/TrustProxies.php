<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    // On fait confiance à tous les proxies (Render en est un)
    protected $proxies = '*';

    // Header à utiliser pour détecter le protocole, l'IP et l’hôte
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
