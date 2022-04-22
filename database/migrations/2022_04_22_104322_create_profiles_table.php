<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id_card_number');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('sex');
            $table->string('religion');
            $table->string('blood_type');
            $table->string('status');
            $table->longText('address');
            $table->longText('address_domicile');
            $table->string('email');
            $table->string('phone_number');
            $table->string('closest_person');
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
        Schema::dropIfExists('profiles');
    }
}
