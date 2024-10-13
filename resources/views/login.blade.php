<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/bolivaricono.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/cssInicioSesion.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/cssCuadroModal.css') }}" />
    <script src="{{ asset('assets/js/BloqueoAtras.js') }}"></script>
    <title>SB Inventario / Inicio Sesión</title>
</head>
<body style="background-image: url('{{ asset('assets/img/fondoinventario1.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-color: #001f3f;">
    <div class="container2">
        <h1 class="text-center">INVENTARIO SIMON BOLIVAR 2023</h1>
        <img src="{{ asset('assets/img/bolivaricono.png') }}" alt="ICONODELBOLIVAR" class="imagen-titulo">
    </div>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="icon">
                <img src="{{ asset('assets/img/sesion2.png') }}" alt="Icono" />
            </div>
            <h1>Iniciar Sesión</h1>

            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Nombre de usuario" required />

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required />

            <button type="submit">Iniciar Sesión</button>
        </form>

        <p><a href="{{route('password.request')}}" id="recuperar-contraseña-link" class="password-link">¿Olvidaste tu contraseña?</a></p>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" id="modal-close">&times;</span>
                <h2>Recuperación de Contraseña</h2>
                <p>Ingresa tu dirección de correo electrónico para solicitar la recuperación de contraseña:</p>
                <form id="recuperar-contraseña-form" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Correo electrónico" required />
                    <button type="submit">Enviar Solicitud</button>
                </form>
            </div>
        </div>

        <script src="{{ asset('assets/js/cuadrocontrasenia.js') }}"></script>
        <script src="{{ asset('assets/js/validarEmail.js') }}"></script>
    </div>
</body>
</html>
