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
            'title'=>'toliterature',
            //  'parent'=>'',
            'url'=> Str::slug('toliterature'),
            'image'=>'',
            'slug' =>  Str::slug('toliterature'),
            'meta_title'=>'literature',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'toNovel',
            //  'parent'=>'',
            'url'=> Str::slug('toNovel'),
            'image'=>'',
            'slug' =>  Str::slug('toNovel'),
            'meta_title'=>'novel',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'toFiction',
            //  'parent'=>'',
            'url'=> Str::slug('toFiction'),
            'image'=>'',
            'slug' => Str::slug('toFiction'),
            'meta_title'=>'fiction',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'toScience',
            //  'parent'=>'',
            'url'=>Str::slug('toScience'),
            'image'=>'',
            'slug' => Str::slug('toScience'),
            'meta_title'=>'science',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);

        ProductTag::create([
            'title'=>'toPolitics',
            //  'parent'=>'',
            'url'=>Str::slug('toPolitics'),
            'image'=>'',
            'slug' => Str::slug('toPolitics'),
            'meta_title'=>'politics',
            'meta_information'=>'',
            'meta_keywords'=>''
        ]);
    }
}
