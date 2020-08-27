<div class="ibox float-e-margins">
    <div class="ibox-title">
        <div class="row">
            <div class="col-md-12">
                <h5>Lidmaatschap</h5>
                @if (!$member->subscription_until)
                    <span class="label label-warning">Inactief</span>
                @elseif ($member->subscription_until > \Carbon\Carbon::now())
                    <span class="label label-info">Actief</span>
                @else
                    <span class="label label-danger">Vervallen</span>
                @endif
            </div>
        </div>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-12">
                <p>
                    @if (!$member->subscription_until)
                        Uw eerste betaling is nog niet afgerond. Gelieve dit zo snel mogelijk in orde te brengen.
                    @elseif ($member->subscription_until > \Carbon\Carbon::now())
                        Geldig tot: {{ $member->subscription_until->format('d-m-Y') }}
                        <div class="font-bold text-navy">Nog {{ \Carbon\Carbon::now()->diffInDays($member->subscription_until) }} dagen</div>
                    @else
                        Vervallen op: {{ $member->subscription_until->format('d-m-Y') }}
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
