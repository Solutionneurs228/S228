<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Contact;

class ContactController extends Controller
{
    public function store(Request $request) {
// validations
$validated = $request->validate([
    'name' => 'required|string|max:100',
    'phone' => 'nullable|string|max:20',

    // dans le formulaire de contact il peut ne pas avoir service
    // 'service' => 'nullable|string|max:100',

    'email' => 'required|email|max:100',
    'message' => 'required|string|max:1000',

    // 'service' => 'required|in:mir,photo,webdev,autre',

]);
// enregistrement dans la BDD
Contact::create($validated);

// Redirection avec massage
return back()->with('success', 'Merci votre, message a bien été envoyé');

    }}
