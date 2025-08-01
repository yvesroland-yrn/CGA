<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        // Logic for the index page
        return view('Pages.index');
    }

    public function about()
    {
        // Logic for the about page
        return view('Pages.about');
    }

    public function contact()
    {
        // On retourne la vue 'Pages.contact'
        return view('Pages.contact');
    }
}
