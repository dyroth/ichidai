@extends('admin._partials.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Overzicht</h5>
                            <a class="btn btn-primary pull-right"
                               href="{{ route('admin.lesson_times.create') }}">Nieuw</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">

                    @foreach(config('weekdays') as $weekday)
                        @if($lessonTimes->where('day', $weekday)->count() > 0)
                            <h2>{{ ucfirst($weekday) }}</h2>
                        @endif
                        @foreach($lessonTimes->where('day', $weekday)->sortBy('starting_time') as $lessonTime)
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="project-title">
                                        <a href="{{ route('admin.lesson_times.edit', $lessonTime) }}">{{ $lessonTime->name }}</a>
                                        <br/>
                                        <small>{{ $lessonTime->group }}</small>
                                    </td>

                                    <td>
                                        <p>{{ $lessonTime->starting_time }} - {{ $lessonTime->ending_time }}</p>
                                    </td>

                                    <td class="project-actions">
                                        <a href="{{ route('admin.lesson_times.edit', $lessonTime) }}"
                                           class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
