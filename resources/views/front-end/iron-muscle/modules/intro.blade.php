@if(isset($intro) && ($intro->text || $intro->filename))
    <div class="site-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                    {!! $intro->text !!}
                </div>
                <div class="col-md-12 col-lg-6 ml-auto">
                    <img src="{{ '/storage/upload/intro/' . $intro->filename }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endif
