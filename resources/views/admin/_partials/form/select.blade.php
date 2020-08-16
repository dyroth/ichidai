<div class="form-group"><label class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-10">
        <select class="form-control m-b" name="{{ $name }}">
            @foreach($options as $option)
                <option value="{{ $option }}" @if($option == $value) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="hr-line-dashed"></div>
