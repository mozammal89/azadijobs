<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProviderJobPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_provider_job_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provider_id');
            $table->string('job_title');
            $table->string('category');
            $table->string('sub_category');
            $table->string('job_post_date');
            $table->string('application_deadline');
            $table->string('joining_date');
            $table->string('vacancy');
            $table->string('job_context');
            $table->string('job_responsibilities');
            $table->string('employment_status');
            $table->string('educational_requirements');
            $table->string('additional_requirements');
            $table->string('job_location');
            $table->string('salary');
            $table->string('application_note');
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
        Schema::dropIfExists('job_provider_job_post');
    }
}
