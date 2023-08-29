@extends('template.index')

@section('contents')

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                            <h5 class="mb-3">Explore</h5>
                            <p>Descubra os segredos ocultos no mundo de Star Rail desbravando suas cidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-dice text-primary mb-4"></i>
                            <h5 class="mb-3">Divirta-se</h5>
                            <p>Ao longo de sua jornada enfrente diversos puzzles e minigames para obter recompensas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-trophy text-primary mb-4"></i>
                            <h5 class="mb-3">Conquistas</h5>
                            <p>Sistema com mais de 370 conquistas para serem desbloqueadas (algumas secretas)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Colecionáveis</h5>
                            <p>Livros espalhados pelo mapa escondem histórias ocultas a serem descobertas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.gif" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Gameplay</h6>
                    <h1 class="mb-4">Combate de Turnos</h1>
                    <p class="mb-4">O sistema de combate de Star Rail é um RPG de Turnos composta por um time de 4 personagens enfrentando inimigos por rodadas</p>
                    <p class="mb-4">O jogo também conta com o "Poder de Desbravamento", que seria o sistema de energia do jogo, com um limite de 240 por conta, onde você utiliza essa energia para adquirir recursos e melhorar seus personagens.</p>
                    <p class="mb-4">Alguns componentes do jogo:</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Missões Diárias</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Exploração de Mapas</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Chefes Semanais</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Memória do Chaos</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sistema Gacha</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Universo Simulado</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Conheça o universo de Star Rail</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection