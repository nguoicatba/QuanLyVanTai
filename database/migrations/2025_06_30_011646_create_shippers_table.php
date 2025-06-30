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
        Schema::create('shippers', function (Blueprint $table) {
            $table->string('shipper_code', 20)->primary();          // MaChuHang
            $table->string('shipper_name', 50);                     // TenChuHang - Not null
            $table->string('address', 100)->nullable();             // DiaChi
            $table->string('phone', 20)->nullable();                // DienThoai
            $table->string('fax', 20)->nullable();                  // SoFAX
            $table->string('tax_code', 50)->nullable();             // MaSoThue
            $table->decimal('storage_fee', 19, 4)->nullable();      // DonGiaLuuCa (MONEY)
            $table->string('bank_account', 30)->nullable();         // SoTaiKhoan
            $table->string('bank_name', 50)->nullable();            // NganHang
            $table->string('bank_address', 100)->nullable();        // DiaChiNganHang
            $table->string('id_number', 20)->nullable();            // SoCMND
            $table->integer('tax_percent')->nullable();            // PhanTramThue
            $table->decimal('debt_balance', 19, 4)->nullable();     // NoCu (MONEY)
            $table->timestamps();                                   // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippers');
    }
};
