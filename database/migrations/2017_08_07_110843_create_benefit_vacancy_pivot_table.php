<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenefitVacancyPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefit_vacancy', function (Blueprint $table) {
            $table->integer('benefit_id')->unsigned()->index();
            $table->foreign('benefit_id')->references('id')->on('benefits')->onDelete('cascade');
            $table->integer('vacancy_id')->unsigned()->index();
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade');
            $table->primary(['benefit_id', 'vacancy_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('benefit_vacancy');
    }
}
