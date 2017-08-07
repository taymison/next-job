<?php

use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vacancy::class, 50)->create()->each(function (App\Vacancy $vacancy) {
            $count = rand(0, 5);

            $vacancy->benefits()->attach(App\Benefit::inRandomOrder()->take($count)->get());
        });
    }
}
