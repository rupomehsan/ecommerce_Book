<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use App\Models\products\ProductStock;
use App\Models\products\ProductStockLog;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockLogSeeder extends Seeder
{
    /** php artisan db:seed --class="Database\Seeders\Product\ProductStockLogSeeder"
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStock::truncate();
        ProductStockLog::truncate();

        $products = Product::get();

        foreach ($products as $product) {
            foreach (['initial', 'purchase', 'sales'] as $type) {
                for ($i = 0; $i < 3; $i++) {
                    $s_log = ProductStockLog::create([
                        'product_id' => $product->id,
                        'qty' => rand(40, 80),
                        'type' => $type,
                    ]);

                    if ($type != 'sales') {
                        ProductStock::create([
                            'product_id' => $product->id,
                            'qty' => $s_log->qty,
                            'purchase_date' => Carbon::now()->subDays(rand(10, 50))->toDateString(),
                        ]);
                    }
                }
            }

            $sales = ProductStockLog::where('product_id', $product->id)->where('type','sales')->sum('qty');
            $purchase = ProductStockLog::where('product_id', $product->id)->whereIn('type',['purchase','initial'])->sum('qty');
            $product->stock = $purchase - $sales;
            $product->save();
        }
    }
}
