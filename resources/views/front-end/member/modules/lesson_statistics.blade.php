<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Training statistieken</h5>
    </div>
    @foreach($memberGrades as $grade)
        <?php
        $totalLessons = $member->attendances->where('grade_id', $grade->id)->count();
        ?>
        <div class="ibox-content">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <h2>{{ $grade->name }}</h2>
                    <h4>{{ $totalLessons }} trainingen</h4>
                </div>

                @foreach($lessons as $lesson)
                    <?php
                    $totalThisLessonLessons = $member->attendances->where('lesson_id', $lesson->id)->where('grade_id', $grade->id)->count();
                    $percentage = $totalThisLessonLessons == 0 ? 0 : round($totalThisLessonLessons / $totalLessons *100);

                    $label = 'label-info';

                    if ($percentage < 20) {
                        $label = 'label-warning';
                    }

                    if ($percentage < 10) {
                        $label = 'label-danger';
                    }

                    ?>
                    <div class="col-xs-6 col-sm-6 col-md-2">
                        <span class="label {{ $label }}"><small class="stats-label">{{ $lesson->name }} - {{ $percentage }}%</small></span>
                        <h4>{{ $totalThisLessonLessons }} trainingen</h4>
                    </div>
                @endforeach
                @if($loop->last)
                    <div class="col-xs-12">
                        <small>Lessen nodig tot recht op examen: <strong>{{ $totalLessons }}/{{ $grade->required_lessons }}</strong></small>
                        <div class="progress progress-mini">
                            <div class="progress-bar" style="width: {{ round($totalLessons/$grade->required_lessons*100) }}%;"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
