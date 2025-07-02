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
    {
        $latest = DB::table($table)
            ->where($column, 'like', $prefix . '%')
            ->orderByDesc($column)
            ->value($column);

        if ($latest && Str::startsWith($latest, $prefix)) {
            $lastNumber = (int) str_replace($prefix, '', $latest);
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }

        return $prefix . str_pad($nextNumber, $length, '0', STR_PAD_LEFT);
    }
}


