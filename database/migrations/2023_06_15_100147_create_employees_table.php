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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EmployeeID')->primary;
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Title');
            $table->string('TitleOfCourtesy');
            $table->date('BirthDate');
            $table->date('HireDate');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
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
};
