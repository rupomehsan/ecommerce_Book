<?php

namespace Database\Seeders\product;

use App\Models\products\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategoryCopySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            ProductCategory::truncate();
    
            $cats = [
                [
                    "title" => "book",
                    "child" => [
                        [
    
                            "title" => "Golpo Somorgo-1",
                        ],
                        [
                            "title" => "Golpo somorgo-3",
                        ],
                        [
                            "title" => "KK Kye Ring",
                            // "child" =>
                            // [
                            //     [
                            //         "title" => "Update Key Ring",
                            //     ]
    
                            // ]
                        ],
                        [
                            "title" => "কলম কি ক",
                        ],
                        [
                            "title" => "কলমদানি",
                        ],
                        [
                            "title" => "কি ক পত্রিকা",
                        ],
                        [
                            "title" => "কিশোরকণ্ঠ কলম-2",
                        ],
                        [
                            "title" => "কিশোরকণ্ঠ ঘড়ি",
                        ],
                        [
                            "title" => "কিশোরকন্ঠ নোটবুক",
                        ],
                        [
                            "title" => "ক্যালেন্ডার",
                        ],
                        [
                            "title" => "মগ কি ক",
                        ],
                    ],
                ],
    
                [
    
                    "title" => "Key Ring",
                    "child" => [
                        [
    
                            "title" => "KK",
                        ],
                        [
                            "title" => "KP",
                            // "child" => [
                            //     [
                            //         "title" => "Update Resize",
                            //     ]
                            // ]
                        ],
    
                    ],
                ],
    
                [
                    "title" => "কলম কি ক",
                ],
    
                [
                    "title" => "কলমদানি",
                ],
    
                [
                    "title" => "কিশোর পাতা ঘড়ি",
                ],
    
                [
                    "title" => "কিশোরকণ্ঠ কলম",
                ],
                [
                    "title" => "কিশোরকণ্ঠ ঘড়ি",
                ],
    
                [
                    "title" => "কিশোরপাতা কলম",
                ],
                [
                    "title" => "কিশোরপাতা নোটবুক",
                ],
    
                [
                    "title" => "কিশোরপাতা মগ",
                ],
                [
                    "title" => "মগ কি ক",
                ],
    
            ];
    
    
            foreach ($cats as  $cart) {
    
                $category = ProductCategory::create([
                    'parent' => 0,
                    'title' => $cart['title'],
                    'url' => Str::slug($cart['title']),
                    'image' => '',
                    'slug' => Str::slug($cart['title']),
                    'meta_title' => $cart['title'],
                    'meta_information' => $cart['title'],
                    'meta_keywords' => $cart['title'],
                ]);
    
                if (isset($cart['child'])) {
    
                    foreach ($cart['child'] as $child) {
                        $subCategory = ProductCategory::create([
                            'parent' => $category->id,
                            'title' => $child['title'],
                            'url' => Str::slug($child['title']),
                            'image' => '',
                            'slug' => Str::slug($child['title']),
                            'meta_title' => $child['title'],
                            'meta_information' => $child['title'],
                            'meta_keywords' => $child['title'],
                        ]);
    
                        // if (isset($child['child'])) {
    
                        //     foreach ($child['child'] as $subChild) {
                        //         $subSubCategory = ProductCategory::create([
                        //             'parent' => $subCategory->id,
                        //             'title' => $subChild['title'],
                        //             'url' => Str::slug($subChild['title']),
                        //             'image' => '',
                        //             'slug' => Str::slug($subChild['title']),
                        //             'meta_title' => $subChild['title'],
                        //             'meta_information' => $subChild['title'],
                        //             'meta_keywords' => $subChild['title'],
                        //         ]);
                        //     }
                        // }
                    }
                }
            }
        
    }
}
