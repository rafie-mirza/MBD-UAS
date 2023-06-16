<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID')->primary;
            $table->string('ProductName');
            $table->string('SupplierID');
            $table->string('CategoryID');
            $table->string('QuantityPerUnit');
            $table->string('UnitPrice');
            $table->string('UnitInStock');
            $table->string('UnitOnOrder');
            $table->string('ReorderLevel');
            $table->string('Discontinued');
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
};
