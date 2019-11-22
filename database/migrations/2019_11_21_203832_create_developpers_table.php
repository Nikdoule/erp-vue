<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeveloppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developpers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('firt_name');
            $table->string('adress');
            $table->integer('zip_code');
            $table->string('city');
            $table->string('naf');
            $table->integer('siret');
            $table->boolean('kbis');
            $table->string('country');
            $table->string('language');
            $table->string('money');
            $table->string('time_zone');
            $table->string('title');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developpers');
    }
}
