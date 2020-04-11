<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ads_cat_name');
            $table->string('ads_cat_title');
            $table->string('ads_ref_url');
            $table->string('ads_image');
            $table->string('ads_position');
            $table->string('ads_activation_date_range');
            $table->string('ads_status');
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
        Schema::dropIfExists('ads_managements');
    }
}
