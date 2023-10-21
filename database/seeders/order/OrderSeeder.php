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
            'total_price' => '300',
            'sub_total' => '250',
            'invoice_id' => '123adc',
            'date' => '2023-10-23 20:59:00',
            'discount_percent' => '10',
            'discount_price' => '270',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '30',

        ]);


        Order::create([
            'user_id' => '2',
            'order_status' => 'pending',
            'total_price' => '400',
            'sub_total' => '300',
            'invoice_id' => '12dc',
            'date' => '2023-10-24 20:59:00',
            'discount_percent' => '15',
            'discount_price' => '340',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '40',

        ]);

        Order::create([
            'user_id' => '3',
            'order_status' => 'accepted',
            'total_price' => '500',
            'sub_total' => '400',
            'invoice_id' => '122adc',
            'date' => '2023-10-25 20:59:00',
            'discount_percent' => '10',
            'discount_price' => '450',
            'payment_status' => 'paid',
            'delivery_method' => 'home',
            'delivery_cost' => '40',

        ]);
    }
}
