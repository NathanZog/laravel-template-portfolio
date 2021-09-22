@extends('backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1>FOOTER</h1>
        <a href="{{ route('footer.create') }}" class="btn"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre 1</th>
                <th scope="col">Ville</th>
                <th scope="col">Adresse</th>
                <th scope="col">Titre 2</th>
                <th scope="col">Titre 3</th>
                <th scope="col">Txt Footer 1</th>
                <th scope="col">Txt Footer 2</th>
                <th scope="col">Txt Footer 3</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($footer as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->titre1 }}</td>
                    <td>{{ $data->adresse }}</td>
                    <td>{{ $data->adresse2 }}</td>
                    <td>{{ $data->titre2 }}</td>
                    <td>{{ $data->titre3 }}</td>
                    <td>{{ $data->txtF1 }}</td>
                    <td>{{ $data->txtF2 }}</td>
                    <td>{{ $data->txtF3 }}</td>
                    <td>
                        <a href="{{ route('footer.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('footer.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('footer.destroy', $data->id) }}" method="post">
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
