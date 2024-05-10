<?php

namespace App\Http\Controllers;

use App\Models\{Reservation,Voiture,Client};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ReservationController extends Controller
{
    public function paye(Request $req){
        $this->validate($req, [
            'depart'=> 'required',
            'arrive'=>'required',
            'date-depart' =>'required',
            'heure-depart' =>'required',
            'place' => 'required'
        ]);
        $reserv = new Reservation();
        $prix = $req->input('place') * $req->input('total');
        $idclients = Session::get('client')->id; //recuperation id connecter
        $reserv ->id_client = $idclients;
        $reserv ->id_voiture = $req->input('id_voiture');
        $reserv ->depart = $req->input('depart');
        $reserv ->arrive = $req->input('arrive');
        $reserv ->categorie = $req->input('catego');
        $reserv->date_depart = $req->input('date-depart');
        $reserv->heure_depart = $req->input('heure-depart');
        $reserv->place = $req->input('place');
        $reserv->price_total = $prix;
        $reserv->save();
        return redirect()->route('reservaff');
        
        // return redirect()->route('recupres');
    }
    public function succes($id){
        $idres = Reservation::find($id);
        $stat = "payé";
        $idres->statut = $stat;
        $idres->save();
        return redirect()->route('reservaff');
    }
    public function reservaff(){
        $idclients = Session::get('client')->id;
        $reservation = Reservation::select()->where('id_client','=',$idclients)->get();
        return view('page.payement',[
            'reservation' => $reservation
        ]);
    }

    public function suppr($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservaff');
    }


}
