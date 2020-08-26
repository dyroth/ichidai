<?php

use App\Ichidai\Grade\Grade;
use Illuminate\Database\Seeder;

class KyokushinGrades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = config('style_seeds.kyokushin.grades');

        Grade::insert($records);
    }
}
