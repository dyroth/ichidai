@if($lessons->count() > 0)
    <div class="featured-classes bg-light py-5 block-13" id="classes">
        <div class="container">

            <div class="heading-with-border">
                <h2 class="heading text-uppercase">Lessen</h2>
            </div>

            <div class="nonloop-block-13 owl-carousel">

                @foreach($lessons as $lesson)
                    <div class="block-media-1 heading-with-border bg-white">
                        <img src="{{ '/storage/upload/lessons/' . $lesson->filename }}" alt="Image" class="img-fluid">
                        <div class="p-4">
                            <h3 class="h5 heading">{{ $lesson->name }}</h3>
                            <p>{{ $lesson->info }}</p>
                            <span class="d-flex align-items-center">
                                <span class="icon-person h4 mr-3"></span>
                                <span>{{ $lesson->coaches }}</span>
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endif