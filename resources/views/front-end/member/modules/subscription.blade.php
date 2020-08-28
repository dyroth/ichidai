<div class="ibox float-e-margins">
    <div class="ibox-title">
        <div class="row">
            <div class="col-md-12">
                <h5>Lidmaatschap</h5>
                @if (!$member->subscription_until)
                    <span class="label label-warning">Inactief</span>
                @elseif (\Carbon\Carbon::createFromFormat('d/m/Y', $member->subscription_until) > \Carbon\Carbon::now())
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
                    <?php $difference = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::createFromFormat('d/m/Y', $member->subscription_until)) ?>
                    @if (!$member->subscription_until)
                        Uw eerste betaling is nog niet afgerond. Gelieve dit zo snel mogelijk in orde te brengen.
                    @elseif (\Carbon\Carbon::createFromFormat('d/m/Y', $member->subscription_until) > \Carbon\Carbon::now())
                        Geldig tot: {{ $member->subscription_until }}
                        <div class="font-bold text-navy">Nog {{ $difference > 1 ? $difference . " dagen" : $difference . " dag" }}</div>
                    @else
                        Vervallen op: {{ $member->subscription_until }}
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
