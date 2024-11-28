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
            $table->unsignedBigInteger('fk_property_type_id');
            $table->string('property_name');
            $table->string('property_service');
            $table->string('property_type');
            $table->text('description');
            $table->decimal('land_area', 10, 2);
            $table->decimal('building_area', 10, 2);
            $table->integer('max_pax');
            $table->string('location');
            $table->string('address');
            $table->string('address_link');
            $table->string('property_status');
            $table->bigInteger('view_count')->default(0);
            $table->string('ambience');
            $table->decimal('price', 15, 2);
            $table->timestamps();

            $table->foreign('fk_property_type_id')
                ->references('id')
                ->on('property_types')
                ->onDelete('set null');
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
