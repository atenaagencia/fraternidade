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

    </head>
    <body class="bg-fraternidade" style="background: url(https://pcbx.us/bexy.jpg);">
        <section class="flex-center position-ref full-height">
            <div class="top-right links"></div>

            <div class="content">
                <div class="title m-b-md font-montserrat">
                <i class="fas fa-handshake text-shadow shadow-sm border"></i>
                    Fraternidade
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                </div>
                @if (Route::has('login'))
                <div class="links text-center row justify-content-center mt-5 py-4">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="action-button shadow animate blue">
                        Fazer Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="action-button shadow animate green">Registre-se</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </section>
        <div class="section p-5 bg-dark text-white font-montserrat">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="display-4 lead text-light py-4 ml-2">Lorem Ipsum</h3>
                    <p class="text-light text-justify col-lg-8 col-sm-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae totam hic facere numquam quae praesentium, atque aspernatur cumque suscipit ratione vitae dolorum sit consectetur, sint iusto placeat cum quia a?</p>

                    <div class="links row justify-content-left ml-4 mt-5">
                        <a href="#" class="action-button shadow animate green">Lorem Ipsum</a>
                    </div>
                </div>
                <div class="col-md-5 mx-auto text-center py-auto py-5">
                    <video width="100%" controls>
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
