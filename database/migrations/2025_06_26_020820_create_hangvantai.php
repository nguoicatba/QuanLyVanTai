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
        Schema::create('hangvantai', function (Blueprint $table) {
            $table->string('MaHangVanTai', 20)->primary(); // Mã hàng vận tải - PK
            $table->string('TenHangVanTai', 40); // Tên hàng vận tải - Not null
            $table->string('DiaChi', 100)->nullable(); // Địa chỉ
            $table->decimal('NoCu', 19, 4)->nullable(); // Nợ cũ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hangvantai');
    }
}; 