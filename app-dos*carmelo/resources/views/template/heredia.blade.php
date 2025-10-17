@extends('template.base')

@section('content')
<style>
:root{
    --accent:#4f46e5;
    --accent-2:#06b6d4;
    --muted:#6b7280;
    --bg:#f8fafc;
}
body { background: var(--bg); }

.subscribe-wrapper{
    display:flex;
    align-items:center;
    justify-content:center;
    padding:3rem 1rem;
}

.card{
    background:#fff;
    max-width:680px;
    width:100%;
    border-radius:12px;
    box-shadow:0 8px 30px rgba(2,6,23,0.08);
    padding:2rem;
    font-family:system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}

h1{
    margin:0 0 1rem;
    font-size:1.375rem;
    color:#0f172a;
    letter-spacing:0.2px;
}

.form-example{ width:100%; }

.form-row{
    display:flex;
    flex-direction:column;
    gap:0.75rem;
    margin-bottom:1rem;
}

/* make inputs share a row on wider screens */
@media (min-width:640px){
    .form-row{ flex-direction:row; }
    .field{ flex:1; }
}

.field{ display:flex; flex-direction:column; }

label{
    font-size:0.875rem;
    color:var(--muted);
    margin-bottom:0.375rem;
}

input[type="text"],
input[type="email"]{
    padding:0.75rem 0.9rem;
    border:1px solid #e6e9ef;
    border-radius:8px;
    font-size:1rem;
    transition:box-shadow .12s, border-color .12s;
    background:#fff;
}

input[type="text"]::placeholder,
input[type="email"]::placeholder{ color:#c4c7cc; }

input:focus{
    outline:none;
    border-color:var(--accent);
    box-shadow:0 6px 20px rgba(79,70,229,0.12);
}

.actions{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:1rem;
    margin-top:0.5rem;
}

.form-note{
    font-size:0.85rem;
    color:var(--muted);
}

input[type="submit"]{
    background:linear-gradient(90deg,var(--accent),var(--accent-2));
    color:#fff;
    border:0;
    padding:0.75rem 1rem;
    border-radius:10px;
    font-weight:600;
    cursor:pointer;
    box-shadow:0 6px 18px rgba(79,70,229,0.12);
    transition:transform .12s, box-shadow .12s, opacity .12s;
}

input[type="submit"]:hover{
    transform:translateY(-2px);
    opacity:0.98;
}

input[type="submit"]:active{
    transform:translateY(0);
    box-shadow:0 4px 10px rgba(79,70,229,0.1);
}
</style>

<div class="subscribe-wrapper">
    <div class="card">
        <h1>Suscríbete a Heredia</h1>

        <form action="https://marioconf.ddns.net/proyectos-laravel/app-dos*carmelo/public/" class="form-example" novalidate>
            <div class="form-row">
                <div class="field">
                    <label for="name">Nombre</label>
                    <input required type="text" name="name" id="name" placeholder="Tu nombre" />
                </div>

                <div class="field">
                    <label for="email">Correo</label>
                    <input required type="email" name="email" id="email" placeholder="tu@ejemplo.com" />
                </div>
            </div>

            <div class="actions">
                <div class="form-note">Recibe novedades y ofertas. Puedes darte de baja en cualquier momento.</div>
                <input type="submit" value="Suscribirse"/>
            </div>
        </form>
    </div>
</div>
@endsection
