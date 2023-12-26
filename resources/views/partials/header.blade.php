@php
    // obtener fecha actual
    $fecha = date('Y-m-d');
    // obtener dia de una fecha en español
    $dia = strftime('%A', strtotime($fecha));
    // arreglo nombres de dias en español
    $dias = [
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo',
    ];
    // reemplazar nombre de dia en español
    $dia = str_replace(array_keys($dias), $dias, $dia);

    // obtener mes de una fecha en español
    $mes = strftime('%B', strtotime($fecha));
    //arreglo de nombres de meses en español
    $meses = [
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre',
    ];
    // reemplazar nombre de mes en español
    $mes = str_replace(array_keys($meses), $meses, $mes);

@endphp

<section class="header_rosa">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>{{ $dia }}, {{ date('d') }} de {{ $mes }} de {{ date('Y') }}</h5>
            </div>
        </div>
    </div>
</section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="header_logo" src="{{ asset('images/logo.png') }}" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Televesión
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('television') }}">SICOM Televisión</a></li>
                        <li><a class="dropdown-item" href="{{ url('television/16.1') }}">En vivio 16.1</a></li>
                        <li><a class="dropdown-item" href="{{ url('television/16.2') }}">En vivio 16.2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Radio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('radio') }}">SICOM Radio</a></li>
                        <li><a class="dropdown-item" href="{{ url('radio/programacion') }}">Programación Radio</a></li>
                        <li><a class="dropdown-item" href="{{ url('radio/envivo') }}">Radio en vivo</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sicomnoticias.mx" target="_blanck">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sicompuebla.mx/ondemand/" target="_blanck">En demanda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('revista') }}">Revista</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn header_boton_rosa" href="{{ url('television') }}">TV en vivo</a>
                <a class="btn header_boton_amarillo" href="{{ url('radio') }}">Radio en vivo</a>
            </form>
        </div>
    </div>
</nav>
