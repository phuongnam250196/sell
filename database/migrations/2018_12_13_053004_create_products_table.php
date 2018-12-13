<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ProductName')->nullable();
            $table->string('QuantityPerUnit')->nullable();
            $table->float('UnitPrice')->nullable();
            $table->TinyInteger('UnitsInStock')->nullable();
            $table->TinyInteger('UnitsOnOrder')->nullable();
            $table->TinyInteger('ReorderLevel')->nullable();
            $table->TinyInteger('Discountinued')->nullable();

            $table->integer('SupplierID')->unsigned()->nullable();;
            $table->integer('CategoryID')->unsigned()->nullable();;
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
        Schema::dropIfExists('products');
    }
}
