<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <a class="btn btn-white" href="{{ $route }}">Annuleren</a>
        <button class="btn btn-primary" type="submit">Opslaan</button>
        @if (isset($deleteRoute))
            <a class="btn btn-danger pull-right" type="submit" href="{{ $deleteRoute }}">Verwijderen</a>
        @endif
    </div>
</div>
