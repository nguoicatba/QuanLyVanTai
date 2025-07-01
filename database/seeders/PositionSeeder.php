<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $positions = [
            'Manager',
            'Accountant',
            'HR',
            'Logistics Officer',
            'Sales Executive',
            'Customer Support',
            'Warehouse Supervisor',
            'Technician',
            'Driver',
            'IT Support',
        ];
        foreach ($positions as $name) {
            Position::create([
                'position_name' => $name,
            ]);
        }
    }
}
