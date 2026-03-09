<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function maintenance()
    {
        return view('services.maintenance');
    }

    public function photographie()
    {
        return view('services.photographie');
    }

    public function webdev()
    {
        return view('services.webdev');
    }

    public function infographie()
    {
        return view('services.infographie');
    }

    public function assistance()
    {
        return view('services.assistance');
    }
}
