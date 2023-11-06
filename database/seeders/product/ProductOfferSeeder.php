<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use App\Models\products\ProductOffer;
use App\Models\products\ProductReview;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOfferSeeder extends Seeder
{
    /** php artisan db:seed --class="Database\Seeders\Product\ProductOfferSeeder"
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOffer::truncate();

        $products = Product::get();
        foreach ($products as $product) {
            $percent = rand(10,60);
            $dis_price = round($product->sales_price * $percent / 100 );
            ProductOffer::create([
                'product_id' => $product->id,
                'start_date' => Carbon::now()->toDateTimeString(),
                'end_date' => Carbon::now()->addDays(60)->toDateTimeString(),
                'main_price' => $product->sales_price,
                'discount_percent' => $percent,
                'discount_flat_amount' => $dis_price,
                'discount_price' => $product->sales_price - $dis_price,
            ]);
        }
    }
}
