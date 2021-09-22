@extends('backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1>HEADER</h1>
        <a href="{{ route('header.create') }}" class="btn"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre Principal</th>
                <th scope="col">Link 1</th>
                <th scope="col">Link 2</th>
                <th scope="col">Link 3</th>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-Titre 1</th>
                <th scope="col">Sous-Titre 2</th>
                <th scope="col">Sous-Titre 3</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($header as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->titre }}</td>
                    <td>{{ $data->link1 }}</td>
                    <td>{{ $data->link2 }}</td>
                    <td>{{ $data->link3 }}</td>
                    <td>{{ $data->img }}</td>
                    <td>{{ $data->titre }}</td>
                    <td>{{ $data->soustitre1 }}</td>
                    <td>{{ $data->soustitre2 }}</td>
                    <td>{{ $data->soustitre3 }}</td>
                    <td>
                        <a href="{{ route('header.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('header.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('header.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
