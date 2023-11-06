<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /** php artisan db:seed --class="Database\Seeders\Product\ProductSeeder"
     * Run the database seeds.
     */
    public function run(): void
    {


        Product::truncate();

        $products = [
            [
                "product_name" => "Golpo Somorgo-1",
                "selected_categories" => 4,
                "image" => "assets/frontend/products/notebook/golpo_somorga1/01.jpg"

            ],

            [
                "product_name" => "Golpo somorgo-3",
                "selected_categories" => 4,
                "image" => "assets/frontend/products/notebook/golpo_somorga3/01.jpg"

            ],

            [
                "product_name" => "KK Kye Ring",
                "selected_categories" => 6,
                "image" => "assets/frontend/products/key_ring/kk/updatKeyRing/01.jpg"

            ],

            [
                "product_name" => "কলম কি ক",
                "selected_categories" => 2,
                "image" => "assets/frontend/products/pen/01.png"

            ],

            [
                "product_name" => "কলমদানি",
                "selected_categories" => 2,
                "image" => "assets/frontend/products/pen_holder/01.png"

            ],

            [
                "product_name" => "কি ক পত্রিকা",
                "selected_categories" => 4,
                "image" => "assets/frontend/products/newspaper/01.png"

            ],

            [
                "product_name" => "কিশোরকণ্ঠ কলম-2",
                "selected_categories" => 2,
                "image" => "assets/frontend/products/kisorkantho_pen/01.png"

            ],

            [
                "product_name" => "কিশোরকণ্ঠ ঘড়ি",
                "selected_categories" => 3,
                "image" => "assets/frontend/products/watch/03.png"

            ],
            [
                "product_name" => "কিশোরকন্ঠ নোটবুক",
                "selected_categories" => 4,
                "image" => "assets/frontend/products/notebook/3.png"

            ],

            [
                "product_name" => "ক্যালেন্ডার",
                "selected_categories" => 7,
                "image" => "assets/frontend/products/watch/03.png"

            ],

            [
                "product_name" => "মগ কি ক",
                "selected_categories" => 1,
                "image" => "assets/frontend/products/mug/01.png"

            ],
        ];

        foreach ($products as $product) {
            $data = Product::create(
                [
                    "product_name" => $product['product_name'],
                    "product_url" => Str::slug($product['product_name']),
                    "is_top_product" => 1,
                    "selected_categories" => $product['selected_categories'],
                    "short_description" => "",
                    "description" => "",
                    "image" => $product['image'],
                    "cost" => rand(50, 100),
                    "sales_price" => rand(50, 100),
                    "stock" => 20,
                    "low_stock" => 10,
                    "meta_title" => $product['product_name'],
                    "meta_description" => $product['product_name'],
                    "schema_tag" => "",
                    "video_url" => "",
                    "status" => "active",
                ]
            );
        }
    }
}
