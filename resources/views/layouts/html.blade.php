<!DOCTYPE html>
<html lang="es">
<head>

    @yield('header')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/landing.css')}}">

</head>

<body>

<div class="KW_progressContainer">
    <div class="KW_progressBar">

    </div>
</div>
<div class="page">
    <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="img" style="background-image: url({{ asset('images/author-2.jpg')}});"></div>
            <div class="colorlib-table-cell js-fullheight">
                <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-4"><a href="{{ route('show_home_path') }}" class="logo">Santiago Hurtado</a>
                        </h1>
                        <ul>

                            <li class="active"><a href="{{route('show_home_path') }}"><span><small>01</small>Home</span></a>
                            </li>
                            <li><a href="{{route('show_about_path')}}"><span><small>02</small>Resumen</span></a></li>
                            <li><a href="{{route('show_services_path')
                            }}"><span><small>03</small>Servicios</span></a></li>
                            <li><a href="{{route('show_portfolio_path')}}"><span><small>04</small>Portafolio</span></a>
                            </li>
                            <li><a href="{{route('show_blog_path')}}"><span><small>05</small>Blog</span></a></li>
                            <li><a href="{{route('show_contact_path')}}"><span><small>06</small>Contáctame</span></a>
                            </li>
                            @yield('extra_menu')

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="colorlib-page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colorlib-navbar-brand">
                            <a class="colorlib-logo" href="{{route('show_home_path')}}"><span class="logo-img" style="background-image: url({{asset('images/person_1.jpg')}});"></span>Santiago
                                Hurtado</a>
                        </div>
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>
        <section class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <p><a href="#" class="scroll">Hola! Soy</a></p>
                            <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Santiago
                                Hurtado</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <p><a href="#" class="scroll">Soy de Colombia</a></p>
                            <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">Web
                                Developer</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END slider -->

        @yield('content')
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-5 text-center">
                    <div class="ftco-footer-widget mb-5">
                        <ul class="ftco-footer-social list-unstyled">
                            <li>
                                <a href="https://twitter.com/mefistobaal96" target="_blank"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Mefisto.Baal.SH" target="_blank"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="https://gitlab.com/mefistobaal" target="_blank"><span class="icon-gitlab"></span></a>
                            </li>
                            <li>
                                <a href="https://t.me/MefistoBaal" target="_blank"><span class="icon-telegram"></span></a>
                            </li>
                            <li>
                                <a href="https://t.me/MefistoBaal" target="_blank"><span class="icon-whatsapp"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="ftco-footer-widget">
                        <h2 class="mb-3">Contáctame</h2>
                        <p class="h3 email"><a href="#">dasanti_12@hotmail.com</a></p>
                        <p class="h3 email"><a href="#">mefistobaal96@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | Hecho con <i
                                class="icon-heart" aria-hidden="true" style="color: red;"></i></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

</div>

<script src="{{ mix('js/landing.js')}}"></script>

@yield('scripts')

</body>
</html>
