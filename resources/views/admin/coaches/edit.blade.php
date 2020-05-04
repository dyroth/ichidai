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
                              action="{{ isset($coach) ? route('admin.coaches.update', $coach) : route('admin.coaches.write') }}">
                            @csrf
                            @include('admin._partials.form.input', ['label' => 'Naam', 'name' => 'name', 'value' => old('name', $coach->name ?? "")])
                            <div class="hr-line-dashed"></div>
                            @include('admin._partials.form.text-field', ['label' => 'Bio', 'name' => 'bio', 'value' => old('bio', $coach->bio ?? "")])
                            <div class="hr-line-dashed"></div>
                            @include('admin._partials.form.select', ['label' => 'Graad', 'options' => config('grades'), 'name' => 'grade', 'value' => old('grade', $coach->grade ?? "")])
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-10">
                                    <input id="photo" type="file" class="form-control-file space" name="photo" accept="image/*" value="{{ old('photo', $coach->filename ?? "") }}" @if(!isset($coach)) required @endif>
                                </div>
                                @if(isset($coach))
                                    <div class="col-sm-4">
                                        <img src="{{ '/storage/upload/coaches/' . $coach->filename }}" alt="Image" class="img-fluid" style="max-height: 300px; padding-top: 20px">
                                    </div>
                                @endif
                            </div>
                            @include('admin._partials.form.submit', ['route' => route('admin.coaches.index'), 'deleteRoute' => isset($coach) ? route('admin.coaches.delete', $coach) : null])
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
