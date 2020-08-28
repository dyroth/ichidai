@if(isset($intro) && ($intro->text || $intro->filename))
<section class="section element-animate" id="about">
    <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                    <h2>{{ $generalInfo->general->martial_art_style ?? 'Gevechtsport' }}</h2>
                    <span class="back-text">{{ $generalInfo->general->name ?? "Sportclub" }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p><img src="{{ '/storage/upload/intro/' . $intro->filename }}" alt="" class="img-fluid"></p>
            </div>

            <div class="col-lg-6 pl-2 pl-lg-5">
                {!! $intro->text !!}
            </div>
        </div>
    </div>

</section>
@endif
