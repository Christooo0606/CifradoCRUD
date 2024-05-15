@extends('layout')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h2>Editar Productos</h2>
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

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name"><strong>Nombre:</strong></label>
                <input type="text" name="name" value="{{ $item->name }}" class="form-control" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="encrypted_data"><strong>Datos:</strong></label>
                <textarea class="form-control" name="encrypted_data" style="height:150px" placeholder="Enter Data" required>{{ $item->encrypted_data }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <a class="btn btn-secondary" href="{{ route('items.index') }}">Salir</a>
            </div>
        </form>
    </div>
</div>
@endsection
