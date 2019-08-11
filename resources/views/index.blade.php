@extends('layouts.html')

@section('header')
    <title>{{$title}} | FullStack Web Developer</title>
@endsection

@section('content')

    <section class="ftco-section about-section">
        <div class="container">
            <div class="row d-flex" data-scrollax-parent="true">
                <div class="col-md-4 author-img" style="background-image: url({{ asset('images/author-1.jpg') }});" data-scrollax=" properties: {
            translateY: '-70%'}"></div>
                <div class="col-md-2"></div>
                <div class="col-md-6 wrap ftco-animate">
                    <div class="about-desc">
                        <h1 class="bold-text">Soy</h1>
                        <div class="p-5">
                            <h2 class="mb-5">Santiago Hurtado</h2>
                            <p>Soy Desarrollador Web apasionado. Con talento para aportar a su proyecto.</p>
                            <p><a href="#">Mira mi CV</a></p>
                            <ul class="ftco-footer-social list-unstyled mt-4">
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
                            <h5>Contáctame a travez de: </h5>
                            <p>Emails: <br><a href="#">dasanti_12@hotmail.com<br>mefistobaal96@gmail.com</a></p>
                            <p>Teléfono: <a href="#">(+57) 320 826 3483</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span>¿Qué hago?</span>
                    <h2>Mis Servicios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon mb-3"><span class="icon-layers"></span></div>
                        <div class="media-body">
                            <h3 class="heading">UI/UX Design</h3>
                            <h3 class="heading">Web App Development</h3>
                            <h3 class="heading">Asesoramiento en Proyectos TI</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon mb-3"><span class="icon-gears"></span></div>
                        <div class="media-body">
                            <h3 class="heading">DB Desing/Development</h3>
                            <h3 class="heading">Design Sprints</h3>
                            <h3 class="heading">UX Strategy</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon mb-3"><span class="icon-code"></span></div>
                        <div class="media-body">
                            <h3 class="heading">HTML/CSS</h3>
                            <h3 class="heading">Prototyping</h3>
                            <h3 class="heading">Unit Testing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span>Portfolio</span>
                    <h2>Mira algunos de mis trabajos</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                        <div class="icon d-flex text-center justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <div class="text">
                        <h4 class="subheading">Illustration</h4>
                        <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no
                                control</a></h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text.</p>
                        <p><a href="#">View Project</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span>Portfolio</span>
                    <h2>I love to share my achievements</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-start">
                <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="ftco-label">Clients</span>
                            <strong class="number" data-number="420">0</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="ftco-label">Project done</span>
                            <strong class="number" data-number="890">0</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col-md-5 counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="ftco-label">Cups of coffee</span>
                            <strong class="number" data-number="1000">0</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
