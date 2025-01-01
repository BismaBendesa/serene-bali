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
            $table->unsignedBigInteger('fk_facility_id')->nullable();
            $table->unsignedBigInteger('fk_property_id');
            $table->string('amount');
            $table->string('detail');
            $table->timestamps();


            $table->foreign('fk_facility_id')->references('id')->on('facilities')->onDelete("set null");
            $table->foreign('fk_property_id')->references('id')->on('properties')->onDelete('cascade');
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
