<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Modern White sofa',
                'description' => 'A sleek and modern white sofa for a stylish living room.',
                'price' => 3500000,
                'stock' => 10,
                'image' => '../assets/img/Product/chair1.jpeg',
            ],
            [
                'name' => 'White Chair',
                'description' => 'A stylish white chair for a modern living room.',
                'price' => 4500000,
                'stock' => 5,
                'image' => '../assets/img/Product/chair2.jpeg',
            ],
            [
                'name' => 'Office Chair',
                'description' => 'Ergonomic office chair for ultimate comfort during work.',
                'price' => 2500000,
                'stock' => 15,
                'image' => '../assets/img/Product/chair3.jpg',
            ],
            [
                'name' => 'Dining Chair and Table Set',
                'description' => 'A set of dining chairs and a table for a cozy dining experience.',
                'price' => 7500000,
                'stock' => 8,
                'image' => '../assets/img/Product/SetDiningChair1.jpeg',
            ],
            [
                'name' => 'Storage Shelf',
                'description' => 'A sturdy storage shelf for organizing and storing items.',
                'price' => 600000,
                'stock' => 20,
                'image' => '../assets/img/Product/storagerack1.jpeg',
            ],
            [
                'name' => 'Storage Rack',
                'description' => 'A sturdy storage rack for organizing and storing items.',
                'price' => 600000,
                'stock' => 20,
                'image' => '../assets/img/Product/storagerack2.jpeg',
            ],
            [
                'name' => 'Modern Table',
                'description' => 'A sleek and modern table for a stylish living room.',
                'price' => 3500000,
                'stock' => 10,
                'image' => '../assets/img/Product/table1.jpeg',
            ],
        ]);
    }
}
