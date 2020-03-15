<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_name');
            $table->string('school_subject');
            $table->string('scholl_grade');
            $table->string('school_passing_year');
            $table->string('college_name');
            $table->string('college_subject');
            $table->string('college_grade');
            $table->string('college_passing_year');
            $table->string('versity_name');
            $table->string('versity_subject');
            $table->string('versity_grade');
            $table->string('versity_passing_year');
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
        Schema::dropIfExists('job_seeker_educations');
    }
}
