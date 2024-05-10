@extends('admin.layoutsAdmin.master2')
@section('contenu')
<div  class="conteneur pt-5 bg-dark" style="height: 150vh;">
    <h1 class="text-center mt-5 mb-5 ">Modifier PRODUIT</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{route('modifProduit')}}" method="post" enctype="multipart/form-data" class="text-center">
        @csrf
        {!!$errors->first('nomProduit','<span class= "diso">:message</span>') !!}
        <input type="text" name="nomProduit" id="" placeholder="Entrez votre nom Produit...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' value ="{{$editProduit->nomProduit}}">
        {!!$errors->first('PrixProduit','<span class= "diso">:message</span>') !!}
        <input type="number" name="PrixProduit" id=""  class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;'value ="{{$editProduit->PrixProduit}}">
        {!!$errors->first('cateProduit','<span class= "diso">:message</span>') !!}
        <select name="cateProduit" id="" class="w-50 d-block mx-auto mb-5 rounded"style='height:60px;'>
            <option value="{{$editProduit->cateProduit}}">{{$editProduit->cateProduit}}</option>
            @foreach ($categorie  as $cat)
            <option value="{{$cat->nomCategorie}}">{{$cat->nomCategorie}}</option>
            @endforeach
        </select>
        {!!$errors->first('saryProduit','<span class= "diso">:message</span>') !!}
        <input type="file" name="saryProduit" id="" class="w-75 d-block mx-auto mb-5 rounded text-center"style='height:60px;' >
        {!!$errors->first('statue','<span class= "diso">:message</span>') !!}
        <label for="statue">Statue</label><input type="number" name="statue" id="statue" value="1" class="w-75 d-block mx-auto mb-5 rounded text-dark"style='height:60px;'>
        <input type="hidden" name="sarytaloha" value="{{$editProduit->saryProduit}}">
        <input type="hidden" name="id" value="{{$editProduit->id}}">
        <button type="submit" class="btn btn-primary mb-5">Modifier Produit</button>
    </form>
</div>
@endsection