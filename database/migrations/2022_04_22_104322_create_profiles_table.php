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
            $table->string('id_card_number');
            $table->string('birthplace')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('sex');
            $table->string('religion')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('status')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_domicile')->nullable();
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('closest_person')->nullable();
            $table->timestamps();
        });

        Schema::create('academic_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('educational_stage');
            $table->string('institution_name');
            $table->string('major');
            $table->year('graduation_year');
            $table->decimal('gpa');
            $table->timestamps();
        });

        Schema::create('training_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('course_name');
            $table->boolean('is_certificate');
            $table->year('year');
            $table->timestamps();
        });

        Schema::create('job_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('company_name');
            $table->string('last_position');
            $table->string('last_income');
            $table->year('year');
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('title');
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
        Schema::dropIfExists('academic_records');
        Schema::dropIfExists('training_records');
        Schema::dropIfExists('job_records');
        Schema::dropIfExists('skills');
    }
}
