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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('property_service');
            $table->string('property_type');
            $table->text('description');
            $table->decimal('land_area');
            $table->decimal('building_area');
            $table->integer('max_pax');
            $table->string('location');
            $table->string('address');
            $table->string('address_link');
            $table->string('property_status');
            $table->bigInteger('view_count');
            $table->string('ambience');
            $table->decimal('price', 15,);
            $table->timestamps();

            // $table->foreign('property_type')->references('id')->on('property_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
