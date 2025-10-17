@extends('layout')

@section('title', 'Contacto')

@section('content')
    <div class="card p-8">
        <h1 class="text-center">Formulario de Contacto</h1>
        <p class="text-center text-lg mb-8">Déjanos tu mensaje y te responderemos a la brevedad.</p>

        <form class="max-w-xl mx-auto space-y-4">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="w-full p-2" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2" required>
            </div>
            <div>
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" class="w-full p-2" required></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-primary text-white p-3">
                    Enviar Consulta
                </button>
            </div>
        </form>
    </div>
@endsection