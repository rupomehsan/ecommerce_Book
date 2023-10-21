<?php

namespace Database\Seeders\exta;

use App\Models\exta\EcomBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcomBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EcomBanner::truncate();
        EcomBanner::create([
            'title' => '1',
            'redirect_url' => '1',
            'image' => 'bekash',

        ]);
    }
}
