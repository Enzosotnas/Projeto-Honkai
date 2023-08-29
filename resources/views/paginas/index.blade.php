@extends('template.index')

@section('contents')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">JOGUE AGORA</h5>
                                <h1 class="display-3 text-white animated slideInDown">Junte-se ao Expresso Astral para grandes aventuras</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Conheça o mundo de Star Rail acompanhado por Dan Heng, 7 de Março , Welt e a comandante do expresso Himeko</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baixe Agora!<i class="fa fa-arrow-down ms-3"></i></a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Aproveite a Versão 1.2</h5>
                                <h1 class="display-3 text-white animated slideInDown">Nova atualização com a continuação da história, muitos eventos e 2 novos personagens</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Os caçadores de Stellarons chegaram em Star Rail. Kafka e Blade se juntam a silverwolf para fazer o futuro previsto por Elio se tornar realidade</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Conheça Kafka</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Conheça Blade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            </div>                                           
        </div>
    </div>
    <!-- Carousel End -->

@endsection