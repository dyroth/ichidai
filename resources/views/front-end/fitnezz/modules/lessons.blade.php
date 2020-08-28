<section class="section element-animate" id="classes">

    <div class="clearfix mb-6 pb-6">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                    <h2>Lessen</h2>
                    <span class="back-text">Trainingen</span>
                </div>
            </div>
        </div>
    </div>

    <div class="owl-carousel centernonloop">
        @foreach($lessons as $lesson)
            <a href="#" class="item-class inactiveLink carousel-object" style="pointer-events: none;">
                <div class="text">
                    <h2 class="class-heading">{{ $lesson->name }}</h2>
                </div>
                <img src="{{ '/storage/upload/lessons/' . $lesson->filename }}" alt="" class="img-fluid">
            </a>
            @endforeach
    </div>
</section>

