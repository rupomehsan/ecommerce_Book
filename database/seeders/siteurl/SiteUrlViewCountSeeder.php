<?php

namespace Database\Seeders\siteurl;

use App\Models\siturl\SiteUrlViewCount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteUrlViewCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteUrlViewCount::truncate();
        // SiteUrlViewCount::create([
        //     'sit_url_id' => '',
        //     'ip_address' => '',
        //     'device' => '',
        //     'location' => '',

        // ]);
    }
}
