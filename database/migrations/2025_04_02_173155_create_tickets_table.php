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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehiculo_id');
            $table->unsignedBigInteger('sede_id');
            $table->timestamp('h_ingreso');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
