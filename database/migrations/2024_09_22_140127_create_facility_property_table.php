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
        Schema::create('facility_property', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_facility');
            $table->unsignedBigInteger('id_property');
            $table->string('amount');
            $table->string('detail');
            $table->timestamps();
            $table->foreign('id_facility')->references('id')->on('facility');
            $table->foreign('id_property')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_property');
    }
};
