<?php

use Illuminate\Database\Seeder;

class IchidaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KyokushinGradesSeeder::class);
        $this->call(IchidaiSettingsSeeder::class);
        $this->call(IchidaiLessonTimesSeeder::class);
        $this->call(IchidaiMembersSeeder::class);
        $this->call(IchidaiAttendanceSeeder::class);
    }
}
