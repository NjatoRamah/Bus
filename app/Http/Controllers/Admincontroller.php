<?php

namespace App\Http\Controllers;
use Session;
use App\Models\{Admin,Client,Reservation,Voiture};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash,DB};

class Admincontroller extends Controller
{
    public function Ajoutcateg(Request $req){
        $this->validate($req, [
            'categorie'=> 'required',
            'depart'=> 'required',
            'arrive'=> 'required',
            'price'=> 'required',
            "photo"=>"required|image|mimes:png,jpg,gif"
        ]);
        // stockage image
        if($req->hasfile("photo")){
        $image = $req->file('photo');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('image_catego',$imagename,'public');


        $catego = new Voiture();
        $catego ->categorie = $req->input('categorie');
        $catego ->depart = $req->input('depart');
        $catego ->arrive = $req->input('arrive');
        $catego ->price = $req->input('price');    
        $catego ->photo = $imagename; 
        $catego->save();
        $error = 'insertion réussi';
        return redirect()->route('cat')->with('error', $error);
        }
    }
    public function Ajoutslide(){
        return view('admin.AjSlider');
    }
    public function gotocateg(){
        return view('admin.AjCategorie');
    }
    public function cat(){
        $voiture = Voiture::select()->get();
        return view('admin.categorie',[
            'voiture'=> $voiture
        ]);
        return view('admin.categorie');
    }
    public function supprcate($id){
        $voiture = Voiture::find($id);
        $voiture->delete();
        return redirect()->route('cat');
    }
    public function modifcateg($id){
        $editVoiture = Voiture::find($id)->where('id','=',$id)->get();
        // $editVoiture = Voiture::select()->where('id','=',$idvoiture)->get();
        return view('admin.editCategorie',[
            'editVoiture' => $editVoiture
        ]);
        
    }
    public function modification(Request $req){
        $this->validate($req,[
            'categorie'=>'required',
            'depart'=>'required',
            'arrive'=>'required',
            'price'=>'required',
            'photo'=>'image|nullable|max:1999',

        ]);
        if ($req->hasfile('photo')) {
            storage::delete('public/image_catego/'.$req->input('photo'));
            $voiture = Voiture::find($req->input('id'));
            $voiture->categorie = $req->input('categorie');
            $voiture->depart = $req->input('depart');
            $voiture->arrive = $req->input('arrive');
            $voiture->price = $req->input('price');

            $nomAvecExtension = $req->file('photo')->getClientOriginalName();
            $nomFotsin = pathinfo($nomAvecExtension,PATHINFO_FILENAME);
            $nomExtension = $req->file('photo')->getClientOriginalExtension();   
            $nomFichier = $nomFotsin.'_'.time().'.'.$nomExtension;
            $image = $req->file('photo')->storeAs('public/image_catego',$nomFichier);
            $voiture->photo = $nomFichier;
            $voiture->update();
        }else{
            $voiture = Voiture::find($req->input('id'));
            $voiture->categorie = $req->input('categorie');
            $voiture->depart = $req->input('depart');
            $voiture->arrive = $req->input('arrive');
            $voiture->price = $req->input('price');
            $voiture->photo = $req->input('photo');
            $voiture->update();
        }
        return redirect()->route('cat')->with('tafiditra','Le Produit '. $voiture->categorie .' est bien modifier avec succèss!');
    }

    public function reser(){
        $afficheRes = DB::table('reservations' )
        ->join('clients','clients.id','=','reservations.id_client')
        ->join('voitures', 'voitures.id', '=', 'reservations.id_voiture')
        ->get();

        return view('admin.commande',compact('afficheRes'));
    }
    public function adminindex(){
        return view('admin.adminindex');
    }
    
    public function adminconnect(Request $req){
            $this->validate($req,[
                'email'=>'email|required',
                'password'=>'required|min:4',
            ]);
            $admin = Admin::where('email',$req->input('email'))->first();
            if ($admin) {
                if(Hash::check($req->input('password'),$admin->password)){
                    Session::put('admin',$admin);
                    return redirect()->route('adminindex');
                }
                else{
                    return back()->with('statue','votre mot de passe est incorrect!');
                }
            } else {
                return back()->with('statue','Vous n"avez pas de compte');
            }
    }
    public function deconnexadmin(){
        Session::forget('admin');
        return redirect()->route('index'); 
    }
    
}
