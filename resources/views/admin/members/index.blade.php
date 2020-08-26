@extends('admin._partials.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Overzicht</h5>
                            <a class="btn btn-primary pull-right" href="{{ route('admin.members.create') }}">Nieuw</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        @if (!$loop->first)
                                            <a href="{{ route('admin.members.sort_up', compact('member')) }}" class="btn btn-xs btn-success sort-button">+</a>
                                        @endif
                                        @if (!$loop->last)
                                            <a href="{{ route('admin.members.sort_down', compact('member')) }}" class="btn btn-xs btn-warning sort-button">-</a>
                                        @endif
                                    </div>
                                </td>
                                <td class="project-title">
                                    <a href="{{ route('admin.members.edit', $member) }}">{{ $member->name }}</a><br>
                                </td>
                                <td>
                                    {{ $member->grade->name }}
                                </td>

                                <td class="project-actions">
                                    <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
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
