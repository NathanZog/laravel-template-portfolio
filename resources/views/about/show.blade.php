@extends('backoffice')
<div class="card w-50" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $about->titre }}</li>
        <li class="list-group-item">{{ $about->description1 }}</li>
        <li class="list-group-item">{{ $about->description2 }}</li>
        <form action="{{ route('about.show', $about->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('about.edit', $about->id) }}">Edit</a>
        </form>
    </ul>
</div>