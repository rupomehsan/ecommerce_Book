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

        $categories = [      
           
            [
                "title" => " মগ",
            ],
            [
                "title" => "কলম",
            ],
            [
                "title" => "ঘড়ি",
            ],
            [
                "title" => "নোটবুক",
            ],

            [
                "title" => "কলমদানি",
            ],

            [
                "title" => "চাবির রিং",
            ],
            
            [
                "title" => "ক্যালেন্ডার ",
            ],
           
           

        ];


        foreach ($categories as  $category) {

               ProductCategory::create([
                'parent' => 0,
                'title' => $category['title'],
                'url' => Str::slug($category['title']),
                'image' => '',
                'slug' => Str::slug($category['title']),
                'meta_title' => $category['title'],
                'meta_information' => $category['title'],
                'meta_keywords' => $category['title'],
            ]);

        }
    }
}
