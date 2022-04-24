<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->integer('salary_expected');
            $table->boolean('is_willing_placed');
            $table->timestamps();
        });

        Schema::create('candidate_applies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candidate_id');
            $table->integer('job_id');
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
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('candidate_applies');
    }
}
