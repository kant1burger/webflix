<?php

namespace App\Http\Controllers;



class AboutController extends Controller

{
    public function aPropos() 
    {
        return view('a-propos', [
            'teams' => ['José', 'Julien', 'Quentin'],
        ]);
    }

    public function aProposDe($teams)
    {
        return view('a-propos-de', [
        'teams' => $teams
    ]);
    }
}