@if($coaches->count() > 0)
    <section class="section element-animate" id="coaches">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Lesgevers</h2>
                        <span class="back-text">Trainers</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="major-caousel js-carousel-1 owl-carousel">
                    @foreach($coaches as $coach)
                        <div>
                            <div class="media d-block media-custom text-center">
                                <a href="#" style="pointer-events: none;"><img src="{{ '/storage/upload/coaches/' . $coach->filename }}" alt="Image Placeholder" class="img-fluid"></a>
                                <div class="media-body">
                                    <h3 class="mt-0 text-black">{{ $coach->name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>
@endif
