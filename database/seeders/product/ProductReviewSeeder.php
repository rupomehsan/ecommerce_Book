<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductReview::truncate();
        ProductReview::create([
            'product_id'=>'1',
            'user_id'=>'4',
            'review_details'=>'this is a good book',
            'star'=>'4',
            'approve'=>'1',

           
        ]);
        ProductReview::create([
            'product_id'=>'2',
            'user_id'=>'1',
            'review_details'=>'this is a good book',
            'star'=>'4.4',
            'approve'=>'0',

           
        ]);
       
     
    }
}
