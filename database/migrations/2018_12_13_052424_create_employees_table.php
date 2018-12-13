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
            $table->increments('id');
            $table->string('LastName', 20)->nullable();
            $table->string('FirstName', 10)->nullable();
            $table->string('Title', 30)->nullable();
            $table->string('TitleOfCourtesy', 25)->nullable();
            $table->string('BirthDate')->nullable();
            $table->string('HireDate')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Region')->nullable();
            $table->string('PostalCode', 10)->nullable();
            $table->string('Country')->nullable();
            $table->string('HomePhone')->nullable();
            $table->string('Extension')->nullable();
            $table->string('Photo')->nullable();
            $table->longtext('Notes')->nullable();
            $table->integer('ReportsTo')->nullable();
            $table->string('PhotoPath', 255)->nullable();
            $table->float('Salary')->nullable();
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
