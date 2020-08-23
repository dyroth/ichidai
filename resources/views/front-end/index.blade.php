@extends('front-end/_partials/master')

@section('content')
    <div class="block-schedule overlay site-section" id="main-title-container">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 id="main-title"><strong>{{ $generalInfo->general->name ?? 'Club' }}</strong><br>{{ $generalInfo->general->martial_art_style ?? 'Martial Arts' }} {{ $generalInfo->general->martial_art ?? null }}</h1>
                </div>
            </div>
        </div>
    </div>

    @include('front-end.modules.intro', compact('intro'))
    @include('front-end.modules.lessons', compact('lessons'))
    @include('front-end.modules.lesson-times', compact('lessonTimes'))
    @include('front-end.modules.coaches', compact('coaches'))
@endsection
