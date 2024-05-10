<?php
namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\{Client,Voiture,Contact};
use Illuminate\Support\Facades\Hash;




class PostController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function contact(){
        return view('page/contact');
    }
    public function reservation($id){
        $voiture = Voiture::find($id);
        $voiture = Voiture::select()->where('id','=',$id)->get();
        return view('page/reservation',[
            'voiture' => $voiture
        ]);
      
    }
    public function catego1(){
        $catego = 'STANDARTS';
        $catego1 = 'LITE';
        $voiture = Voiture::select()->where('categorie','=',$catego)->get();
        $voiture1 = Voiture::select()->where('categorie','=',$catego1)->get();
        return view('page/catego1',[
            'voiture'=> $voiture,
            'voiture1'=> $voiture1
        ]);
    }
    public function catego(){
        // $clientsIp = $req->getClientIp();
        // $idclients = Client::where('ip_address', $clientsIp)->value('id');
        // dd($idclients);
        $catego = 'VIP';
        $catego1 = 'PREMIUM';
        $voiture = Voiture::select()->where('categorie','=',$catego)->get();
        $voiture1 = Voiture::select()->where('categorie','=',$catego1)->get();
        return view('page.catego',[
            'voiture'=> $voiture,
            'voiture1'=> $voiture1
        ]);

    }

    // recuperation insccri
    public function recup(Request $req){
        $this->validate($req, [
            'email'=> 'email|required|unique:Clients',
            "photo"=>"required|image|mimes:png,jpg,gif"
        ]);
        // stockage image
        if($req->hasfile("photo")){
        $image = $req->file('photo');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('image',$imagename,'public');


        $inscrire = new Client();
        $inscrire ->nom = $req->input('nom');
        $inscrire ->prenom = $req->input('prenom');
        $inscrire ->email = $req->input('email');
        $inscrire ->password = bcrypt($req->input('mdp'));
        $inscrire->photo = $imagename; 
        $inscrire->save();
        $error = 'inscription réussi';
        return redirect()->route('index') ->with('error', $error);
        // dd($error);
        }        
    }

    // connexion
    public function connex(Request $req){
        $this->validate($req,[
            'email'=>'email|required',
            'password'=>'required|min:4',
        ]);
        $client = Client::where('email',$req->input('email'))->first();
        if ($client) {
            if(Hash::check($req->input('password'),$client->password)){
                Session::put('client',$client);
                if($client->statut === "users" ){
                    return redirect()->route('index') ->with('statue', 'connexion reussi!');
                }
                else{
                    return redirect()->route('adminindex') ->with('statue', 'connexion reussi!');
                }

            }
            else{
                return back()->with('statue','votre mot de passe est incorrect!');
            }
        } else {
            return back()->with('statue','Vous n"avez pas de compte');
        }
    }

    // deconnexion
    public function deconnex(){
        Session::forget('client');
        return back();
    }

    // contact

    public function cont(Request $req){
        $this->validate($req, [
             'nom' =>'required',
             'email'=> 'email|required',
             'telephone' =>'required',
             'message'=>'required'
        ]);
        $cont = new Contact();
        $cont->nom = $req->input('nom');
        $cont->email = $req->input('email');
        $cont->telephone = $req->input('telephone');
        $cont->message = $req->input('message');
        $cont->save();
        $error = 'message envoyée';
        return redirect()->route('index') ->with('error', $error);
    }
}
