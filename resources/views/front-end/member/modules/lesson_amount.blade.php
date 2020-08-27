<div class="ibox float-e-margins">
    <div class="ibox-title">
        <span class="label label-info pull-right"></span>
        <h5>{{ $lesson->name }}</h5>
    </div>
    <div class="ibox-content">
        <h1 class="no-margins">{{ $member->attendances->where('lesson_id', $lesson->id)->count() }} trainingen</h1>
        <div class="stat-percent font-bold text-info">{{ round($member->attendances->where('lesson_id', $lesson->id)->count() / $member->attendances->count() * 100) }}% </div>
        <small>Aanwezig</small>
    </div>
</div>
