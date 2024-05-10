@extends('admin.layoutsAdmin.master2')
@section('contenu')
<div class="conteneur pt-5 bg-dark" style="height: 150vh;">
    <h1 class="text-center mt-5 mb-5 ">Modifier CATEGORIE</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif

    @foreach ($editVoiture as $valeur)
        

    <form action="{{route('modification')}}" method="POST" class="text-center">
        @csrf
        {!!$errors->first('categorie','<span class= "diso">:message</span>') !!}
        <select name="categorie" id="" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' value="{{$valeur->categorie}}">
            <option value="STANDARTS">STANDARTS</option>
            <option value="LITE">LITE</option>
            <option value="VIP">VIP</option>
            <option value="PREMIUM">PREMIUM</option>
        </select>
        <input type="text" name="depart" id="" value="{{$valeur->depart}}" placeholder="Entez votre ville de depart...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="text" name="arrive" id="" value="{{$valeur->arrive}}" placeholder="Entrez votre ville de destinataion...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="text" name="price" id="" value="{{$valeur->price}}" placeholder="Entrez votre tarif...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="file" name="photo" id="" value="{{$valeur->photo}}" placeholder="Entrez votre photo...*" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;' >
        <input type="hidden" name="id" value="{{$valeur->id}}">
        <button type="submit" class="btn btn-primary mb-5">Modifier categorie</button>
    </form>
    @endforeach
</div>
@endsection