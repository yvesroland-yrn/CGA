<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailContact;

class ContactController extends Controller
{

    /**
     * Traite l'envoi du formulaire de contact.
     */
    public function send(Request $request)
    {
        // Validation des champs du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Récupère les données du formulaire
        $data = [
            'nom' => $request->nom,
            'email' => $request->email,
            'contenu' => $request->message,
        ];

     

        $emai = 'otnielgbeonh208@gmail.com';
        Mail::send(new emailContact($request->email,$request->nom ));

        // Redirige avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}


