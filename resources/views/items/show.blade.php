@extends('layout')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h2>Ver mas</h2>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $item->name }}
        </div>

        <div class="form-group">
            <strong>Descripcion del producto:</strong>
            {{ $item->encrypted_data }}
        </div>

        <a class="btn btn-secondary" href="{{ route('items.index') }}">Back</a>
    </div>
</div>
@endsection
