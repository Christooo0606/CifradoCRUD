@extends('layout')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h2>Lista de Productos</h2>
        <a href="{{ route('items.create') }}" class="btn btn-primary float-right">Crear nuevo producto</a>
    </div>
    <div class="card-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Datos Encriptados</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->encrypted_data }}</td>
                <td>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('items.show', $item->id) }}">Ver mas</a>
                        <a class="btn btn-primary" href="{{ route('items.edit', $item->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
