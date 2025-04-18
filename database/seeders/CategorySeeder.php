<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['category_name' => 'Fruits'],
            ['category_name' => 'Vegetables'],
            ['category_name' => 'Dairy'],
            ['category_name' => 'Meat'],
            ['category_name' => 'Grains'],
            ['category_name' => 'Snacks'],
            ['category_name' => 'Beverages'],
        ];
        foreach ($categories as $category) {
            \DB::table('categories')->insert($category);
        }
    }
}
