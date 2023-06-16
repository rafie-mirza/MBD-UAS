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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID')->primary;
            $table->string('CustomerID');
            $table->string('EmployeeID');
            $table->date('OrderDate');
            $table->date('RequiredDate');
            $table->date('ShippedDate');
            $table->string('ShipVia');
            $table->string('Freight');
            $table->string('ShipName');
            $table->string('ShipAddress');
            $table->string('ShipCity');
            $table->string('ShipRegion');
            $table->string('ShipPostalCode');
            $table->string('ShipCountry');
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
};
