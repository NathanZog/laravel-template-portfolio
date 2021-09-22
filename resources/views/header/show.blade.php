@extends('backoffice')
<div class="card w-50 mt-5" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $header->titrePrincipal }}</li>
        <li class="list-group-item">{{ $header->link1 }}</li>
        <li class="list-group-item">{{ $header->link2 }}</li>
        <li class="list-group-item">{{ $header->link3 }}</li>
        <li class="list-group-item">{{ $header->img }}</li>
        <li class="list-group-item">{{ $header->titre }}</li>
        <li class="list-group-item">{{ $header->soustitre1 }}</li>
        <li class="list-group-item">{{ $header->soustitre2 }}</li>
        <li class="list-group-item">{{ $header->soustitre3 }}</li>
        <form action="{{ route('header.show', $header->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('header.edit', $header->id) }}">Edit</a>
        </form>
    </ul>
</div>