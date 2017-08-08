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
            $count_of_benefits = rand(0, 5);
            $count_of_requirements = rand(7, 15);
            $count_of_differentials = rand(3, 7);

            $vacancy->benefits()->attach(App\Benefit::inRandomOrder()->take($count_of_benefits)->get());
            $vacancy->requirements()->attach(App\Skill::inRandomOrder()->take($count_of_requirements)->get());
            $vacancy->differentials()->attach(App\Skill::inRandomOrder()->take($count_of_differentials)->get());
        });
    }
}
