<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BenefitsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
    }
}
