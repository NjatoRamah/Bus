@extends('admin.layoutsAdmin.master2')
@section('contenu')


    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tableau Commande</h4>
          @if (Session::has('erreur'))
              <div class="alert alert-danger">
                {{session::get('erreur')}}
                {{session::put('erreur',null)}}
              </div>
          @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Numero #</th>
                        <th>Nom du client</th> 
                        <th>Email</th> 
                        <th>Categorie</th> 
                        <th>Depart</th> 
                        <th>Arrive</th> 
                        <th>Heure de depart</th> 
                        <th>Date de depart</th> 
                        <th>id payement</th>
                        <th>place</th>
                        <th>total payé</th>  
                        <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @if (Session::has('tafiditra'))
                        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
                    @endif --}}
                    @foreach ($afficheRes as $res)
                        <tr>
                            <td>{{$res->id}}</td>
                            <td>{{$res->nom}}</td>
                            <td>{{$res->email}}</td>
                            <td>{{$res->categorie}}</td>
                            <td>{{$res->depart}}</td>
                            <td>{{$res->arrive}}</td>
                            <td>{{$res->heure_depart}}</td>
                            <td>{{$res->date_depart}}</td>
                            <td>non payé</td>
                            <td>{{$res->place}}</td>
                            <td>{{$res->price_total}}Ar</td>
                            <td><button class="btn btn-outline-warning" onclick="window.location=''">Voir</button></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection