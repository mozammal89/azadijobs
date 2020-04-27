<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('employee_name');
            $table->string('employee_id');
            $table->string('employee_email');
            $table->string('employee_phone');
            $table->string('dob');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('image');
            $table->string('nid');
            $table->string('passport');
            $table->unsignedBigInteger('employee_designation');
            $table->foreign('employee_designation')
                    ->references('id')
                    ->on('designations')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('employee_department');
            $table->foreign('employee_department')
                    ->references('id')
                    ->on('departments')
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
        Schema::dropIfExists('employees');
    }
}
