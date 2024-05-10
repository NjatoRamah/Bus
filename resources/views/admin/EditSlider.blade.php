@extends('admin.layoutsAdmin.master2')
@section('titre-admin')
Modifier Sliders
@endsection
@section('contenu')
<section id="produit" class="pt-5 bg-dark" style="height: 150vh;">
    <h1 class="cat-titre text-center">&#128190; Modifier un Slider &#128190;</h1>
    @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
    @endif
    @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
    @endif
    <form action="{{Route('ModifSlider')}}" method="post" class="add-cat" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$slaide->id}}" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;'>
        {!!$errors->first('Description1','<span class= "diso">:message</span>') !!}
        <input type="text" name="Description1" id="" placeholder="Description 1..." value="{{$slaide->Description1}}" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;'>
        {!!$errors->first('Description2','<span class= "diso">:message</span>') !!}
        <input type="text" name="Description2" id="" placeholder="Description 2..." value="{{$slaide->Description2}}" class="w-75 d-block mx-auto mb-5 rounded"style='height:60px;'>
        <input type="hidden" name="saryTaloha" value="{{$slaide->sarySlider}}" class="w-75 d-block mx-auto  rounded"style='height:60px;'>
        {!!$errors->first('sarySlider','<span class= "diso">:message</span>') !!}
        <input type="file" name="sarySlider" id="" class="w-50 d-block mx-auto  rounded "style='height:40px;margin:0 auto;'>
        <button type="submit" class="btn btn-primary " style="margin: 10px auto ;display:block;width:200px;">&#128722; Modifier Slider</button>
    </form>

</section>
@endsection
