<!doctype html>
<html lang="en">
<head>
    <title>{{ $generalInfo->general->name ?? "Sportclub" }} - {{ $generalInfo->general->martial_art_style ?? $generalInfo->general->martial_art ?? 'Gevechtsport' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/css/front-end/fitnezz/bootstrap.css">
    <link rel="stylesheet" href="/css/front-end/fitnezz/animate.css">
    <link rel="stylesheet" href="/css/front-end/fitnezz/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/front-end/fitnezz/magnific-popup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/front-end/iron-muscle/theme.css">
    <link rel="stylesheet" href="/css/front-end/iron-muscle/stylesheet.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/front-end/fitnezz/style.css">
</head>
<body>

<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">{{ $generalInfo->general->name ?? "Club" }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav mr-auto pl-lg-5 pl-0">

                    @if(isset($intro) && ($intro->text || $intro->filename))
                        <li class="active">
                            <a class="nav-link" href="#about">Over {{ $generalInfo->general->name ?? "club" }}</a>
                        </li>
                    @endif
                    @if($lessons->count() > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="#classes">Lessen</a>
                        </li>
                    @endif
                    @if($lessonTimes->count() > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="#schedule">Lesuren</a>
                        </li>
                    @endif
                    @if($coaches->count() > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="#coaches">Lesgevers</a>
                        </li>
                    @endif
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item cta-btn">
                        <a class="nav-link" href="{{ route('member.index') }}">Dashboard</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url('/img/spring-camp.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h1>
                        {{  $generalInfo->general->name ?? "Sportclub" }}<br>
                        <small>{{  $generalInfo->general->martial_art_style ?? "" }} {{  $generalInfo->general->martial_art ?? "" }}</small>
                    </h1>
                </div>
            </div>
        </div>

    </div>
</section>

@yield('content')

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                @if(isset($generalInfo->footer_text->footer_title))
                    <h3>{{ $generalInfo->footer_text->footer_title }}</h3>
                @endif
                    @if(isset($generalInfo->footer_text->footer_text))
                        <p class="mb-5">{{ $generalInfo->footer_text->footer_text }}</p>
                    @endif
            </div>
            <div class="col-md-5 mb-5">
                <h3>Contact Info</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-block">
                        <span class="d-block">Adres:</span>
                        <a href="{{ $generalInfo->contact_info->google_maps_url ?? "#" }}">
                            <span class="text-white">{{ $generalInfo->contact_info->street_and_number ?? "" }} - {{ $generalInfo->contact_info->postal_code ?? "" }} {{ $generalInfo->contact_info->city ?? "" }}</span>
                        </a>
                    </li>
                    @if(isset($generalInfo))
                        @if($generalInfo->contact_info->phone)
                            <li class="d-block"><span class="d-block">Tel.:</span><span class="text-white">{{ $generalInfo->contact_info->phone }}</span></li>
                        @endif
                        @if($generalInfo->contact_info->email)
                            <li class="d-block"><span class="d-block">Email:</span><span class="text-white">{{ $generalInfo->contact_info->email }}</span></li>
                        @endif
                            @if(isset($generalInfo->social_media))
                                <li class="d-block"><span class="d-block">Social media:</span>
                                    <span class="text-white">
                            @if(isset($generalInfo->social_media->facebook))
                                <a href="{{ $generalInfo->social_media->facebook }}" class="pb-2 pr-2 pl-0"><i
                                        class="fab fa-facebook-square fa-2x"></i></a>
                            @endif
                            @if(isset($generalInfo->social_media->twitter))
                                <a href="{{ $generalInfo->social_media->twitter }}" class="p-2"><i
                                        class="fab fa-twitter-square fa-2x"></i></a>
                            @endif
                            @if(isset($generalInfo->social_media->youtube))
                                <a href="{{ $generalInfo->social_media->youtube }}" class="p-2"><i
                                        class="fab fa-youtube fa-2x"></i></a>
                            @endif
                            @if(isset($generalInfo->social_media->instagram))
                                <a href="{{ $generalInfo->social_media->instagram }}" class="pb-2 pr-2 pl-0"><i
                                        class="fab fa-instagram fa-2x"></i></a>
                            @endif
                        </span></li>
                            @endif
                    @endif

                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Quick Links</h3>
                <ul class="list-unstyled footer-link">
                    @if(isset($intro) && ($intro->text || $intro->filename))
                        <li><a href="#about">Over {{ $generalInfo->general->name ?? "club" }}</a></li>
                    @endif
                    @if($lessons->count() > 0)
                        <li><a href="#classes">Lessen</a></li>
                    @endif
                    @if($lessonTimes->count() > 0)
                        <li><a href="#schedule">Lesuren</a></li>
                    @endif
                    @if($coaches->count() > 0)
                        <li><a href="#coaches">Lesgevers</a></li>
                    @endif
                    <li><a href="{{ route('login') }}">Dashboard</a></li>
                </ul>
            </div>
            <div class="col-md-3">

            </div>
        </div>

    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="/js/front-end/fitnezz/jquery-3.2.1.min.js"></script>
<script src="/js/front-end/fitnezz/popper.min.js"></script>
<script src="/js/front-end/fitnezz/bootstrap.min.js"></script>
<script src="/js/front-end/fitnezz/owl.carousel.min.js"></script>
<script src="/js/front-end/fitnezz/jquery.waypoints.min.js"></script>
<script src="/js/front-end/fitnezz/jquery.magnific-popup.min.js"></script>
<script src="/js/front-end/fitnezz/magnific-popup-options.js"></script>
<script src="/js/front-end/fitnezz/main.js"></script>
@yield('scripts')

</body>
</html>
