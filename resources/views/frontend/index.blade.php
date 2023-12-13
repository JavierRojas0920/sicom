@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slider/NOTI2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider/BANNER-VIVE-1280.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider/BANNER-CAFE-1280.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider/BANNER-ROCK-1280.jpg') }}" class="d-block w-100"
                                alt="...">
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
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="{{ asset('images/programas/CULTIVANDO.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/programas/IMPULSO-ANIMAL.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/programas/CORAZON.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">NUESTRA PROGRAMACIÓN</span>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Puebla_en_mis_Recuerdos_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Yo_Invito_570x800v2.png') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Que_Monstruos_570x800v2.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Vive_Mejor_570x800.png') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Deportes_570x800.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/La_Flora_570x800_v4.png') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Todos_tenemos_algo_que_contar_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Musica_y_otras_Hierbas_570x800v2.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/Documentales_570x800.png') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion/570x800-_AMARTECINE_V1.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">NUESTRA PROGRAMACIÓN SET RADIO</span>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Noti_Espantes_570x800-1.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Memorias_Poblanas_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Las-de-8-con-Ricardo_570x800-1.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Its-only-rock_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Echele_un_quinto_al_piano-570x800-1.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/Conversatorio_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/CaféConPiquete_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/programacion_radio/AmanecerPoblano_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">DESTACADOS Y PREMIADOS</span>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/1968_570x800.png') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Anigrafias_570x800v2_ganador.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Caderas_y_Espinazo_de_Chivo_570x800_mencion.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Cafe_con_piquete_570x800_ganador.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Colores_del_futbol_570x800_v2.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/De_la_A_a_la_Z_570x800_nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/El_chile_en_nogada_570x800_nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/El_Trabajo_Infantil_570x800_ganador.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Himno_nacionalen_mixteco_570x800.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/La_Flora_570x800v2_nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Nuestros_Artistas_570x800_nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Sin_Barreras_570x800.jpg') }}" class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Todos_tenemos_algo_que_contar_570x800_nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Vibrando_Alto_570x800__nominado.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="col-md-2 mb-4">
                <img src="{{ asset('images/destacado/Voces_de_la_sierra_570x800_ganador.png') }}"
                    class="img-fluid mx-auto d-block" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                    data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slider2/BANNER-WEB-redes.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/slider2/BANNER-SPOTIFY.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide sliders" data-bs-ride="carousel">
                <div class="carousel-inner inner-carousel" role="listbox">
                    <div class="carousel-item slide active">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/168x98_AMARTECINE_V1.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/168x98_Bitacora_v1.jpg') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/ANIGRAFIAS_400x233_v2.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/callejon_168x98.jpg') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/168x98_AMARTECINE_V1.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/DEPORTES_400x233.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/OBERTURA_400x233-1.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/TODOS_TENEMOS_ALGO_QUE_CONTAR_400x233.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/VIRALIDAD_SOCIAL_400x233-1.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide">
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/clientes/VIVE_MEJOR_400x233-1.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        let items = document.querySelectorAll('.sliders .slide')

        items.forEach((el) => {
            const minPerSlide = 6
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
@endsection
