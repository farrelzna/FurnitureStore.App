<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vouchers')->insert([
            [
                'name' => 'Mega Sale Event - UP TO 70% OFF',
                'description' => 'Get up to 70% off on selected items during our mega sale event.',
                'discount' => '10000',
                'stock' => 20,
                'type' => 'Delivery Vouchers',  
                'image' => '../assets/img/Sale/sale1.png',
            ],
            [
                'name' => 'Pay Day Promotion - UP TO 30% OFF',
                'description' => 'Get up to 30% off on selected items during our pay day promotion.',
                'discount' => '3000',
                'stock' => 10,
                'type' => 'Item Vouchers',  
                'image' => '../assets/img/Sale/sale2.png',
            ],
            [
                'name' => '12.12 Super Big Sale - UP TO 70% OFF',
                'description' => 'Get up to 70% off on selected items during our 12.12 super big sale.',
                'discount' => '10000',
                'stock' => 10,
                'type' => 'Item Vouchers',  
                'image' => '../assets/img/Sale/sale3.png',
            ],
            [
                'name' => '12.12 Flash Sale - UP TO 50% OFF',
                'description' => 'Get up to 50% off on selected items during our mega sale event.',
                'discount' => '5000',
                'stock' => 10,
                'type' => 'Item Vouchers',  
                'image' => '../assets/img/Sale/sale4.png',
            ],
            
        ]);
    }
}
