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
            $table->bigInteger('profiles_id');
            $table->bigInteger('applied_jobs_id');
            $table->bigInteger('academic_records_id');
            $table->bigInteger('training_records_id');
            $table->bigInteger('job_records_id');
            $table->bigInteger('skills_id');
            $table->integer('salary_expected');
            $table->boolean('is_willing_placed');
            $table->timestamps();
        });

        Schema::create('academic_records', function (Blueprint $table) {
            $table->id();
            $table->string('educational_stage');
            $table->string('institution_name');
            $table->string('major');
            $table->year('graduation_year');
            $table->decimal('gpa');
            $table->timestamps();
        });

        Schema::create('training_records', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->boolean('is_certificate');
            $table->year('year');
            $table->timestamps();
        });

        Schema::create('job_records', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('last_position');
            $table->string('last_income');
            $table->year('year');
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('academic_records');
        Schema::dropIfExists('training_records');
        Schema::dropIfExists('job_records');
        Schema::dropIfExists('skills');
    }
}
