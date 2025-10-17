    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Aplicación Laravel</title>
        <style>
            :root{
                --primary: #4F8A8B;
                --primary-600: #3f6f6f;
                --bg: #f7f8f9;
                --card: #ffffff;
                --text: #1f2933;
                --muted: #6b7280;
                --radius: 10px;
                --shadow: 0 6px 18px rgba(15,23,42,0.06);
                --glass: rgba(255,255,255,0.6);
                --gap: 1.25rem;
            }

            *{box-sizing: border-box}
            html,body{height:100%}
            body{
                margin:0;
                font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
                color:var(--text);
                background: linear-gradient(180deg, var(--bg) 0%, #eef2f4 100%);
                -webkit-font-smoothing:antialiased;
                -moz-osx-font-smoothing:grayscale;
                line-height:1.5;
                padding:2rem 1rem;
            }

            .container{
                max-width:1100px;
                margin:0 auto;
            }

            header.site-header{
                background: linear-gradient(90deg, var(--primary) 0%, var(--primary-600) 100%);
                color: #fff;
                padding:2.25rem;
                border-radius: var(--radius);
                box-shadow: var(--shadow);
                text-align:center;
            }

            header.site-header h1{
                margin:0 0 .25rem 0;
                font-size:1.75rem;
                letter-spacing: -0.5px;
            }

            header.site-header p.lead{
                margin:0 0 1rem 0;
                color: rgba(255,255,255,0.92);
            }

            nav.main-nav{
                margin-top: .75rem;
            }

            nav.main-nav ul{
                list-style:none;
                padding:0;
                margin:0;
                display:flex;
                flex-wrap:wrap;
                justify-content:center;
                gap: .75rem;
            }

            nav.main-nav a{
                color: #fff;
                text-decoration:none;
                padding:.5rem .9rem;
                border-radius:999px;
                background: rgba(255,255,255,0.06);
                transition: background .14s ease, transform .14s ease;
                font-weight:600;
                font-size:.95rem;
            }

            nav.main-nav a:focus,
            nav.main-nav a:hover{
                transform: translateY(-3px);
                background: rgba(255,255,255,0.12);
                outline:none;
            }

            /* Hero */
            .hero{
                text-align:center;
                padding:3rem 1rem;
            }

            .hero h2{
                margin:0 0 .5rem 0;
                font-size:1.5rem;
            }

            .hero p{
                margin:0 auto 1.25rem auto;
                max-width: 680px;
                color:var(--muted);
            }

            .btn-cta{
                display:inline-block;
                background:var(--primary);
                color:#fff;
                padding:.9rem 1.4rem;
                border-radius:8px;
                text-decoration:none;
                font-weight:700;
                box-shadow: 0 8px 20px rgba(79,138,139,0.18);
                transition: transform .16s ease, box-shadow .16s ease;
            }

            .btn-cta:focus,
            .btn-cta:hover{
                transform: translateY(-4px);
                box-shadow: 0 12px 28px rgba(79,138,139,0.22);
            }

            /* Features */
            .features{
                background: transparent;
                padding:2rem 0;
            }

            .features-grid{
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: var(--gap);
                align-items:stretch;
            }

            .card{
                background: var(--card);
                padding:1.5rem;
                border-radius: 12px;
                box-shadow: 0 6px 18px rgba(15,23,42,0.04);
                min-height:120px;
                display:flex;
                flex-direction:column;
                justify-content:flex-start;
                transition: transform .14s ease, box-shadow .14s ease;
                border: 1px solid rgba(16,24,32,0.03);
            }

            .card h3{
                margin:0 0 .5rem 0;
                font-size:1.05rem;
            }

            .card p{
                margin:0;
                color:var(--muted);
                font-size:.95rem;
            }

            .card:hover{
                transform: translateY(-6px);
                box-shadow: 0 18px 40px rgba(15,23,42,0.06);
            }

            .contenido{
                margin-top:1.75rem;
            }

            /* Responsive tweaks */
            @media (max-width:640px){
                header.site-header{padding:1.25rem}
                .hero{padding:2rem 0}
                nav.main-nav ul{gap:.5rem}
                header.site-header h1{font-size:1.35rem}
                .btn-cta{width:100%; text-align:center}
            }

            /* Accessibility focus ring */
            a:focus{
                outline: 3px solid rgba(79,138,139,0.18);
                outline-offset: 3px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header class="site-header" role="banner">
                <h1>Bienvenido a la Base</h1>
                <p class="lead">Este es el layout base de la aplicación Laravel</p>

                <nav class="main-nav" role="navigation" aria-label="Navegación principal">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Características</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
            </header>

            <section class="hero" role="region" aria-label="Presentación">
                <h2>Construye aplicaciones web rápidas y seguras</h2>
                <p>Esta plantilla base te permite comenzar tu proyecto Laravel con una estructura moderna y escalable.</p>
                <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                    <a class="btn-cta" href="https://marioconf.ddns.net/proyectos-laravel/app-dos*carmelo/public/heredia">Comenzar</a>
                    <a style="background-color: #bb9c01ff;" class="btn-cta" href="https://marioconf.ddns.net/proyectos-laravel/">Volver al Inicio</a>
                </div>
            </section>    

            <section class="features" role="region" aria-label="Características">
                <div class="features-grid">
                    <div class="card">
                        <h3>Rápido</h3>
                        <p>Desarrollo ágil con las herramientas de Laravel.</p>
                    </div>
                    <div class="card">
                        <h3>Seguro</h3>
                        <p>Autenticación y protección listas para usar.</p>
                    </div>
                    <div class="card">
                        <h3>Escalable</h3>
                        <p>Preparado para crecer junto a tu proyecto.</p>
                    </div>
                </div>
            </section>

            <div class="contenido">
                @yield('content')
            </div>
        </div>
    </body>
    </html>
