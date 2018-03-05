<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Net4 Consultores</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap-grid.min.css.map') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap-reboot.min.css.map') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap4/css/bootstrap.min.css.map') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/img/logo-net4.jpg') }}">

    <!-- Plagins CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>
<body>
    <div id="app" class="page-box">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col col-xs-6 col-md-3">
                    <a href="/" class="logo">
                        <img src="{{URL::asset('/img/logo-net4.jpg')}}" width="120" height="120">
                    </a>
                </div>

                <div class="col col-xs-6 col-md-9 right-align">
                    <div class="menu main-menu">
                        <a href="#" class="menu-btn"><span></span><span></span><span></span></a>

                        <nav class="menu-list-wrap">
                            <ul class="menu-list">
                                <li class="menu-item"><a href="/">Inicio</a></li>
                                <li class="menu-item"><a href="/about-us">Quienes Somos</a></li>
                                <li class="menu-item"><a href="/services">Servicios</a></li>
                                <li class="menu-item"><a href="/contact-us">Contacto</a></li>
                            </ul>
                        </nav><!-- .menu-list-wrap -->
                    </div><!-- .main-menu -->

                    <div class="action-box">
                        <a href="#" class="header-btn">
                            <svg fill="#cccc33" width="20" height="20" viewBox="0 0 17 17" enable-background="new 0 0 17 17" xml:space="preserve">
                                <path fill="inherit" d="M16.604 15.868l-5.173-5.173c0.975-1.137 1.569-2.611 1.569-4.223 0-3.584-2.916-6.5-6.5-6.5-1.736 0-3.369 0.676-4.598 1.903-1.227 1.228-1.903 2.861-1.902 4.597 0 3.584 2.916 6.5 6.5 6.5 1.612 0 3.087-0.594 4.224-1.569l5.173 5.173 0.707-0.708zM6.5 11.972c-3.032 0-5.5-2.467-5.5-5.5-0.001-1.47 0.571-2.851 1.61-3.889 1.038-1.039 2.42-1.611 3.89-1.611 3.032 0 5.5 2.467 5.5 5.5 0 3.032-2.468 5.5-5.5 5.5z"/>
                            </svg>
                        </a>
                        <div class="action-content">
                            <div class="action-content-wrap">
                                <form class="header-search">
                                    <div class="input-field">
                                        <span class="icon">
                                            <svg fill="#000" width="20" height="20" viewBox="0 0 17 17" enable-background="new 0 0 17 17" xml:space="preserve">
                                                <path fill="inherit" d="M16.604 15.868l-5.173-5.173c0.975-1.137 1.569-2.611 1.569-4.223 0-3.584-2.916-6.5-6.5-6.5-1.736 0-3.369 0.676-4.598 1.903-1.227 1.228-1.903 2.861-1.902 4.597 0 3.584 2.916 6.5 6.5 6.5 1.612 0 3.087-0.594 4.224-1.569l5.173 5.173 0.707-0.708zM6.5 11.972c-3.032 0-5.5-2.467-5.5-5.5-0.001-1.47 0.571-2.851 1.61-3.889 1.038-1.039 2.42-1.611 3.89-1.611 3.032 0 5.5 2.467 5.5 5.5 0 3.032-2.468 5.5-5.5 5.5z"/>
                                            </svg>
                                        </span>
                                        <input class="form-control search-input" type="search" name="search" placeholder="Search ...">
                                    </div>
                                    <a class="btn close" href="#"></a>
                                </form>
                            </div>
                        </div>
                    </div><!-- .action-box -->

                </div>
            </div>
        </div>
    </header><!-- .site-header -->

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="site-footer" style="background-color: black; color:white;">
        <div class="footer-banners">
            <ul>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-1.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-2.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-3.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-4.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-5.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-6.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-7.jpg')}}" width="240" height="240">
                </li>
                <li>
                    <img src="{{URL::asset('/template/content/img/footer-8.jpg')}}" width="240" height="240">
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-xs-center text-sm-left">
                    <p>&#169; 2018 - All Rights Reserved.</p>
                </div>
                <div class="col-sm-2 text-xs-center text-sm-right">
                    <i class="fa fa-phone"> (+56) 9 4258 7407</i>
                </div>
                <div class="col-sm-2 text-xs-center text-sm-right">
                    <i class="fa fa-email"> mtoro@net4.cl</i>
                </div>
                <div class="col-sm-4 text-xs-center text-sm-right">
                    <p>NET4 Consultores Ltda.</p>
                </div>
            </div>
        </div>
    </footer><!-- .site-footer -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap4/js/bootstrap.bundle.min.js') }}"></script>     
    <script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('template/js/tether.min.js') }}"></script>
    <script src="{{ asset('template/js/appear.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.touchwipe.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

</body>
</html>
