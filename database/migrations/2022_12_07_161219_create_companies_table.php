<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('cname',50)->nullable();
            $table->string('email',50)->unique();
            $table->string('logo',500)->nullable();
            $table->string('website',50)->nullable();
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
        Schema::dropIfExists('companies');
        $table->dropcolumn('cname');
        $table->dropcolumn('email');
        $table->dropcolumn('logo');
        $table->dropcolumn('website');
    }
}
