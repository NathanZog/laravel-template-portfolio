@extends('backoffice')
<form action="{{route('header.update', $header->id)}}" enctype="multipart/form-data" method="post" class="container d-flex flex-column mt-5">
    @csrf

    Titre Principal: <input type="text" value="{{$header->titrePrincipal}}" name="titrePrincipal">
    Link 1: <input type="text" value="{{$header->link1}}" name="link1">
    Link 2: <input type="text" value="{{$header->link2}}" name="link2">
    Link 3: <input type="text" value="{{$header->link3}}" name="link3">
    Image: <input type="text" value="{{$header->image}}" name="image">
    Titre: <input type="text" value="{{$header->titre}}" name="titre">
    Sous-titre 1: <input type="text" value="{{$header->soustitre1}}" name="soustitre1">
    Sous-titre 2: <input type="text" value="{{$header->soustitre2}}" name="soustitre2">
    Sous-titre 3: <input type="text" value="{{$header->soustitre3}}" name="soustitre3">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>