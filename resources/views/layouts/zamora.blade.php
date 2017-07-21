<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> SSGGPP </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css')}} ">
    {{ $zamora or '' }}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="zamora-navbar">
            <div class="container">
                <img class="img-responsive" src="{{ asset('images/cintillo_2017_zamora.jpg') }}">
            </div>
        </nav>
        {{ $content }}
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Desarollado por Dirección de Tecnología y Sistemas Todos los derechos para la Coordinación de Desarollo © 2017
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
