<?php

namespace Database\Seeders\Product;

use App\Models\products\ProductSpecification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSpecification::truncate();
        ProductSpecification::create([
            'product_id' => '1',
            'key' => 'Language',
            'value' => 'বাংলা',

        ]);

        ProductSpecification::create([
            'product_id' => '2',
            'key' => 'Language',
            'value' => 'বাংলা',

        ]);ProductSpecification::create([
            'product_id' => '3',
            'key' => 'Language',
            'value' => 'বাংলা',

        ]);ProductSpecification::create([
            'product_id' => '4',
            'key' => 'Language',
            'value' => 'বাংলা',

        ]);ProductSpecification::create([
            'product_id' => '5',
            'key' => 'Language',
            'value' => 'বাংলা',

        ]);
      
    }
}
