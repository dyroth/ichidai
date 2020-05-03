@extends('front-end/_partials/master')

@section('content')
    <div class="block-schedule overlay site-section" id="main-title-container">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 id="main-title"><strong>Ichi Dai</strong><br>Kyokushin</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="mb-3 text-uppercase">Alles over <strong class="text-black font-weight-bold">Ichi Dai</strong>
                    </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque accusamus, rerum illo
                        facilis reiciendis.</p>
                    <p class="mb-4">Iste aut dolorem veritatis saepe nesciunt distinctio voluptas sapiente sunt perspiciatis
                        autem minima, iure provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
                        quas.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                        <li>Nemo, voluptate? Voluptates odit, aperiam nostrum! Ipsa.</li>
                        <li>Itaque voluptatum ducimus aliquam, est fuga molestiae?</li>
                        <li>Accusamus porro at commodi delectus, nesciunt molestiae.</li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-6 ml-auto">
                    <img src="images/about.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="featured-classes bg-light py-5 block-13" id="classes">
        <div class="container">

            <div class="heading-with-border">
                <h2 class="heading text-uppercase">Lessen</h2>
            </div>

            <div class="nonloop-block-13 owl-carousel">

                <div class="block-media-1 heading-with-border bg-white">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h3 class="h5 heading">Kata</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                        <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Reginald, Sebastien, Céline</span>
              </span>
                    </div>
                </div>

                <div class="block-media-1 heading-with-border bg-white">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h3 class="h5 heading">Kumite</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                        <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Sebastien</span>
              </span>
                    </div>
                </div>

                <div class="block-media-1 heading-with-border bg-white">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <div class="p-4">
                        <h3 class="h5 heading">Kids</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                        <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Sebastien, Céline</span>
              </span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="block-schedule overlay site-section" style="background-image: url('img/gi.jpg');" id="schedule">
        <div class="container">

            <h2 class="text-white display-4 mb-5">Lesuren</h2>

            <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab"
                       aria-controls="pills-monday" aria-selected="true">Maandag</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-wednesday-tab" data-toggle="pill" href="#pills-wednesday" role="tab"
                       aria-controls="pills-wednesday" aria-selected="true">Woensdag</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-friday-tab" data-toggle="pill" href="#pills-friday" role="tab"
                       aria-controls="pills-friday" aria-selected="false">Vrijdag</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">

                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 3</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                19:00u-20:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 9-11 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 4</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                19:00u-20:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 12-14 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 1e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Algemene Training</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                20:00u-22:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Volwassenen
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">

                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 1</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                18:00u-19:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 4-5 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 2e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 2</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                18:00u-19:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 6-8 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 3</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                19:00u-20:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 9-11 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Groep 4</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                18:00u-19:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Kinderen: 12-14 jaar
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 1e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Algemene Training</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                20:00u-22:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Volwassenen
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">

                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Competitie Groep 2, 3, 4</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                18:00u-17:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Volwassenen
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>
                    <div class="row-wrap">
                        <div class="row bg-white p-4 align-items-center">
                            <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Kumite Training</h3></div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="far fa-clock"></i>
                                19:00u-20:00u
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <i class="fas fa-user"></i>
                                &nbsp;Volwassenen
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                Zaal 3e verdieping
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="coaches">

        <div class="container">

            <div class="heading-with-border text-center mb-5">
                <h2 class="heading text-uppercase">Lesgevers</h2>
            </div>

            <div class="row">

                @foreach($coaches as $coach)
                    <div class="col-lg-4 mb-4">
                        <div class="block-trainer">
                            <img src="{{ 'storage/upload/coaches/' . $coach->filename }}" alt="Image" class="img-fluid">
                            <div class="block-trainer-overlay">
                                <h2>{{ $coach->name }}</h2>
                                <p class="text-white">{{ $coach->bio }}</p>
                                <p>
                                    <a href="https://www.facebook.com/ichidaidojo/" class="p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 mb-4">
                    <div class="block-trainer">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="block-trainer-overlay">
                            <h2>Jonah Smith</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas
                                iste corporis asperiores placeat earum.</p>
                            <p>
                                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="block-trainer">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                        <div class="block-trainer-overlay">
                            <h2>Jonah Smith</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas
                                iste corporis asperiores placeat earum.</p>
                            <p>
                                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="block-trainer">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="block-trainer-overlay">
                            <h2>Jonah Smith</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas
                                iste corporis asperiores placeat earum.</p>
                            <p>
                                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="block-trainer">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="block-trainer-overlay">
                            <h2>Jonah Smith</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas
                                iste corporis asperiores placeat earum.</p>
                            <p>
                                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="block-trainer">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                        <div class="block-trainer-overlay">
                            <h2>Jonah Smith</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas
                                iste corporis asperiores placeat earum.</p>
                            <p>
                                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
