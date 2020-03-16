<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker_address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('present_address');
            $table->string('present_district');
            $table->string('present_country');
            $table->string('present_zip');
            $table->string('parmanent_address');
            $table->string('parmanent_district');
            $table->string('parmanent_country');
            $table->string('parmanent_zip');
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
        Schema::dropIfExists('job_seeker_address');
    }
}
