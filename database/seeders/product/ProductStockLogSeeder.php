<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductStockLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStockLog::truncate();
        ProductStockLog::create([
            'product_id'=>'1',
            'qty'=>'4',
            'type'=>'purchase',
           
        ]);
        ProductStockLog::create([
            'product_id'=>'2',
            'qty'=>'6',
            'type'=>'sales',
           
        ]);ProductStockLog::create([
            'product_id'=>'3',
            'qty'=>'8',
            'type'=>'initial',
           
        ]);ProductStockLog::create([
            'product_id'=>'4',
            'qty'=>'9',
            'type'=>'purchase',
           
        ]);ProductStockLog::create([
            'product_id'=>'5',
            'qty'=>'12',
            'type'=>'initial',
           
        ]);
     
    }
}
