@extends('admin._partials.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Overzicht</h5>
                            <a class="btn btn-primary pull-right" href="{{ route('admin.lesson_times.create') }}">Nieuw</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>
                        @foreach($lessonTimes as $lessonTime)
                            <tr>
                                <td class="project-title">
                                    <a href="{{ route('admin.lessons.edit', $lessonTime) }}">{{ $lessonTime->name }}</a>
                                    <br/>
                                    <small>{{ $lessonTime->coaches }}</small>
                                </td>

                                <td class="project-actions">
                                    <a href="{{ route('admin.lessons.edit', $lessonTime) }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
