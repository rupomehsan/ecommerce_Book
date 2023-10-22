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
            'title' => 'web design and devlopment',
            'redirect_url' => '',
            'image' => 'assets/backend/banner/01.jpg',

        ]);

        EcomBanner::create([
            'title' => 'Search Engine Optimization',
            'redirect_url' => '',
            'image' => 'assets/backend/banner/02.jpg',
        ]);

        EcomBanner::create([
            'title' => 'Graphic Design',
            'redirect_url' => '',
            'image' => 'assets/backend/banner/03.jpg',

        ]);
    }
}
