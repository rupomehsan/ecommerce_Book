<?php

namespace Database\Seeders\order;

use App\Models\orders\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::truncate();
        Order::create([
            'user_id' => '1',
            'order_status' => 'pending',
            'total_price' => '1960',
            'sub_total' => '3400',
            'invoice_id' => '123adc',
            'date' => '2023-10-23 20:59:00',
            'discount_percent' => '53',
            'discount_price' => '1840',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '120',

        ]); 


        Order::create([
            'user_id' => '2',
            'order_status' => 'pending',
            'total_price' => '2135',
            'sub_total' => '2200',
            'invoice_id' => '12dc',
            'date' => '2023-10-24 20:59:00',
            'discount_percent' => '92',
            'discount_price' => '1995',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '140',

        ]);

        Order::create([
            'user_id' => '3',
            'order_status' => 'accepted',
            'total_price' => '1645',
            'sub_total' => '2850',
            'invoice_id' => '122adc',
            'date' => '2023-10-25 20:59:00',
            'discount_percent' => '54',
            'discount_price' => '1545',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '100',

        ]);
    }
}
