<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title');
            $table->string('email');
            $table->string('company');
            $table->string('mark');
            $table->string('adress');
            $table->string('city');
            $table->string('country');
            $table->string('language');
            $table->string('naf');
            $table->integer('phone');
            $table->string('money');
            $table->string('status');
            $table->boolean('kbis');
            $table->integer('siret');
            $table->string('time_zone');
            $table->string('origin');
            $table->integer('zip_code');
            $table->unsignedBigInteger('developper_id');
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
        Schema::dropIfExists('contacts');
    }
}
