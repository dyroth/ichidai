<?php

use App\Ichidai\Grade\Grade;
use Illuminate\Database\Seeder;

class KyokushinGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::truncate();

        $records = config('style_seeds.kyokushin.grades');

        Grade::insert($records);
    }
}
