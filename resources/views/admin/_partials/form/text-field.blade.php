<style>
    textarea {
        resize: vertical;
        height: 150px !important;
    }
</style>

<div class="form-group"><label class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="{{ $name }}">{{ $value ?? null }}</textarea>
    </div>
</div>