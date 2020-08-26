<?php

use Illuminate\Database\Seeder;

class KyokushinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KyokushinGrades::class);
    }
}
