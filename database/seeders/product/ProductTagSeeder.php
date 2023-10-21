<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'url'=>'https://www.rokomari.com/book?ref=nm',
            'image'=>'',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title'=>'literature',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Novel',
            //  'parent'=>'',
            'url'=>'https://www.rokomari.com/book?ref=nm',
            'image'=>'',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title'=>'novel',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Fiction',
            //  'parent'=>'',
            'url'=>'https://www.rokomari.com/book?ref=nm',
            'image'=>'',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title'=>'fiction',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Science',
            //  'parent'=>'',
            'url'=>'https://www.rokomari.com/book?ref=nm',
            'image'=>'',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title'=>'science',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'Politics',
            //  'parent'=>'',
            'url'=>'https://www.rokomari.com/book?ref=nm',
            'image'=>'',
            'slug' => 'https://www.rokomari.com/book?ref=nm',
            'meta_title'=>'politics',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);
    }
}
