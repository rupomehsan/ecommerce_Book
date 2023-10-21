<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::truncate();


        for($i=1; $i<=16; $i++ ){
            ProductImage::create([
                'product_id' => $i,
                'image' => 'assets/backend/product/'.$i.'.jpg',
    
            ]);    
          
        }
        
    }
}
