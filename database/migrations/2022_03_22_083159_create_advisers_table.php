<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisers', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('cascade');
            $table->integer('assigned_by');
            $table->string('semester');
            $table->string('year_level');
            $table->date('date_started');
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
        Schema::dropIfExists('advisers');
    }
}
