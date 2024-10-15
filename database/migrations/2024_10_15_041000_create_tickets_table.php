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
            $table->id()->autoIncrement();
            $table->string('passenger_name')->required();
            $table->string('passenger_phone', 14)->required();
            $table->string('seat_number', 3)->required();
            $table->integer('is_boarding')->required()->default(0);
            $table->dateTime('boarding_time')->nullable();
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')
                  ->references('id')
                  ->on('flights')->onDelete('cascade');
            $table->timestamps();
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
