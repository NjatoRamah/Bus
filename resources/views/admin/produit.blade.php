@extends('admin.layoutsAdmin.master2')
@section('contenu')


    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tableau Produit</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Numero #</th>
                        <th>Photo du produit</th> 
                        <th>Nom du produit</th> 
                        <th>Prix du produit</th> 
                        <th>Statue</th> 
                        <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (Session::has('tafiditra'))
                        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
                    @endif
                   @foreach ( $produit as $entana )
                    <tr>
                        <td>{{$entana->id}}</td>
                        <td><img src="{{asset('storage/my_images/'.$entana->saryProduit)}}" alt="" ></td>
                        <td>{{$entana->nomProduit}}</td>
                        <td>{{$entana->PrixProduit}}</td>
                        <td>
                          @if ($entana->statue == 1)
                            <label class="badge badge-success">Activé</label>
                          @else
                          <label class="badge badge-danger">Desactivé</label>
                          @endif
                        </td>
                        <td>
                          <a class="btn btn-outline-primary" href="{{url('editProduit/'.$entana->id)}}">Modifier</a>
                          <a class="btn btn-outline-danger" href="{{url('supprProduit/'.$entana->id)}}" id="btn" onclick="suppr()">Supprimer</a>
                        </td>
                        <td >
                          @if ($entana->statue == 1)
                          <a class="btn btn-outline-warning" href="{{url('DesactiveProduit/'.$entana->id)}}">Désactivé</a>
                          @else
                          <a class="btn btn-outline-success" href="{{url('activeProduit/'.$entana->id)}}">Activé</a>
                          @endif
                        </td>
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