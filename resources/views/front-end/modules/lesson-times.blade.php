@if($lessonTimes->count() > 0)
    <div class="block-schedule overlay site-section" style="background-image: url('img/gi.jpg');" id="schedule">
        <div class="container">

            <h2 class="text-white display-4 mb-5">Lesuren</h2>

            <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
                @foreach($lessonTimes->pluck('day')->unique() as $day)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif" id="pills-{{ $day }}-tab" data-toggle="pill" href="#pills-{{ $day }}"
                           role="tab"
                           aria-controls="pills-{{ $day }}" aria-selected="true">{{ ucfirst( $day ) }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($lessonTimes->pluck('day')->unique() as $day)
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-{{ $day }}" role="tabpanel"
                         aria-labelledby="pills-{{ $day }}-tab">
                        @foreach($lessonTimes->where('day', $day)->sortBy('starting_time') as $lessonTime)
                            <div class="row-wrap">
                                <div class="row bg-white p-4 align-items-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3"><h3 class="h5">{{ $lessonTime->name }}</h3></div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <i class="far fa-clock"></i>
                                        {{ $lessonTime->starting_time }}u - {{ $lessonTime->ending_time }}u
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <i class="fas fa-user"></i>
                                        &nbsp;{{ $lessonTime->group }}
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
                                        {{ $lessonTime->location }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
