<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::truncate();
        ProductCategory::create([
            'title' => 'literature',
            //  'parent'=>'',
            'url' => Str::slug('literature'),
            'image' => '',
            'slug' => Str::slug('literature'),
            'meta_title' => 'literature',
            'meta_information' => '',
            'meta_keywords' => ''
        ]);

        ProductCategory::create([
            'title' => 'Novel',
            //  'parent'=>'',
            'url' => Str::slug('Novel'),
            'image' => '',
            'slug' => Str::slug('Novel'),
            'meta_title' => 'novel',
            'meta_information' => '',
            'meta_keywords' => ''
        ]);

        ProductCategory::create([
            'title' => 'Fiction',
            //  'parent'=>'',
            'url' => Str::slug('Fiction'),
            'image' => '',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title' => 'fiction',
            'meta_information' => '',
            'meta_keywords' => ''
        ]);

        ProductCategory::create([
            'title' => 'Science',
            //  'parent'=>'',
            'url' => 'https://www.rokomari.com/book?ref=nm',
            'image' => '',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title' => 'science',
            'meta_information' => '',
            'meta_keywords' => ''
        ]);

        ProductCategory::create([
            'title' => 'Politics',
            //  'parent'=>'',
            'url' => 'https://www.rokomari.com/book?ref=nm',
            'image' => '',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title' => 'politics',
            'meta_information' => '',
            'meta_keywords' => ''
        ]);
    }
}
