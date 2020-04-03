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
        <div class="section p-5 bg-dark text-white font-montserrat" id="teste">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-7">
                    <h4 class="display-4 lead text-light py-4 ml-2 col-lg-10">Ganhe dinheiro com o sistema de ajuda mútua.</h4>
                    <p class="text-light text-justify col-lg-8 col-sm-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae totam hic facere numquam quae praesentium, atque aspernatur cumque suscipit ratione vitae dolorum sit consectetur, sint iusto placeat cum quia a?</p>

                    <div class="links row justify-content-center ml-4 mt-5">
                        <a href="#" class="action-button shadow animate green">Filie-se agora</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-5 mx-auto text-center py-auto py-5">
                    <video width="100%" controls class="border shadow p-4 py-4">
                        <source src="#" type="video/mp4">
                    </video>
                </div>
            </div>
            
        </div>
        <footer class="footer border-top border-dark p-5 bg-light text-dark font-montserrat">
            <div class="links text-center row justify-content-center clearfix" id="footer">
                <a href="#" class="">Lorem Ipsum</a>
                <a href="#" class="">Lorem Ipsum</a>
                <a href="#" class="">Lorem Ipsum</a>
            </div>
            <div class="text-right">
                <i class="fas fa-handshake fa-2x text-shadow shadow-sm border border-dark"></i>
            </div>
            <div class="clearfix"></div>
        </footer>
    </body>
</html>
