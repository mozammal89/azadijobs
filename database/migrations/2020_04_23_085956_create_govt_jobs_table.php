<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovtJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govt_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title');
            $table->string('dept_title');
            $table->string('source_image');
            $table->string('job_post_date');
            $table->string('application_deadline');
            $table->string('vacancy');
            $table->string('job_context');
            $table->string('job_responsibilities');
            $table->string('employment_status');
            $table->string('educational_requirements');
            $table->string('additional_requirements');
            $table->string('job_location');
            $table->string('salary');
            $table->string('application_note');
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
        Schema::dropIfExists('govt_jobs');
    }
}
