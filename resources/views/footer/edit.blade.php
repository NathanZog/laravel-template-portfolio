@extends('backoffice')
<form action="{{route('footer.update', $footer->id)}}" enctype="multipart/form-data" method="post" class="container d-flex flex-column mt-5">
    @csrf

    Titre 1: <input type="text" value="{{$footer->titre1}}" name="titre1">
    Ville: <input type="text" value="{{$footer->adresse}}" name="adresse">
    Adresse: <input type="text" value="{{$footer->adresse2}}" name="adresse2">
    Titre 2: <input type="text" value="{{$footer->titre2}}" name="titre2">
    Titre 3: <input type="text" value="{{$footer->titre3}}" name="titre3">
    Texte Footer 1: <input type="text" value="{{$footer->txtF1}}" name="txtF1">
    Texte Footer 2: <input type="text" value="{{$footer->txtF2}}" name="txtF2">
    Texte Footer 3: <input type="text" value="{{$footer->txtF3}}" name="txtF3">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>