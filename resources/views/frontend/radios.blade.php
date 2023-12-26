@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('radio/programacion') }}"
                                class="radio_enlace">Programación</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('radio/envivo') }}"
                                class="radio_enlace">Radio en vivo</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        @if(Request::path() == 'radio/envivo')
        <div class="row" id="en_vivo">
            {{-- <div class="col-md-4 mx-auto">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/puebla-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/ACATLAN-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/HUAUCHINANGO-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/LIBRES-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/IZUCAR-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/TEHUACAN-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/TEZIUTLAN-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/radio/canales/ZACATLAN-100x100.png') }}" class="img-fluid mx-auto d-block mb-3">
                    </div>
                </div>  
            </div> --}}
        </div>
        @elseif(Request::path() == 'radio/programacion')
        <div id="programacion"></div>
        @endif
    </div>
@endsection
