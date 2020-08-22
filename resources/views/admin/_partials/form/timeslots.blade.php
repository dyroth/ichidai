@section('styles')
    <link href="/css/back-end/plugins/clockpicker/clockpicker.css" rel="stylesheet">
@endsection

<div class="form-group"><label class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-2">
        <input type="text" class="form-control clockpicker" name="{{ $nameFrom }}" value="{{ $valueFrom ?? null }}" required>
    </div>
    <div class="col-sm-2">
        <input type="text" class="form-control clockpicker" name="{{ $nameTo }}" value="{{ $valueTo ?? null }}" required>
    </div>
</div>
<div class="hr-line-dashed"></div>

@section('scripts')
    <script src="/js/back-end/plugins/clockpicker/clockpicker.js"></script>
    <script>
        $(document).ready(function () {
            $('.clockpicker').clockpicker({
                'donetext': 'Kies',
                'autoclose': true,
                'vibrate': true,
            }).keypress(function(e) {
                e.preventDefault();
            });
        });
    </script>
@endsection
