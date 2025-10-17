@extends('layout')

@section('title', 'Detalle: ' . $piso['nombre'])

@section('content')
    <div class="card p-8">
        <div class="detail-header">
            <h1>{{ $piso['nombre'] }}</h1>
            <p>{{ $piso['direccion'] }}</p>
            <p class="detail-price">{{ number_format($piso['precio'], 0, ',', '.') }} €</p>
        </div>

        <h2>Características</h2>
        <div class="detail-info card">
            <div><strong>Metros Cuadrados:</strong> {{ $piso['metros'] }} m²</div>
            <div><strong>Habitaciones:</strong> {{ $piso['habitaciones'] }}</div>
        </div>

        <h2>Descripción</h2>
        <div class="card p-4 mt-3">
            <p>{{ $piso['descripcion'] }}</p>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('pisos.listado') }}"> &larr; Volver al Listado</a>
        </div>
    </div>
@endsection