<?php

namespace Database\Seeders\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_product_category')->insert([
            'product_id' => 1,
            'product_category_id' => 1,
        ]);
    }
}
