@extends('layout')

@section('title', 'Listado de Pisos en Venta')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Pisos Disponibles en tecnozv</h1>
    
    <div class="pisos-grid">
        @foreach ($pisos as $piso)
            <div class="card">
                <h2 class="piso-title">{{ $piso['nombre'] }}</h2>
                <p>{{ $piso['direccion'] }}</p>
                
                <hr class="my-3">

                <p>Metros: <strong>{{ $piso['metros'] }} m²</strong></p>
                <p class="piso-price">{{ number_format($piso['precio'], 0, ',', '.') }} €</p>
                
                <a href="{{ route('pisos.detalle', ['id' => $piso['id']]) }}" class="mt-2">Ver Detalles</a>
            </div>
        @endforeach
    </div>
@endsection