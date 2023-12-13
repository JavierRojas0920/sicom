<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="El Sistema de Información y Comunicación (SICOM), es un Organismo Público Descentralizado encargado de promover la difusión de contenidos educativos, económicos, sociales y culturales de los habitantes del Estado de Puebla, mediante una programación radiofónica y televisiva que estimule la participación de la población.">
    <meta name="author" content="JRSystems">
    <meta name="robots" content="all">
    <meta content="https://www.facebook.com/SICOMPueblaMx/about" property="fb:profile_id">
    <meta content="es_MX" property="og:locale">
    <meta content="Sistema de Información y Comunicación del Estado de Puebla" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="https://sicompuebla.mx/" property="og:url">
    <meta content="Sicom" property="og:title">
    <meta content="El Sistema de Información y Comunicación (SICOM), es un Organismo Público Descentralizado encargado de promover la difusión de contenidos educativos, económicos, sociales y culturales de los habitantes del Estado de Puebla, mediante una programación radiofónica y televisiva que estimule la participación de la población" property="og:description">
    <meta content="https://nutrialevera.com/images/2fotoalevera-soyalevera-inicio.png" property="og:image">
    <meta content="1334" property="og:image:width">
    <meta content="1642" property="og:image:height">
    <meta content="hhttps://www.facebook.com/SICOMPueblaMx" property="og:see_also">
    <meta content="https://www.facebook.com/SICOMPueblaMx/" property="og:see_also">
    <meta content="https://twitter.com/SICOMPueblaMx" property="og:see_also">
    <title>Sicom - Sistema de Información y Comunicación del Estado de Puebla</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <link href="https://sicompuebla.mx" rel="canonical">
    <link href="https://sicompuebla.mx" rel="home">

</head>
<body class="@if(Request::path() == '/') fondo @else fondo_equipo @endif">
    @include('partials.header')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    <script src="https://kit.fontawesome.com/8c08451e9f.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
