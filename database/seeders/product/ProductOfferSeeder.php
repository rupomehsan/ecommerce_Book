<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductOffer;
use App\Models\products\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOffer::truncate();
        ProductOffer::create([
            'product_id'=>'1',
            'start_date'=>'2023-10-24 20:59:00',
            'end_date'=>'2023-10-28 20:59:00',
            'main_price'=>'400',
            'discount_percent'=>'50',
            'discount_price'=>'200',
           
        ]);
        ProductOffer::create([
            'product_id'=>'3',
            'start_date'=>'2023-10-26 20:59:00',
            'end_date'=>'2023-10-28 20:59:00',
            'main_price'=>'400',
            'discount_percent'=>'30',
            'discount_price'=>'120',
           
        ]); ProductOffer::create([
            'product_id'=>'4',
            'start_date'=>'2023-10-24 20:59:00',
            'end_date'=>'2023-10-28 20:59:00',
            'main_price'=>'200',
            'discount_percent'=>'50',
            'discount_price'=>'100',
           
        ]); ProductOffer::create([
            'product_id'=>'7',
            'start_date'=>'2023-10-28 20:59:00',
            'end_date'=>'2023-10-30 20:59:00',
            'main_price'=>'600',
            'discount_percent'=>'40',
            'discount_price'=>'240',
           
        ]);
    }
}
