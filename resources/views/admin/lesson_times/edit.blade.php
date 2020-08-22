@extends('admin._partials.main')

@section('content')
    <div class="wrapper wrapper-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Overzicht</h5>
                    </div>

                    <div class="ibox-content">
                        @include('admin._partials.form.errors')
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                              action="{{ isset($lessonTime) ? route('admin.lessons.update', $lessonTime) : route('admin.lessons.write') }}">
                            @csrf
                            @include('admin._partials.form.input', ['label' => 'Les naam', 'name' => 'name', 'value' => old('name', $lessonTime->name ?? "")])
                            @include('admin._partials.form.select', ['label' => 'Dag', 'options' => config('weekdays'), 'name' => 'day', 'value' => old('day', $lessonTime->day ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Doelgroep', 'name' => 'group', 'value' => old('group', $lesson->group ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Locatie', 'name' => 'location', 'value' => old('location', $lesson->location ?? "")])
                            @include('admin._partials.form.timeslots', ['label' => 'Lestijden', 'nameFrom' => 'starting_time', 'nameTo' => 'ending_time', 'valueFrom' => old('starting_time', $lesson->starting_time ?? ""), 'valueTo' => old('ending_time', $lesson->ending_time ?? "")])
                            @include('admin._partials.form.submit', ['route' => route('admin.lessons.index'), 'deleteRoute' => isset($lesson) ? route('admin.lessons.delete', $lesson) : null])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>--}}
@endsection
