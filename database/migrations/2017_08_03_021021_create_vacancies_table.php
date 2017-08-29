<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id')
                ->unsigned();
            $table->integer('company_id')
                ->unsigned();
            $table->string('name', 128);
            $table->text('description');
            $table->timestamp('date');
            $table->enum('status', [
                'open',
                'resume submitted',
                'scheduled interview',
                'performed interview',
                'closed',
            ]);
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
