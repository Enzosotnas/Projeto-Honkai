@extends('template.index')

@section('contents')

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Mundo</h6>
                <h1 class="mb-5">Nações e Aeons</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Estação Espacial Herta</h5>
                                    <small class="text-primary">40 Baús Disponíveis</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Jarilo-VI</h5>
                                    <small class="text-primary">115 Baús Disponíveis</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Luofu do Xianzhou</h5>
                                    <small class="text-primary">177 Baús Disponíveis</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Aeons</h5>
                            <small class="text-primary">18 Aeons</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Aeons</h6>
                <h1 class="mb-5">Aeons e seus caminhos</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nanook</h5>
                    <p>A Destruição</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"O nascimento do universo é um erro. Se a civilização é um câncer emergindo silenciosamente das estrelas infinitas, então a guerra é a única linguagem comum conhecida por toda vida inteligente. Para corrigir esse erro e limpar este universo contaminado, Nanook se tornou o avatar da entropia."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lan</h5>
                    <p>A Caça</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"O Aeon conhecido como o Árbitro do Arco-íris Errante vagueia incessantemente entre os mundos para destruir os seres mortos-vivos que um dia envenenaram seu mundo natal. O custo da caçada nunca foi uma consideração para Lan. Muitas vezes, não há diferença entre a salvação que eles oferecem e a destruição total."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Yaoshi</h5>
                    <p>A Abundância</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Pergunte com sentimento, e você receberá. Yaoshi é o nutridor das vidas, o deus do paraíso eterno. Seu desejo é garantir a existência perpétua da vida. Yaoshi é um Aeon que responde a todas as preces e não suporta ver a morte e as dores das doenças."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Xipe</h5>
                    <p>A Harmonia</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Um Aeon plural de múltiplos mundos harmoniosos. A gloriosa Xipe de mil faces entoa canções de alegria e felicidade. Para enfrentar a brutalidade das leis do universo, as formas de vida inteligentes devem abandonar seu egoísmo covarde e as diferenças entre os indivíduos, fundindo-se em uma única melodia — para que os fortes ajudem os fracos e protejam a vida com a morte."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-5.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">IX</h5>
                    <p>A Inexistência</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"A existência da Inexistência é um mistério em si, sua forma envolta em camadas de névoa. IX não interage com os outros Aeons. Eles acreditam que o destino final do multiverso é o nada e, portanto, sem valor."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-6.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nous</h5>
                    <p>A Erudição</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Todas as coisas carregam perguntas sem resposta, e há uma resposta para tudo. O computador astral, originalmente destinado a fornecer respostas ao universo, ascendeu a Aeonhood. Nous espera compreender o universo e resolver todos os seus mistérios."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-7.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Qlipoth</h5>
                    <p>A Preservação</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"O construtor do Muro Celestial do Cometa, da Barreira Subespacial de Cristal e da Base do Grande Atrator. Seguidores os chamam de "Senhor Âmbar", um dos Aeons mais antigos e tenazes, tendo sobrevivido às 'Guerras do Crepúsculo'."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection