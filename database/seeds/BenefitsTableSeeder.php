<?php

use Illuminate\Database\Seeder;

class BenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Benefit::class, 20)->create();
    }
}
