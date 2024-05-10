@extends('admin.layoutsAdmin.master2')
@section('titre-admin')
Ajouter Sliders
@endsection
@section('contenu')
<section id="produit" style="height: 150vh;" class="conteneur pt-5 bg-dark">
    <h1 class="cat-titre text-center mt-5 mb-5">&#128190; Message &#128190;</h1>
    
    <div class="content-wrapper">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tableau Commande</h4>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>Nom</th> 
                          <th>Email</th> 
                          <th>Telephone</th>  
                          <th>Message</th> 
                          <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @if (Session::has('tafiditra'))
                          <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
                      @endif --}}
                          <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><button class="btn btn-outline-warning" onclick="window.location=''">Voir</button></td>
                          </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>
@endsection
