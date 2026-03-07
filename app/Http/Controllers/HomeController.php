<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function galerie()
    {
        return view('galerie');
    }

    public function formation()
    {
        return view('formation');
    }
   
    public function portfolio()
    {
        return view('portfolio');
    }
}
