<?php

namespace Database\Seeders\order;

use App\Models\orders\OrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderProduct::truncate();
        OrderProduct::create([
            'product_id' => '1',
            'order_id' => '1',
            'product_price' => '500',
            'discount_percent' => '10',
            'discount_price' => '450',
            'qty' => '3',

        ]);

        OrderProduct::create([
            'product_id' => '2',
            'order_id' => '2',
            'product_price' => '440',
            'discount_percent' => '10',
            'discount_price' => '396',
            'qty' => '2',

        ]);


        OrderProduct::create([
            'product_id' => '3',
            'order_id' => '3',
            'product_price' => '250',
            'discount_percent' => '5',
            'discount_price' => '237.5',
            'qty' => '2',

        ]);
    }
}
