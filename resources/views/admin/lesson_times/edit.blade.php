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
                              action="{{ isset($lesson) ? route('admin.lessons.update', $lesson) : route('admin.lessons.write') }}">
                            @csrf
                            @include('admin._partials.form.input', ['label' => 'Les', 'name' => 'name', 'value' => old('name', $lessonTime->name ?? "")])
                            <div class="hr-line-dashed"></div>
                            @include('admin._partials.form.select', ['label' => 'Dag', 'options' => config('weekdays'), 'name' => 'day', 'value' => old('day', $lessonTime->day ?? "")])
                            <div class="hr-line-dashed"></div>
                            @include('admin._partials.form.input', ['label' => 'Lesgevers', 'name' => 'coaches', 'value' => old('coaches', $lesson->coaches ?? "")])
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-10">
                                    <input id="photo" type="file" class="form-control-file space" name="photo" accept="image/*" value="{{ old('photo', $lesson->filename ?? "") }}" @if(!isset($lesson)) required @endif>
                                </div>
                                @if(isset($lesson))
                                    <div class="col-sm-4">
                                        <img src="{{ '/storage/upload/lessons/' . $lesson->filename }}" alt="Image" class="img-fluid" style="max-height: 300px; padding-top: 20px">
                                    </div>
                                @endif
                            </div>
                            @include('admin._partials.form.submit', ['route' => route('admin.lessons.index'), 'deleteRoute' => isset($lesson) ? route('admin.lessons.delete', $lesson) : null])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
@endsection
