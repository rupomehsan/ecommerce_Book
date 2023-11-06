<?php

namespace Database\Seeders\siteurl;

use App\Models\products\Product;
use App\Models\products\ProductCategory;
use App\Models\products\ProductTag;
use App\Models\siturl\SiteUrl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteUrlSeeder extends Seeder
{
    /** php artisan db:seed --class="Database\Seeders\siteurl\SiteUrlSeeder"
     * Run the database seeds.
     */
    public function run(): void
    {

        SiteUrl::truncate();
        $categorys = ProductCategory::get();

        foreach ($categorys as $category) {
            SiteUrl::create([
                'url' => $category->url,
                'url_for_table' => 'product_categories',
                'url_for_table_id' =>  $category->id,
                'url_redirect_to' => '',
                'total_view' => '',
                'total_redirect' => '',

            ]);
        }

        $products = Product::get();

        foreach ($products as $product) {
            SiteUrl::create([
                'url' => $product->product_url,
                'url_for_table' => 'products',
                'url_for_table_id' =>  $product->id,
                'url_redirect_to' => '',
                'total_view' => '',
                'total_redirect' => '',
            ]);
        }


        $ProductTags = ProductTag::get();

        foreach ($ProductTags as $ProductTag) {
            SiteUrl::create([
                'url' => $ProductTag->url,
                'url_for_table' => 'product_tags',
                'url_for_table_id' =>  $ProductTag->id,
                'url_redirect_to' => '',
                'total_view' => '',
                'total_redirect' => '',

            ]);
        }
    }
}
