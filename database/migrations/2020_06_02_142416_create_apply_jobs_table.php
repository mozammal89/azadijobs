<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seeker_id');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('job_post_id');
            $table->string('expected_salary');
            $table->string('apply_date');
            $table->foreign('seeker_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->foreign('provider_id')
                    ->references('id')
                    ->on('job_provider_job_post')
                    ->onDelete('cascade');
            $table->foreign('job_post_id')
                    ->references('id')
                    ->on('job_provider_job_post')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('apply_jobs');
    }
}
