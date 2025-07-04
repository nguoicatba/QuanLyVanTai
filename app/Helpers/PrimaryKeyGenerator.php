<?php
namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PrimaryKeyGenerator
{
    /**
     * Tự động tạo mã code với prefix, dựa vào cột và bảng được chỉ định
     *
     * @param string $table Tên bảng (ví dụ: 'shippers')
     * @param string $column Tên cột (ví dụ: 'shipper_code')
     * @param string $prefix Tiền tố (ví dụ: 'SHP')
     * @param int $length Tổng độ dài sau prefix (ví dụ: 3 -> SHP001)
     * @return string Mã mới
     */
    public static function generate(string $table, string $column, string $prefix, int $length = 5): string
    {return DB::transaction(function () use ($table, $column, $prefix, $length) {
        // Khóa tất cả hàng có cùng prefix để ngăn request khác đọc trong lúc này
        $latest = DB::table($table)
            ->where($column, 'like', $prefix . '%')
            ->lockForUpdate()
            ->orderByDesc($column)
            ->value($column);

        $nextNumber = $latest
            ? (int) Str::after($latest, $prefix) + 1
            : 1;

        return $prefix . str_pad($nextNumber, $length, '0', STR_PAD_LEFT);
    }, attempts: 3);   //
    }
}


