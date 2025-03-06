<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenida</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .center-element {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .background {
            background-color: #007bff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .centrado {
            width: 80%;
            text-align: center;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ffcc00;
        }

        .mitad {
            flex: 1;
            padding: 10px;
        }

        .vertical {
            flex-direction: column;
        }

        h1 {
            font-size: 2.5em;
            margin: 20px 0;
            color: #007bff;
        }
    </style>
</head>

<body class="antialiased">
    <div class="center-element">
        <img src="{{ asset('img/welcome.png') }}" alt="Imagen de welcome" width="700px" height="700px">
    </div>
    <div class="center-element">
        <div class="center-element background centrado">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Inicio</a>
                @else
                    <div class="mitad vertical">
                        <a href="{{ route('login') }}" class="">Iniciar sesión</a>
                    </div>
                    @if (Route::has('register'))
                        <div class="mitad vertical">
                            <a href="{{ route('register') }}" class="">Registrarse</a>
                        </div>
                    @endif
                @endauth
            @endif
        </div>
    </div>
    <div class="center-element">
        <h1>Bienvenido a nuestra página de agendamiento de citas</h1>
    </div>
</body>

</html>
