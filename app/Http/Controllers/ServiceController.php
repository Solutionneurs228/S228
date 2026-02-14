<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function maintenance()
    {
        return view('services.services-mir');
    }

    public function photographie()
    {
        return view('services.services-photographie');
    }

    public function webdev()
    {
        return view('services.services-webdev');
    }

    public function infographie()
    {
        return view('services.services-infographie');
    }
}
