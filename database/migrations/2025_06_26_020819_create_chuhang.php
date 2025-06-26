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
        Schema::create('chuhang', function (Blueprint $table) {
            $table->string('MaChuHang', 20)->primary(); // Mã chủ hàng - PK
            $table->string('TenChuHang', 50); // Tên chủ hàng - Not null
            $table->string('DiaChi', 100)->nullable(); // Địa chỉ
            $table->string('DienThoai', 20)->nullable(); // Điện thoại
            $table->string('SoFAX', 20)->nullable(); // Số fax
            $table->string('MaSoThue', 50)->nullable(); // Mã số thuế
            $table->decimal('DonGiaLuuCa', 19, 4)->nullable(); // Đơn giá lưu ca
            $table->string('SoTaiKhoan', 30)->nullable(); // Số tài khoản
            $table->string('NganHang', 50)->nullable(); // Ngân hàng
            $table->string('DiaChiNganHang', 100)->nullable(); // Địa chỉ ngân hàng
            $table->string('SoCMND', 20)->nullable(); // Số CMND
            $table->integer('PhanTramThue')->nullable(); // Phần trăm thuế
            $table->decimal('NoCu', 19, 4)->nullable(); // Nợ cũ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chuhang');
    }
}; 