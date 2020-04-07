<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fraternidade</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/fraternidade.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> -->

    </head>
    <body class="bg-fraternidade">
        <section class="flex-center position-ref full-height">
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
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                </div>
                @if (Route::has('login'))
                <div class="links text-center row justify-content-center  py-5">
                    @auth
                        <a href="{{ route('home') }}" class="action-button shadow animate blue">
                        Ir para Início
                        </a>
                    @else
                    <!-- <div class="col-lg-6 m-0">
                        <a href="{{ route('login') }}" class="action-button shadow animate blue">
                        Fazer Login
                        </a>
                    </div> -->
                    <div class="">
                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="action-button shadow-lg animate green btn-block">Filie-se agora</a>
                        @endif
                    </div>
                    @endauth
                </div>
                <div class="text-center">
                    <h3 class="font-montserrat bg-warning text-dark p-2 mb-3">Quero saber como participar da WIN! Happy.</h3>
                    <a href="#teste" class="btn btn-outline-light"><i class="fas fa-2x fa-arrow-down"></i></a>
                </div>
                @endif
            </div>
        </section>
        <section class="bg-light text-dark col-12 p-5" id="teste" style="min-height: 500px">
            <h4 class="display-3 py-4 ml-2 col-lg-7 py-3 font-montserrat text-center mx-auto">O que é a <span class="title m-b-md font-montserrat">Win Happy?</span></h4><hr width="35%"><br>
            <p class="text-justify lead col-lg-6 col-sm-12 font-weight-bold text-center mx-auto" style="font-size: 1.29rem;">Somos um Sistema de Doação Espontânia Diferenciado, com objetivo de ajudar a distribuir renda entre os cadastrados. Trata-se de uma ação entre amigos, através da doação entre todos do grupo, assim conseguimos fazer com que todos recebam um valor consideravelmente bom de doação, não somos empresa de mmn e não possuimos CNPJ. </p>
        </section>
        <section class="bg-section-friends col-12 p-5" id="teste" style="min-height: 600px">
            <h4 class="display-4 font-montserrat text-light py-4 ml-2 col-lg-6">Ganhe dinheiro com o sistema de Ajuda Mútua</h4>
            <p class="text-light text-justify col-lg-6 col-sm-12" style="font-size: 1.29rem;">A ideia da Win Happy é muito simples, após se cadastrar no sistema, você fará uma doação num valor especifico para um donatário e tambem trará tres amigos para tambem fazer uma doação, entrando assim em uma fila única para receber doações.</p>

            <div class="links row justify-content-left ml-4 mt-5">
                <a href="#" class="action-button shadow animate green">Filie-se agora</a>
            </div>
        </section>
        <section class="bg-light text-dark col-12 p-5" id="teste" style="min-height: 500px">
            <h4 class="display-3 py-4 ml-2 col-lg-7 py-3 font-montserrat text-center mx-auto">Como Funciona?</h4><hr width="35%">
            
            <div class="box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="box-primary">
                            <h2 class="display-4 font-weight-bold font-montserrat justify-content-center mx-auto text-center row">1</h2>

                            <div class="title text-center mt-3 mb-3">
                                <h2 class="font-weight-bold font-montserrat">Cadastre-se</h2>
                            </div>

                            <div class="box-part text-center" id="box-part-primary">
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="box-primary">
                            <h2 class="display-4 font-weight-bold font-montserrat justify-content-center mx-auto text-center row">2</h2>

                            <div class="title text-center mt-3 mb-3">
                                <h2 class="font-weight-bold font-montserrat">Deposite.</h2>
                            </div>

                            <div class="box-part text-center" id="box-part-primary">
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="box-purple">

                            <h2 class="display-4 font-weight-bold font-montserrat justify-content-center mx-auto text-center row">3</h2>
                            
                            <div class="title text-center mt-3 mb-3">
                                <h2 class="font-weight-bold font-montserrat">Indique Amigos.</h2>
                            </div>

                            <div class="box-part text-center" id="box-part-purple">
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="box-success">

                            <h2 class="display-4 font-weight-bold font-montserrat justify-content-center mx-auto text-center row">4</h2>
                            
                            <div class="title text-center mt-3 mb-3">
                                <h3 class="font-weight-bold font-montserrat">Receba na conta.</h3>
                            </div>

                            <div class="box-part text-center" id="box-part-success">
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="font-weight-bold text-center mx-auto font-montserrat">Lorem Ipsum?</h3>

            <div class="links row justify-content-center ml-4 mt-5">
                <a href="{{route('login')}}" class="action-button btn-block col-lg-4 text-center animate green">Filie-se agora</a>
            </div>

        </section>


        <footer class="footer border-top border-dark p-5 bg-light text-dark font-montserrat">
            <div class="links text-center row justify-content-center clearfix" id="footer">
                <a href="#" class="">Developed by Lorem Ipsum <i class="fa fa-registered"></i></a>
            </div>
            <div class="text-right">
                <i class="fas fa-handshake fa-2x"></i>
            </div>
            <div class="clearfix"></div>
        </footer>
    </body>
</html>
