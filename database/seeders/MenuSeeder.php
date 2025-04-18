<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $menus = [
            [
                'title' => 'Pizza',
                'description' => 'Delicious cheese pizza',
                'image' => 'pizza-7.jpg',
                'category' => 'Snacks',
                'quantity' => '1',
                'price' => '520.00',
                'discount_price' => '8.00',
            ],
            [
                'title' => 'Pasta',
                'description' => 'Creamy Alfredo pasta',
                'image' => 'pasta-1.jpg',
                'category' => 'Snacks',
                'quantity' => '1',
                'price' => '250.00',
                'discount_price' => null,
            ],
        ];
        foreach ($menus as $menu) {
            \DB::table('menus')->insert($menu);
        }
    }
}
