<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->ulid('id')->primary(); // Dùng ULID thay vì auto increment
            $table->string('route_name', 255);
            $table->integer('distance_km')->nullable();
            $table->integer('diesel_start_equalizer')->nullable();
            $table->integer('maxforce_oil')->nullable();
            $table->integer('maxforce_oil_kep')->nullable();
            $table->integer('maxforce_oil_t678')->nullable();
            $table->decimal('ticket_price', 15, 2)->nullable();
            $table->decimal('road_fee', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
