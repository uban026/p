<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;
class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Coupon::create([
            'name' => '-',
            'status' => 'active',
            'type' => 'amount',
            'value' => 0
        ]);

        Coupon::create([
            'name' => 'DISKON10',
            'status' => 'active',
            'type' => 'percent',
            'value' => 10
        ]);

        Coupon::create([
            'name' => 'HEMAT5000',
            'status' => 'active',
            'type' => 'amount',
            'value' => 5000
        ]);

    }
}