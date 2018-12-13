<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OrderDate')->nullable();
            $table->string('RequireDate')->nullable();
            $table->string('ShippedDate')->nullable();
            $table->float('Freight')->nullable();
            $table->string('ShipName')->nullable();
            $table->string('ShipAddress')->nullable();
            $table->string('ShipCity')->nullable();
            $table->string('ShipRegion')->nullable();
            $table->string('ShipPostalCode')->nullable();
            $table->string('ShipCountry')->nullable();

            $table->integer('CustomerID')->unsigned()->nullable();;
            $table->integer('EmployeeID')->unsigned()->nullable();;
            $table->integer('ShipVia')->unsigned()->nullable();;
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
        Schema::dropIfExists('orders');
    }
}
