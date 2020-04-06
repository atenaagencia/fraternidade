
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>WinHappy</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/user.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" /> -->
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
</head>
<body class="nav-fixed" style="font-family: 'Montserrat', sans-serif !important">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand d-none d-sm-block" href="/"><i class="fas fa-handshake text-dark mr-3"></i><b>WIN!</b> Happy</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#">
            <i data-feather="menu"></i>
        </button>

        <!-- <form class="form-inline mr-auto d-none d-lg-block"><input class="form-control form-control-solid mr-sm-2" type="search" placeholder="Search" aria-label="Search" /></form> -->
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item no-caret mr-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Instruções</button>
            </li>
            <!-- <li class="nav-item dropdown no-caret mr-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-none d-md-inline font-weight-500"><i class="badge badge-primary p-2">Instruções</i></div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0 o-hidden mr-n15 mr-lg-0 animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="" target="_blank">
                    <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Lorem Ipsum</div>
                            Usage instructions and reference
                        </div>
                    </a>
                </div>
            </li> -->
            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://picsum.photos/200/300"/></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://picsum.photos/200/300" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                            <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">MENU PRINCIPAL</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards"
                            ><div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Painel
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="{{route('home')}}">Início</span></a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="">Minhas Transações</span></a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="{{route('banco')}}">Dados Bancários</span></a>
                            </nav>
                        </div>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="">Sorteios</span></a>
                            </nav>
                        </div>
                        
                        <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                    >Authentication
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic"
                                            >Basic
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                        <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link" href="login-basic.html">Login</a><a class="nav-link" href="register-basic.html">Register</a><a class="nav-link" href="password-basic.html">Forgot Password</a></nav>
                                        </div>
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial"
                                            >Social
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                        <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link" href="login-social.html">Login</a><a class="nav-link" href="register-social.html">Register</a><a class="nav-link" href="password-social.html">Forgot Password</a></nav>
                                        </div>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                    >Error
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="404-glitch.html">404 Page (Glitch Effect)</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                </div>
                                <a class="nav-link" href="blank.html">Blank</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">{!! auth::user()->nome !!}</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('header')
                @yield('content')
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

    <script src="{{asset('js/sb-customizer.js')}}"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>

    @include('user.features.modal_instrucoes')
    @include('user.features.modal_contato')
    @include('user.features.modal_whatsapp')
</body>
</html>
