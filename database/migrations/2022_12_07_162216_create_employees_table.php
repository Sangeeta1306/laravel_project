<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('fname',20)->nullable();
            $table->string('lname',20)->nullable();
            $table->string('company',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',20)->nullable();
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
        $table->dropcolumn('fname');
        $table->dropcolumn('lname');
        $table->dropcolumn('company');
        $table->dropcolumn('email');
        $table->dropcolumn('phone');

    }
}