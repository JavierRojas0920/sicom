@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('television/16.1') }}"
                                class="radio_enlace">Canal 16.1</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('television/16.2') }}"
                                class="radio_enlace">Canal 16.2</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/television/sicomtv.jpeg') }}" class="img-fluid" />
            </div>
            <div class="col-md-6 mt-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/television/PUEBLA-TV.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/television/ZACATLAN-TV.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <img src="{{ asset('images/television/LANUEVA-ERA-SICOM.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
        </div>
    </div>
@endsection
