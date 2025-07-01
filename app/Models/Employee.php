<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    protected $primaryKey = 'employee_id';
    protected $keyType = 'string';

    protected $incrementing = false;

    protected $fillable = [
        'employee_name',
        'birth_date',
        'citizen_id',
        'address',
        'phone_number',
        'employee_type',
        'department',
        'basic_salary',
        'note',
        'position_id',
        'resigned',
    ];

    protected static function booted()
    {
        static::creating(function ($employee) {
            if (!$employee->employee_id) {
                $lastCode = self::orderBy('employee_id', 'desc')->first()?->employee_id ?? 'NV000';
                $number = (int) substr($lastCode, 2) + 1;
                $employee->employee_id = 'NV' . str_pad($number, 3, '0', STR_PAD_LEFT);
            }
        });
    }
}
