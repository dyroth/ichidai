@if($coaches->count() > 0)
    <div class="site-section bg-light" id="coaches">
        <div class="container">
            <div class="heading-with-border text-center mb-5">
                <h2 class="heading text-uppercase">Lesgevers</h2>
            </div>
            <div class="row">
                @foreach($coaches as $coach)
                    <div class="col-lg-4 mb-4">
                        <div class="block-trainer">
                            <img src="{{ '/storage/upload/coaches/' . $coach->filename }}" alt="Image"
                                 class="img-fluid">
                            <div class="block-trainer-overlay">
                                <h2>{{ $coach->name }}</h2>
                                <p class="text-white">{{ $coach->bio }}</p>
                                <p class="text-white">{{ $coach->grade }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif