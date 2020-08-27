<?php

use App\Ichidai\LessonTime\LessonTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IchidaiLessonTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessonTimes = [
            [
                'day' => 'maandag',
                'name' => 'Groep 2',
                'group' => '6-8 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('18'),
                'ending_time' => Carbon::createFromTime('19'),
            ],
            [
                'day' => 'maandag',
                'name' => 'Groep 3 & 4',
                'group' => '6-11 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'maandag',
                'name' => 'Volwassenen',
                'group' => '+15 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('20'),
                'ending_time' => Carbon::createFromTime('22'),
            ],
            [
                'day' => 'dinsdag',
                'name' => 'F.H.I.I.T',
                'group' => '+15 jaar',
                'location' => 'Zaal 1e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'dinsdag',
                'name' => 'Shadowboxing',
                'group' => '+15 jaar',
                'location' => 'Zaal 1e verdieping',
                'starting_time' => Carbon::createFromTime('20'),
                'ending_time' => Carbon::createFromTime('21'),
            ],
            [
                'day' => 'woensdag',
                'name' => 'Groep 1',
                'group' => '4-5 jaar',
                'location' => 'Zaal 2e verdieping',
                'starting_time' => Carbon::createFromTime('18'),
                'ending_time' => Carbon::createFromTime('19'),
            ],
            [
                'day' => 'woensdag',
                'name' => 'Groep 2',
                'group' => '6-8 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('18'),
                'ending_time' => Carbon::createFromTime('19'),
            ],
            [
                'day' => 'woensdag',
                'name' => 'Groep 3',
                'group' => '9-11 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'woensdag',
                'name' => 'Groep 4',
                'group' => '12-14 jaar',
                'location' => 'Zaal 1e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'woensdag',
                'name' => 'Volwassenen',
                'group' => '+15 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'donderdag',
                'name' => 'F.H.I.I.T',
                'group' => '+15 jaar',
                'location' => 'Zaal 1e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
            [
                'day' => 'donderdag',
                'name' => 'Shadowboxing',
                'group' => '+15 jaar',
                'location' => 'Zaal 1e verdieping',
                'starting_time' => Carbon::createFromTime('20'),
                'ending_time' => Carbon::createFromTime('21'),
            ],
            [
                'day' => 'vrijdag',
                'name' => 'Groep 2, 3 en 4',
                'group' => '6-14 jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('18'),
                'ending_time' => Carbon::createFromTime('19'),
            ],
            [
                'day' => 'vrijdag',
                'name' => 'Kumite en competitietraining',
                'group' => '15+ jaar',
                'location' => 'Zaal 3e verdieping',
                'starting_time' => Carbon::createFromTime('19'),
                'ending_time' => Carbon::createFromTime('20'),
            ],
        ];

        LessonTime::truncate();
        LessonTime::insert($lessonTimes);
    }
}

