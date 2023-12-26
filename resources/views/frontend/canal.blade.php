@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('television') }}"
                                class="radio_enlace">Televisión</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('television/16.1') }}"
                                class="radio_enlace">Canal 16.1</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('television/16.2') }}"
                                class="radio_enlace">Canal 16.2</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        @if (Request::path() == 'television/16.1')
            <div id="video_161"></div>
        @elseif(Request::path() == 'television/16.2')
            <div id="video_162"></div>
        @endif
    </div>
@endsection
