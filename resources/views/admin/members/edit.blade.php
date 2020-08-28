@extends('admin._partials.main')

@section('styles')
    <link href="/css/back-end/plugins/datapicker/datepicker3.css" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content">

        <div class="row">
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Overzicht</h5>
                    </div>

                    <div class="ibox-content">
                        @include('admin._partials.form.errors')
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                              action="{{ isset($member) ? route('admin.members.update', $member) : route('admin.members.write') }}">
                            @csrf
                            @include('admin._partials.form.input', ['label' => 'Volledige naam', 'name' => 'name', 'value' => old('name', $member->name ?? "")])
                            @include('admin._partials.form.input', ['label' => 'Email', 'name' => 'email', 'value' => old('email', $member->email ?? "")])
                            @include('admin._partials.form.select', ['label' => 'Graad', 'name' => 'grade_id', 'options' => $grades, 'value' => old('grade_id', $member->grade->id ?? "")])

                            <input type="hidden" value="{{ $member->id ?? null }}" name="member_id">

                            <div class="form-group"><label class="col-sm-2 control-label">Geboortedatum</label>
                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" class="form-control" name="birthdate" value="{{ old('birthdate', $member->birthdate ?? "") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Lidgeld betaald tot</label>
                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" class="form-control" name="subscription_until" value="{{ old('subscription_until', $member->subscription_until ?? "") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            @include('admin._partials.form.submit', ['route' => route('admin.members.index'), 'deleteRoute' => isset($member) ? route('admin.members.delete', $member) : null])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/back-end/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function () {
            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: 'dd/mm/yyyy'
            });
        });
    </script>
@endsection
