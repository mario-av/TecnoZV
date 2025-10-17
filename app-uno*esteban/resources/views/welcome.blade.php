<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #eef1f5;
    margin: 0;
    padding: 0;
    color: #333;
}

header {
    background: linear-gradient(90deg, #f7193e, #ff6a5e);
    color: white;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.container {
    padding: 40px 20px;
    max-width: 1000px;
    margin: auto;
}

.card {
    background: white;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    transition: transform 0.2s ease;
}

.card:hover {
    transform: translateY(-3px);
}

a {
    color: #f7193e;
    font-weight: 500;
}

a:hover {
    text-decoration: underline;
    color: #d61435;
}
.card img {
  max-height: 160px; 
  width: auto;
  height: auto;
  display: block;
  margin: 0 auto; 
}

</style>
</head>
<body>
    <header>
        <h1>Laravel app-uno</h1>
        <p>Bienvenido al panel de inicio de tu proyecto Laravel</p>
    
    <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png" alt="laravel logo">
      <h2>Inicio</h2>
      <a href="/proyectos-laravel/">Ver proyectos laravel</a>
    </div>

    </header>

    <div class="container">
        <div class="card">
            <h2>📦 Versión de Laravel</h2>
            <p>Estás usando Laravel {{ Illuminate\Foundation\Application::VERSION }}</p>
        </div>

        <div class="card">
            <h2>📚 Documentación</h2>
            <ul>
                <li><a href="https://laravel.com/docs" target="_blank">Documentación oficial</a></li>
                <li><a href="https://laracasts.com" target="_blank">Laracasts</a></li>
                <li><a href="https://github.com/laravel/laravel" target="_blank">Repositorio en GitHub</a></li>
            </ul>
        </div>

        <div class="card">
            <h2>🚀 Comienza tu desarrollo</h2>
            <p>Explora las rutas en <code>routes/web.php</code>, crea controladores y empieza a construir tu aplicación.</p>
        </div>
    </div>
</body>
</html>
