@extends('backoffice')
<form action="{{route('about.update', $about->id)}}" enctype="multipart/form-data" method="post" class="container d-flex flex-column mt-5">
    @csrf

    Titre: <input type="text" value="{{$about->titre}}" name="titre">
    Description 1: <input type="text" value="{{$about->description1}}" name="description1">
    Description 2: <input type="text" value="{{$about->description2}}" name="description2">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>