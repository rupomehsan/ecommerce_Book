<?php

namespace Database\Seeders\order;

use App\Models\orders\Order;
use App\Models\orders\OrderProduct;
use App\Models\products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds. php artisan db:seed --class="Database\Seeders\order\OrderSeeder"
     */
    public function run(): void
    {
        Order::truncate();
        for ($i = 1; $i < 10; $i++) {
            $totalPrice = 0;
            $mainPrice = 0;
            $products = Product::with('discounts')->limit(5)->get();
            foreach ($products as $product) {
                $orderProduct =  OrderProduct::create([
                    "product_id" => $product->id,
                    "order_id" => rand(1, 5),
                    "product_price" => $product->sales_price,
                    "discount_percent" => $product->discounts() ? $product->discounts()->latest()->first()->discount_percent : 0,
                    "discount_price" => $product->discounts() ? $product->discounts()->latest()->first()->discount_price : 0,
                    "qty" => rand(1, 5),
                ]);

                $totalPrice += $orderProduct->discount_price * $orderProduct->qty;
                $mainPrice += $orderProduct->product_price * $orderProduct->qty;
            }

            Order::create([
                'user_id' => rand(1, 10),
                'order_status' => ['pending', 'accepted', 'processing', 'delivered'][rand(0, 2)],
                'total_price' => $mainPrice,
                'discount_price' => $totalPrice,
                'sub_total' => $totalPrice + 120,
                'invoice_id' => "IN-" . rand(9999, 99999999),
                'date' => Carbon::now()->subDays(rand(1, 5))->toDateString(),
                'discount_percent' => 100 * $totalPrice / $mainPrice,
                'payment_status' => 'pending',
                'delivery_method' => 'home',
                'delivery_cost' => '120',

            ]);
        }
    }
}
