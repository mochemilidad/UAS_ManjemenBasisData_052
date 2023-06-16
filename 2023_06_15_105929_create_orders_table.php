<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->string('CustomerID');
            $table->string('EmployeeID');
            $table->string('OrderDate');
            $table->string('RequiredDate');
            $table->string('ShippedDate');
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
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
