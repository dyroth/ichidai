<?php

use App\Ichidai\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IchidaiMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = Faker\Factory::create('nl_NL');

        User::create([
            'admin' => true,
            'name' => 'Kristof Van Aken',
            'password' => Hash::make('abc12345'),
            'email' => 'kristof.vanaken@student.kdg.be',
            'grade_id' => 4,
            'weight' => 76,
            'birthdate' => Carbon::create(1989, 07, 27),
        ]);

        $members = [];

        for ($i = 1; $i < rand(50, 100); $i++) {

            $name = $faker->firstName() . ' ' . $faker->lastName();

            $members[] = [
                'name' => $name,
                'password' =>Hash::make(Str::random()),
                'email' => $this->getEmail($name),
                'grade_id' => rand(1, 12),
                'weight' => rand(50, 110),
                'birthdate' => $faker->dateTimeBetween('-60 years', '-15 years'),
            ];
        }

        User::insert($members);
    }

    private function getEmail($name)
    {
        $name = str_replace(' ', '.', strtolower($name));

        $mailExtensions = [
            "@gmail.com",
            "@hotmail.com",
            "@yahoo.com",
        ];

        return $name . $mailExtensions[rand(0, count($mailExtensions)-1)];
    }
}
