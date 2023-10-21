<?php

namespace Database\Seeders\order;

use App\Models\orders\OrderPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderPayment::truncate();
        OrderPayment::create([
            'user_id' => '1',
            'order_id' => '1',
            'payment_method' => 'bekash',
            'payment_number' => '01721232322',
            'trx_id' => '123',
            'amount' => '500',

        ]);


        OrderPayment::create([
            'user_id' => '2',
            'order_id' => '2',
            'payment_method' => 'bekash',
            'payment_number' => '01721231122',
            'trx_id' => '123',
            'amount' => '400',

        ]);


        OrderPayment::create([
            'user_id' => '3',
            'order_id' => '3',
            'payment_method' => 'bekash',
            'payment_number' => '01721231144',
            'trx_id' => '123',
            'amount' => '300',

        ]);
    }
}
