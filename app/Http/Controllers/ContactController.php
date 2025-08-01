<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

            // MailHog intercepte les emails SMTP envoyés sur le port 1025
            // et les affiche dans une interface web à l'adresse http://localhost:8025
            // Aucun email réel n’est envoyé — utile pour tester sans utiliser Gmail.
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('test@juridiquo.test') // adresse factice (n'est pas utilisée réellement)
                        ->subject('Nouveau message de contact');
                $message->from($data['email'], $data['nom']);
            });

        // Redirige avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}


