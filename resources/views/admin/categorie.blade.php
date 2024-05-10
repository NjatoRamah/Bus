@extends('admin.layoutsAdmin.master2')
@section('contenu')
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tableau categorie</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Numero #</th>
                        <th>Categorie</th>
                        <th>tarif</th>
                        <th>Ville de depart</th>
                        <th>Ville d'arrivé</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  @foreach ($voiture as $all)
                  <tbody>
                    <tr>
                        <td>{{$all->id}}</td>
                        <td>{{$all->categorie}}</td>
                        <td>{{$all->price}}</td>
                        <td>{{$all->depart}}</td>
                        <td>{{$all->arrive}}</td>
                        <td></td>
                        <td>
                          <a class="btn btn-outline-primary" href="{{route('modifcateg',['id'=>$all->id])}}">Modifier</a>
                        <a class="btn btn-outline-danger" href="{{route('supprcate',['id'=>$all->id])}}" id="btn" onclick="">Supprimer</a>
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