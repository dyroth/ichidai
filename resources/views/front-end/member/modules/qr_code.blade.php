<div class="ibox float-e-margins">
    <div class="ibox-title">
        <div class="row">
            <div class="col-md-12">
                <h5>Aanwezigheids QR code</h5>
            </div>
        </div>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-6">
                {!! QrCode::size(150)->generate($route); !!}
            </div>
            <div class="col-md-6">
                <p>Gebruik deze code wanner je aankomt bij de les om je aanwezigheid te bevestigen.
                    Deze gegevens worden gebruikt om dit dashboard op te bouwen en zo kunnen de trainers
                    uw vooruitgang volgen.</p>
            </div>
        </div>
    </div>
</div>
