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
                              action="{{ isset($grade) ? route('admin.grades.update', $grade) : route('admin.grades.write') }}">
                            @csrf
                            @include('admin._partials.form.input', ['label' => 'Naam', 'name' => 'name', 'placeholder' => '1e Dan', 'value' => old('name', $grade->name ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Benodigde lessen voor examen', 'name' => 'required_lessons', 'value' => old('required_lessons', $grade->required_lessons ?? "")])
                            @include('admin._partials.form.submit', ['route' => route('admin.grades.index'), 'deleteRoute' => isset($grade) ? route('admin.grades.delete', $grade) : null])
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
