@extends('layout')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h2>Añadir un nuevo producto</h2>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong>hay un problema.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('items.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name"><strong>Nombre:</strong></label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="encrypted_data"><strong>Datos:</strong></label>
                <textarea class="form-control" name="encrypted_data" style="height:150px" placeholder="Enter Data" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviart</button>
                <a class="btn btn-secondary" href="{{ route('items.index') }}">Salir</a>
            </div>
        </form>
    </div>
</div>
@endsection
