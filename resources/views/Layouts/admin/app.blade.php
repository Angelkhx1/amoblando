<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Amoblando</title>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
@include('layouts.admin.components.Aside')
@include('layouts.admin.components.Slider')
<div class="untree_co-section pb-0" id="home-section">
    <div class="container">
        <h1 class="heading gsap-reveal-hero mb-0">Hola somos <strong>Amoblando<span class="text-primary">.</span></strong></h1>
        <h2 class="subheading gsap-reveal-hero mb-4">
            Te traemos muebles para tu hogar.
        </h2>

    </div>
</div>
<a href="{{ route('dashboard.index') }}">index</a>
    @yield('content')

<div class="untree_co-section" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 text-center mx-auto">
                <h2 class="section-heading gsap-reveal-hero mb-0"><strong>Contactanos</strong></h2>
                <p class="gsap-reveal-hero">Disponible para trabajar. Ponerse en contacto</p>
                <div class="wave gsap-reveal-hero">
                    <svg>
                        <path d="M10,10 L50,100 L90,50"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <input type="email" class="form-control" placeholder="Correo electronico">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Escribe tu mensaje..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <input type="submit" class="btn btn-black" value="Envia Tu Mensaje">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320.12856481718734!2d-73.97263090448001!3d40.78263296621774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588ff21eaaab%3A0xd0128d5d89a30429!2sMargarita%20Anthoine!5e0!3m2!1sen!2sph!4v1597149027268!5m2!1sen!2sph" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.admin.components.Footer')
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<script src="{{url('js/app.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"si":10,"rayId":"6217b33a88d7c20c","version":"2021.2.0"}'></script>
</body>
</html>
