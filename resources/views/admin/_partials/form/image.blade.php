<div class="form-group"><label class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">
        <input id="photo" type="file" class="form-control-file space" name="photo" accept="image/*" value="{{ old('photo', $subject->filename ?? "") }}" @if(!isset($subject)) required @endif>
    </div>
    @if(isset($subject))
        <div class="col-sm-4">
            <img src="{{ '/storage/upload/' . $folderName . '/' . $subject->filename }}" alt="Image" class="img-fluid" style="max-height: 300px; padding-top: 20px">
        </div>
    @endif
</div>
