<?php
// Obtiene la lista de directorios en la ruta actual.
$directories = glob(__DIR__ . '/*', GLOB_ONLYDIR);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Proyectos</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            margin: 0;
            padding: 2rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .back-button {
            display: inline-block;
            margin-bottom: 1.5rem;
            padding: 10px 15px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        .back-button:hover {
            background-color: #2980b9;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 2rem;
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .card a {
            display: block;
            padding: 1.5rem;
            text-decoration: none;
            color: #3498db;
            font-weight: 600;
            font-size: 1.1rem;
            word-break: break-all;
        }
        .card a:hover {
            background-color: #f9f9f9;
        }
        .no-projects {
            grid-column: 1 / -1;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="https://marioconf.ddns.net/" class="back-button">Volver</a>
        <h1>Dashboard de Proyectos</h1>
        <div class="dashboard">
            <?php if (!empty($directories)): ?>
                <?php foreach ($directories as $dir): ?>
                    <?php
                        // Obtiene solo el nombre del directorio de la ruta completa.
                        $projectName = basename($dir);
                    ?>
                    <div class="card">
                        <a href="<?= htmlspecialchars($projectName, ENT_QUOTES, 'UTF-8') ?>/">
                            <?= htmlspecialchars($projectName, ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-projects">No se encontraron proyectos en este directorio.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>