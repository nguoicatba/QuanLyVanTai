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
        Schema::create('matuyenduong', function (Blueprint $table) {
            $table->id('route_id'); // Mã tuyến đường - khóa chính
            $table->string('route_name', 255); // Tên tuyến đường (bắt buộc)
            $table->integer('distance_km')->nullable(); // Số km
            $table->integer('diesel_start')->nullable(); // Dầu đầu bằng
            $table->integer('diesel_maxforce')->nullable(); // Dầu ngao MaxForce
            $table->integer('diesel_maxforce_kep')->nullable(); // Dầu ngao MaxForceKep
            $table->integer('diesel_maxforce_t678')->nullable(); // Dầu ngao MaxForceT678
            $table->decimal('ticket_price', 19, 4)->nullable(); // Tiền vé
            $table->decimal('road_fee', 19, 4)->nullable(); // Tiền đi đường
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matuyenduong');
    }
};
