<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tecnozv | @yield('title', 'Inmobiliaria')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="container header-content">
            <h1><a href="{{ route('home') }}">tecnozv</a></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('pisos.listado') }}">Pisos</a></li>
                    <li><a href="{{ route('atencion') }}">Atención Cliente</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} tecnozv.
        </div>
    </footer>
</body>
</html>