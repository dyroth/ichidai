@extends('admin._partials.main')

@section('styles')
    <link href="/css/back-end/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/css/back-end/plugins/summernote/summernote-bs3.css" rel="stylesheet">
@endsection

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
                              action="{{ route('admin.introduction.update') }}">
                            @csrf

                            <div class="form-group"><label class="col-sm-2 control-label">Tekst</label>
                                <div class="col-sm-10">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content no-padding">
                                                <textarea class="summernote" name="text">{{ $intro['text'] ?? "" }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-10">
                                    <input id="photo" type="file" class="form-control-file space" name="photo" accept="image/*" value="{{ old('photo', $intro['filename'] ?? "") }}" @if($intro['filename'] == '') required @endif>
                                </div>
                                @if($intro['filename'] != '')
                                    <div class="col-sm-4">
                                        <img src="{{ '/storage/upload/intro/' . $intro['filename'] }}" alt="Image" class="img-fluid" style="max-height: 300px; padding-top: 20px">
                                    </div>
                                @endif
                            </div>

                            @include('admin._partials.form.submit', ['route' => route('admin.introduction.edit')])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/back-end/jquery-3.1.1.min.js"></script>
    <script src="/js/back-end/bootstrap.min.js"></script>
    <script src="/js/back-end/plugins/summernote/summernote.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
            $('.dropdown-toggle').dropdown()

        });
    </script>
@endsection
