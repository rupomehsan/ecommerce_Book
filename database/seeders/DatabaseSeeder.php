<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\exta\EcomBannerSeeder;
use Database\Seeders\exta\EcomFeedbackSeeder;
use Database\Seeders\order\OrderPaymentSeeder;
use Database\Seeders\order\OrderProductSeeder;
use Database\Seeders\order\OrderSeeder;
use Database\Seeders\Product\ProductCategoryProductSeeder;
use Database\Seeders\Product\ProductCategorySeeder;
use Database\Seeders\Product\ProductImageSeeder;
use Database\Seeders\Product\ProductOfferSeeder;
use Database\Seeders\Product\ProductReviewSeeder;
use Database\Seeders\Product\ProductSeeder;
use Database\Seeders\Product\ProductSpecificationSeeder;
use Database\Seeders\Product\ProductStockLogSeeder;
use Database\Seeders\Product\ProductStockSeeder;
use Database\Seeders\Product\ProductTagSeeder;
use Database\Seeders\siteurl\SiteUrlSeeder;
use Database\Seeders\siteurl\SiteUrlViewCountSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            UserRoleSeeder::class,

            ProductCategorySeeder::class,
            ProductCategoryProductSeeder::class,
            ProductSeeder::class,
            ProductSpecificationSeeder::class,
            ProductImageSeeder::class,

            ProductTagSeeder::class,
            ProductStockSeeder::class,
            ProductStockLogSeeder::class,

            ProductOfferSeeder::class,
            ProductReviewSeeder::class,

            OrderSeeder::class,
            OrderProductSeeder::class,
            OrderPaymentSeeder::class,

            EcomBannerSeeder::class,
            EcomFeedbackSeeder::class,


            SiteUrlSeeder::class,
            SiteUrlViewCountSeeder::class,


        ]);
    }
}
