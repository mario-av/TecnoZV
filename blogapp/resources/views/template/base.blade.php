    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Blog Laravel</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Blog Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.index') }}">Entradas</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.show', ['id' => 1]) }}">Ver Entrada</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.create') }}">Crear Entrada</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.store') }}">Guardar Entrada</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.edit', ['id' => 1]) }}">Editar Entrada</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.update', ['id' => 1]) }}">Actualizar Entrada</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog.destroy', ['id' => 1]) }}">Eliminar Entrada</a></li>
                    </ul>
                </div>    </nav>

        <header class="container mb-4">
            <div class="p-4 bg-white rounded shadow-sm text-center">
                <h1 class="mb-2">Bienvenido al Blog</h1>
                <p class="lead mb-0">Tu espacio para compartir ideas con Laravel y Bootstrap</p>
            </div>
        </header>

        <main class="container">
            @yield('content')
        </main>

        <footer class="bg-primary text-white text-center py-3 mt-5">
            <small>&copy; {{ date('Y') }} Blog Laravel. Todos los derechos reservados.</small>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
