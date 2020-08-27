@extends('admin._partials.main', ['memberPage' => true])

@section('content')

    <div class="row">
        <div class="col-lg-4">
            @include('front-end.member.modules.qr_code')
        </div>

        <div class="col-lg-2">
            @include('front-end.member.modules.subscription')
        </div>

        <div class="col-lg-6">
                @include('front-end.member.modules.training_graph')
        </div>
    </div>

    <div class="row">
        @foreach($lessons as $lesson)
            <div class="col-sm-6 col-md-3">
                @include('front-end.member.modules.lesson_amount')
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('front-end.member.modules.lesson_statistics')
        </div>
    </div>
@endsection
