<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeHasDesignations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_designations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('cascade');
            $table->integer('designation_id');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->string('designation_role');
            $table->integer('assigned_by');
            $table->date('date_assigned');
            $table->date('date_ended');
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
        Schema::dropIfExists('employee_has_designations');
    }
}
