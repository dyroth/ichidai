@extends('../_partials/master')

@section('content')
<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover" style="background-image: url(img/spring-camp.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1><strong>Ichi Dai</strong><br>Kyokushin</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-bottom">
    <div class="row no-gutters">
        <div class="col-md-6 col-lg-3">
            <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="flaticon-padmasana display-4"></span>
            </span>
                <h2>Yoga</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit
                    est.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="flaticon-weight display-4"></span>
            </span>
                <h2>Weight Lifting</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit
                    est.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="flaticon-boxing-gloves display-4"></span>
            </span>

                <h2>Boxing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit
                    est.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="w-100 h-100 block-feature p-5">
            <span class="d-block mb-3">
              <span class="flaticon-running display-4"></span>
            </span>
                <h2>Running</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat iure eveniet perferendis odit
                    est.</p>
            </div>
        </div>
    </div>
</div> <!-- .block-feature -->

<div class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                <h2 class="mb-3 text-uppercase">All About <strong class="text-black font-weight-bold">Our Gym</strong>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque accusamus, rerum illo
                    facilis reiciendis.</p>
                <p class="mb-4">Iste aut dolorem veritatis saepe nesciunt distinctio voluptas sapiente sunt perspiciatis
                    autem minima, iure provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
                    quas.</p>
                <ul class="site-block-check">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                    <li>Nemo, voluptate? Voluptates odit, aperiam nostrum! Ipsa.</li>
                    <li>Itaque voluptatum ducimus aliquam, est fuga molestiae?</li>
                    <li>Accusamus porro at commodi delectus, nesciunt molestiae.</li>
                </ul>
                <p><a href="#" class="btn btn-primary pill px-4">Read More</a></p>
            </div>
            <div class="col-md-12 col-lg-6 ml-auto">
                <img src="images/about.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="featured-classes bg-light py-5 block-13">
    <div class="container">

        <div class="heading-with-border">
            <h2 class="heading text-uppercase">Featured Class</h2>
        </div>

        <div class="nonloop-block-13 owl-carousel">

            <div class="block-media-1 heading-with-border bg-white">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="p-4">
                    <h3 class="h5 heading">Yoga</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                    <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Bruce Mars, David Holmes</span>
              </span>
                </div>
            </div>

            <div class="block-media-1 heading-with-border bg-white">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="p-4">
                    <h3 class="h5 heading">Running</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                    <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Bruce Mars, David Holmes</span>
              </span>
                </div>
            </div>

            <div class="block-media-1 heading-with-border bg-white">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="p-4">
                    <h3 class="h5 heading">Yoga</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                    <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Bruce Mars, David Holmes</span>
              </span>
                </div>
            </div>

            <div class="block-media-1 heading-with-border bg-white">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="p-4">
                    <h3 class="h5 heading">Running</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, excepturi!</p>
                    <span class="d-flex align-items-center">
                <span class="icon-person h4 mr-3"></span>
                <span>Bruce Mars, David Holmes</span>
              </span>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="block-schedule overlay site-section" style="background-image: url('images/hero_bg_1.jpg');">
    <div class="container">

        <h2 class="text-white display-4 mb-5">Schedule</h2>

        <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-sunday-tab" data-toggle="pill" href="#pills-sunday" role="tab"
                   aria-controls="pills-sunday" aria-selected="true">Sunday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab"
                   aria-controls="pills-monday" aria-selected="true">Monday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-tuesday-tab" data-toggle="pill" href="#pills-tuesday" role="tab"
                   aria-controls="pills-tuesday" aria-selected="false">Tuesday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-wednesday-tab" data-toggle="pill" href="#pills-wednesday" role="tab"
                   aria-controls="pills-wednesday" aria-selected="false">Wednesday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-thursday-tab" data-toggle="pill" href="#pills-thursday" role="tab"
                   aria-controls="pills-thursday" aria-selected="false">Thursday</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-friday-tab" data-toggle="pill" href="#pills-friday" role="tab"
                   aria-controls="pills-friday" aria-selected="false">Friday</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Running</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> David Holmes
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Weight Lifting</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Bruce Mars</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Yoga</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Josh White</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Running</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> David Holmes
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Weight Lifting</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Bruce Mars</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">

                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Weight Lifting</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Bruce Mars</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Running</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> David Holmes
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Yoga</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Josh White</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Running</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> David Holmes
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>
                <div class="row-wrap">
                    <div class="row bg-white p-4 align-items-center">
                        <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">Weight Lifting</h3></div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-clock-o mr-3"></span>8:00am &mdash;
                            10:00am
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> Bruce Mars</div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="#"
                                                                                 class="btn btn-primary pill px-4 mt-3 mt-md-0">Join
                                Now</a></div>
                    </div>
                </div>

            </div>


        </div>


    </div>
</div>

<div class="site-section block-14">

    <div class="container">

        <div class="heading-with-border text-center">
            <h2 class="heading text-uppercase">Testimonials</h2>
        </div>

        <div class="nonloop-block-14 owl-carousel">

            <div class="d-flex block-testimony">
                <div class="person mr-3">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div>
                    <h2 class="h5">Katie Johnson, CEO</h2>
                    <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui
                        optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;
                    </blockquote>
                </div>
            </div>
            <div class="d-flex block-testimony">
                <div class="person mr-3">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div>
                    <h2 class="h5">Jane Mars, Designer</h2>
                    <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui
                        optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;
                    </blockquote>
                </div>
            </div>
            <div class="d-flex block-testimony">
                <div class="person mr-3">
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div>
                    <h2 class="h5">Shane Holmes, CEO</h2>
                    <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui
                        optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;
                    </blockquote>
                </div>
            </div>
            <div class="d-flex block-testimony">
                <div class="person mr-3">
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div>
                    <h2 class="h5">Mark Johnson, CEO</h2>
                    <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui
                        optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;
                    </blockquote>
                </div>
            </div>

        </div>

    </div>

</div>


<div class="site-section bg-light">

    <div class="container">

        <div class="heading-with-border text-center mb-5">
            <h2 class="heading text-uppercase">Experts Trainer</h2>
        </div>

        <div class="row">

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