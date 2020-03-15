<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');           
            $table->string('last_name');           
            $table->string('father_name');           
            $table->string('mother_name');           
            $table->string('gender');           
            $table->string('dob');           
            $table->string('religion');           
            $table->string('nationality');           
            $table->string('nid');           
            $table->string('passport_number');           
            $table->string('maritial_status');           
            $table->string('mobile');           
            $table->string('email');           
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
        Schema::dropIfExists('job_seeker_profiles');
    }
}
