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
        Schema::create('nearest_public_facility_property', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('public_facility_id');
            $table->unsignedBigInteger('property_id');
            $table->string('name');
            $table->string('distance');
            $table->string('location_link');

            $table->foreign('public_facility_id')->references('id')->on('nearest_public_facility');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nearest_public_facility_property');
    }
};
