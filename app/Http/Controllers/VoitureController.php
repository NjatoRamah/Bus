<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Voiture;
class VoitureController extends Controller
{
    public function Voitureview(){
        $voiture = Voiture::select('categorie')->where('categorie', '=', 'VIP')->get();
        return view('page.catego',[
            'voiture'=> $voiture
        ]);
    }
}
