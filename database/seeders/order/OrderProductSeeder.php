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
            'product_price' => '600',
            'discount_percent' => '50',
            'discount_price' => '300',
            'qty' => '2',

        ]);

        OrderProduct::create([
            'product_id' => '2',
            'order_id' => '1',
            'product_price' => '400',
            'discount_percent' => '30',
            'discount_price' => '280',
            'qty' => '3',

        ]);


        OrderProduct::create([
            'product_id' => '3',
            'order_id' => '1',
            'product_price' => '500',
            'discount_percent' => '20',
            'discount_price' => '400',
            'qty' => '2',

        ]);

        OrderProduct::create([
            'product_id' => '4',
            'order_id' => '2',
            'product_price' => '350',
            'discount_percent' => '10',
            'discount_price' => '315',
            'qty' => '2',

        ]);
         OrderProduct::create([
            'product_id' => '5',
            'order_id' => '2',
            'product_price' => '400',
            'discount_percent' => '10',
            'discount_price' => '360',
            'qty' => '3',

        ]);
         OrderProduct::create([
            'product_id' => '6',
            'order_id' => '2',
            'product_price' => '300',
            'discount_percent' => '5',
            'discount_price' => '285',
            'qty' => '1',

        ]);


        OrderProduct::create([
            'product_id' => '7',
            'order_id' => '3',
            'product_price' => '550',
            'discount_percent' => '50',
            'discount_price' => '275',
            'qty' => '3',

        ]);
         OrderProduct::create([
            'product_id' => '8',
            'order_id' => '3',
            'product_price' => '600',
            'discount_percent' => '40',
            'discount_price' => '360',
            'qty' => '2',

        ]);

        
    }
}
