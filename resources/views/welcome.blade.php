<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WinHappy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">

        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/fraternidade.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> -->

    </head>
    <body class="">
        <section class="flex-center position-ref full-height bg-fraternidade">
            @if (Route::has('login'))
                <div class="top-right links font-montserrat font-weight-bold clearfix">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="text-light lead p-4">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md font-montserrat">
                <i class="fas fa-handshake text-shadow shadow-sm border"></i>
                    <b>WIN!</b> Happy
                    <p class="lead">Sistema Inteligente de Incentivo a Doação Esponânea. </p>
                </div>
                @if (Route::has('login'))
                <div class="links text-center row justify-content-center  py-5">
                    @auth
                        <a href="{{ route('home') }}" class="action-button shadow animate blue">
                        Ir para Início
                        </a>
                    @else
                    <div class="m-2">
                        <a class="action-button shadow-lg animate blue btn-block js-scroll-trigger" href="#about">Ver Mais</a>
                    </div>
                    <div class="m-2">
                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="action-button shadow-lg animate green btn-block">Filie-se agora</a>
                        @endif
                    </div>
                    @endauth
                </div>
                @endif
            </div>
        </section>
        <section class="bg-light text-dark col-12 p-5" id="about" style="min-height: 500px">
            <h4 class="display-4 py-4 ml-2 col-lg-7 py-3 font-montserrat text-center mx-auto">O que é a <span class="font-montserrat">Win Happy?</span></h4><hr class="divider my-4"><br>
            <p class="text-justify lead col-lg-6 col-sm-12 font-weight-bold text-center mx-auto" style="font-size: 1.29rem;">Somos um Sistema de Doação Espontânia Diferenciado, com objetivo de ajudar a distribuir renda entre os cadastrados. Trata-se de uma ação entre amigos, através da doação entre todos do grupo, assim conseguimos fazer com que todos recebam um valor consideravelmente bom de doação, <b class="font-weight-bold">não somos empresa de mmn e não possuimos CNPJ.</b> </p>
            <div class="text-center py-4">
                <a class="btn btn-dark rounded-circle js-scroll-trigger" href="#teste"><i class="fa fa-arrow-down"></i></a>
            </div>
        </section>
        <section class="bg-section-friends col-12 p-5" id="teste" style="min-height: 600px">
            <h4 class="display-4 font-montserrat text-success py-4 ml-2 col-lg-6">Ganhe dinheiro com o sistema de <span class="text-light">Ajuda Mútua.</span></h4><br>
            <p class="text-light text-justify col-lg-6 col-md-12 col-sm-12" style="font-size: 1.29rem;">A ideia da Win Happy é muito simples, após se cadastrar no sistema, você fará uma doação num valor especifico para um donatário e tambem trará tres amigos para tambem fazer uma doação, entrando assim em uma fila única para receber doações.</p>
            
            <div class="links row justify-content-left ml-4 mt-5">
                <a href="#howto" class="action-button shadow animate blue js-scroll-trigger">Ver Mais</a>
                <a href="#about" class="action-button shadow animate green js-scroll-trigger">Filie-se agora</a>
            </div>
        </section>

        <!-- Services-->
        <section class="bg-light text-dark col-12 p-5" id="howto" style="min-height: 500px">

            <h4 class="display-4 py-4 ml-2 col-lg-7 py-3 font-montserrat text-dark text-center mx-auto">Como Funciona?</h4>
            <h3 class="text-center mx-auto py-3">Veja como é simples ganhar na Winhappy em 4 passos:</h3>
            <hr class="divider my-4">

            <div class="container pt-5">
                <div class="row mx-auto h-100">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="profile-photo-1 py-4">
                            <!-- <img src="{{asset('img/register.jpeg')}}" alt="" height="400px"> -->
                        </div>
                        <div class="profile-label">
                            <h1>Cadastre-se.</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="profile-photo-2 py-4">
                            <!-- <img src="{{asset('img/credit_card.jpg')}}" alt="" height="400px"> -->
                        </div>
                        <div class="profile-label"><h1>Faça um Depósito.</h1></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="profile-photo-3 py-4">
                            <!-- <img src="{{asset('img/sharing.jpeg')}}" alt="" height="400px"> -->
                        </div>
                        <div class="profile-label"><h1>Indique seus amigos.</h1></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="profile-photo-4 py-4">
                            <!-- <img src="{{asset('img/recieve.jpg')}}" alt="" height="400px"> -->
                        </div>
                        <div class="profile-label"><h1>Receba em Conta.</h1></div>
                    </div>
                </div>
            </div>

            {{-- <h3 class="text-center mx-auto py-3">Lorem Ipsum Dormo</h3> --}}

            <!-- <div class="container">
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-user-plus text-dark mb-4"></i>
                            <h2 class="mb-2 h3 font-weight-bold font-montserrat">1. Cadastre-se.</h2>
                            <p class="lead mb-0">Cadastre-se, crie seu usuário e senha.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-hand-holding-usd text-dark mb-4"></i>
                            <h2 class="mb-2 h3 font-weight-bold font-montserrat">2. Deposite.</h2>
                            <p class="lead mb-0">Deposite para começar a receber.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-user-friends text-dark mb-4"></i>
                            <h2 class="mb-2 h3 font-weight-bold font-montserrat">3. Indique amigos.</h2>
                            <p class="lead mb-0">Indique amigos para receberem juntos.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-wallet text-dark mb-4"></i>
                            <h2 class="mb-2 h3 font-weight-bold font-montserrat">4. Receba na conta.</h2>
                            <p class="lead mb-0">Receba tudo em sua conta bancária.</p>
                        </div>
                    </div>
                </div>

            </div> -->
            
        </section>

        <!-- Call to action-->
        <section class="p-5 bg-dark text-white" id="about">
            <div class="container text-center p-5">
                <h4 class="mb-4 display-4 font-montserrat text-center mx-auto">Contate-nos:</h4>
                <hr class="divider my-4" />
                <p class="text-light mb-5">Com apenas R$20,00 você inicia, fazendo o bem.</p>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-light"></i>
                        <div>(71) 9 8256-5951</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-light"></i><a class="d-block text-light" href="mailto:contact@yourwebsite.com">suporte@winhappy.net</a>
                    </div>
                </div>
                <!-- <div class="links row justify-content-center ml-4 mt-5">
                    <a href="{{route('login')}}" class="action-button btn-block col-lg-4 text-center animate green">Filie-se agora</a>
                </div> -->
            </div>
        </section>

        <footer class="footer border-top border-dark p-5 bg-light text-dark font-montserrat">
            <div class="links text-center row justify-content-center clearfix" id="footer">
                <p class="">Todos os Direitos Reservados por WinHappy | Desenvolvido por<a href="https://atenaagencia.com" target="_blank"> Atena Agência</a> <i class="fa fa-registered"></i></p>
            </div>
            <div class="text-right">
                <i class="fas fa-handshake fa-2x"></i>
            </div>
            <div class="clearfix"></div>
        </footer>

       <!-- Bootstrap core JS-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts-welcome.js')}}"></script>
    </body>
</html>
