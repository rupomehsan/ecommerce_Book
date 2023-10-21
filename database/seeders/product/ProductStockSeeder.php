<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStock::truncate();
        ProductStock::create([
            'product_id'=>'1',
            'qty'=>'4',
            'purchase_date'=>'2023-11-10 20:59:00',
           
        ]);
        ProductStock::create([
            'product_id'=>'2',
            'qty'=>'5',
            'purchase_date'=>'2023-11-11 20:59:00',
           
        ]); ProductStock::create([
            'product_id'=>'3',
            'qty'=>'7',
            'purchase_date'=>'2023-11-12 20:59:00',
           
        ]); ProductStock::create([
            'product_id'=>'4',
            'qty'=>'9',
            'purchase_date'=>'2023-11-13 20:59:00',
           
        ]); ProductStock::create([
            'product_id'=>'5',
            'qty'=>'10',
            'purchase_date'=>'2023-11-14 20:59:00',
           
        ]);
     
    }
}
