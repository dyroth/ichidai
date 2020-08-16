<div class="form-group"><label class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-10">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <textarea class="summernote" name="{{ $name }}">{{ $value ?? null }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hr-line-dashed"></div>
