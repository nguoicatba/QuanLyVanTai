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
        Schema::create('employees', function (Blueprint $table) {
            $table->string('employee_id')->primary(); // MaNhanVien
            $table->string('employee_name', 40); // TenNhanVien
            $table->date('birth_date')->nullable(); // NgaySinh
            $table->string('citizen_id', 15)->nullable(); // CCCD
            $table->string('address', 200)->nullable(); // DiaChi
            $table->string('phone_number', 30)->nullable(); // SDT
            $table->string('employee_type', 40)->nullable(); // LoaiNhanVien
            $table->string('department', 40)->nullable(); // PhongBan
            $table->decimal('basic_salary', 15, 2)->nullable(); // LuongCoBan
            $table->string('note', 100)->nullable(); // GhiChu
            $table->unsignedBigInteger('position_id'); // MaChucVu
            $table->boolean('resigned')->default(false); // DaRoiCoQuan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
