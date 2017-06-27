<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacatures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vacnaam');
            $table->string('vacbedrijf', 45);
            $table->string('vacplaats');
            $table->string('vacprov', 45);
            $table->text('info');
            $table->string('logo');
            $table->timestamps();
            $table->integer('used_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacatures');
    }
}
