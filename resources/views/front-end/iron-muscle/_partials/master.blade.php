<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ichi Dai - Kyokushin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/favicon.png">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="/css/front-end/bootstrap.min.css">
    <link rel="stylesheet" href="/css/front-end/magnific-popup.css">
    <link rel="stylesheet" href="/css/front-end/jquery-ui.css">
    <link rel="stylesheet" href="/css/front-end/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/front-end/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/front-end/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/front-end/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/front-end/aos.css">
    <link rel="stylesheet" href="/css/front-end/theme.css">
    <link rel="stylesheet" href="/css/front-end/stylesheet.css">

</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .general_info-mobile-menu -->

    <div class="site-navbar-wrap bg-white">
        <div class="site-navbar-top">
            <div class="container py-2">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    </div>
                    <div class="col-6">
                        <div class="d-flex ml-auto">
                            @if(isset($generalInfo))
                                @if($generalInfo->contact_info->email)
                                <span class="d-flex align-items-center ml-auto mr-4" style="color: #fff">
                                    <span class="icon-envelope mr-2"></span>
                                    <span class="d-none d-md-inline-block">{{ $generalInfo->contact_info->email }}</span>
                                </span>
                                @endif

                                @if($generalInfo->contact_info->phone)
                                <span class="d-flex align-items-center" style="color: #fff">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">{{ $generalInfo->contact_info->phone }}</span>
                                </span>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar-wrap bg-white">

        <div class="container">
            <div class="site-navbar bg-light">
                <div class="py-1">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <h2 class="mb-0 site-logo">{{ $generalInfo->general->name ?? "Club" }}</h2>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                        <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                            <span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        @if(isset($intro) && ($intro->text || $intro->filename))
                                            <li class="active">
                                                <a href="#about">Over {{ $generalInfo->general->name ?? "club" }}</a>
                                            </li>
                                        @endif
                                        @if($lessons->count() > 0)
                                            <li>
                                                <a href="#classes">Lessen</a>
                                            </li>
                                        @endif
                                        @if($lessonTimes->count() > 0)
                                            <li>
                                                <a href="#schedule">Lesuren</a>
                                            </li>
                                        @endif
                                        @if($coaches->count() > 0)
                                            <li>
                                                <a href="#coaches">Lesgevers</a>
                                            </li>
                                        @endif
                                        <li><a href="{{ route('login') }}">Dashboard</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-8 mb-5 mb-lg-0">
                            @if(isset($generalInfo->footer_text->footer_title))
                                <h3 class="footer-heading mb-4 text-primary">{{ $generalInfo->footer_text->footer_title }}</h3>
                            @endif
                            @if(isset($generalInfo->footer_text->footer_text))
                                <p>{{ $generalInfo->footer_text->footer_text }}</p>
                            @endif
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                            <h3 class="footer-heading mb-4 text-primary">Menu</h3>
                            <ul class="list-unstyled">
                                @if(isset($intro) && ($intro->text || $intro->filename))
                                    <li><a href="#about">Over Ichi Dai</a></li>
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
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row mb-5">
                        <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Contact Info</h3></div>
                        <div class="col-md-6">
                            <a href="{{ $generalInfo->contact_info->google_maps_url ?? "#" }}">
                                <p style="text-decoration: underline">{{ $generalInfo->contact_info->street_and_number ?? "" }} <br> {{ $generalInfo->contact_info->postal_code ?? "" }} {{ $generalInfo->contact_info->city ?? "" }}</p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            @if(isset($generalInfo))
                                @if($generalInfo->contact_info->phone)
                                    Tel. {{ $generalInfo->contact_info->phone }}
                                @endif
                                @if($generalInfo->contact_info->email)
                                    <br>
                                    Mail. {{ $generalInfo->contact_info->email }}
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Sociale Media</h3></div>
                        <div class="col-md-12">
                            <p>
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
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="/js/front-end/jquery-3.3.1.min.js"></script>
<script src="/js/front-end/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/front-end/jquery-ui.js"></script>
<script src="/js/front-end/popper.min.js"></script>
<script src="/js/front-end/bootstrap.min.js"></script>
<script src="/js/front-end/owl.carousel.min.js"></script>
<script src="/js/front-end/jquery.stellar.min.js"></script>
<script src="/js/front-end/jquery.countdown.min.js"></script>
<script src="/js/front-end/jquery.magnific-popup.min.js"></script>
<script src="/js/front-end/bootstrap-datepicker.min.js"></script>
<script src="/js/front-end/aos.js"></script>

<script src="/js/front-end/main.js"></script>

</body>
</html>
