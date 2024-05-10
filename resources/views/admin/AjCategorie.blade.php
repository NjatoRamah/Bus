@extends('admin.layoutsAdmin.master2')
@section('contenu')
<div class="conteneur pt-5 bg-dark" style="height: 140vh;">
    <h1 class="text-center mt-5 mb-5 ">Ajouter CATEGORIE</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    <form action="{{route('Ajoutcateg')}}" method="POST" class="text-center" enctype="multipart/form-data">
        @csrf
        {!!$errors->first('categorie','<span class= "diso">:message</span>') !!}
        <select name="categorie" id="" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
            <option value="STANDARTS">STANDARTS</option>
            <option value="LITE">LITE</option>
            <option value="VIP">VIP</option>
            <option value="PREMIUM">PREMIUM</option>
        </select>
        <input type="text" name="depart" id="" placeholder="Entez votre ville de depart...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="text" name="arrive" id="" placeholder="Entrez votre ville de destinataion...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="text" name="price" id="" placeholder="Entrez votre tarif...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="file" name="photo" id="" placeholder="Entrez votre photo...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <button type="submit" class="btn btn-primary mb-5">Ajouter categorie</button>
    </form>
</div>
@endsection