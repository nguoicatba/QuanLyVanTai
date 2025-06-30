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
        Schema::create('hang_van_tais', function (Blueprint $table) {
            $table->string('MaHangVanTai', 20)->primary();
            $table->string('TenHangVanTai', 40);
            $table->string('DiaChi', 100)->nullable();
            $table->decimal('NoCu', 19, 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hang_van_tais');
    }
};
