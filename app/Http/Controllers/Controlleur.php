<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlleur extends Controller
{
    public function authentification(){
        return view('authentification');
    }
    public function adherent(){
        return view('adherent');
    }
    public function tontine(){
        return view('tontine');
    }
    public function echeance(){
        return view('echeance');
    }
    public function cotiser(){
        return view('cotiser');
    }
    public function participer(){
        return view('participer');
    }
}
