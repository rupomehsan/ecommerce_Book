<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTag::truncate();
        ProductTag::create([
            'title'=>'literature',
            //  'parent'=>'',
            'url'=> Str::slug('literature'),
            'image'=>'',
            'slug' =>  Str::slug('literature'),
            'meta_title'=>'literature',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Novel',
            //  'parent'=>'',
            'url'=> Str::slug('Novel'),
            'image'=>'',
            'slug' =>  Str::slug('Novel'),
            'meta_title'=>'novel',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Fiction',
            //  'parent'=>'',
            'url'=> Str::slug('Fiction'),
            'image'=>'',
            'slug' => Str::slug('Fiction'),
            'meta_title'=>'fiction',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Science',
            //  'parent'=>'',
            'url'=>Str::slug('Science'),
            'image'=>'',
            'slug' => Str::slug('Science'),
            'meta_title'=>'science',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Politics',
            //  'parent'=>'',
            'url'=>Str::slug('Politics'),
            'image'=>'',
            'slug' => Str::slug('Politics'),
            'meta_title'=>'politics',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);
    }
}
