<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterAboutUsAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_about_us_about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('describtion');
            $table->string('email');
            $table->string('web_link');
            $table->string('tech_email');
            $table->string('sales_email');
            $table->string('mobile');
            $table->string('address');
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
        Schema::dropIfExists('footer_about_us_about_us');
    }
}
