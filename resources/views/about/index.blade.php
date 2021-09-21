@extends('backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1>ABOUT</h1>
        <a href="{{ route('about.create') }}" class="btn btn-success">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Description 1</th>
                <th scope="col">Description 2</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->titre }}</td>
                    <td>{{ $data->description1 }}</td>
                    <td>{{ $data->description2 }}</td>
                    <td>
                        <a href="{{ route('about.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('about.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('about.destroy', $data->id) }}" method="post">
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
