<?php

namespace Database\Seeders\exta;

use App\Models\exta\EcomFeedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcomFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EcomFeedback::truncate();
        EcomFeedback::create([
            'full_name' => 'tarikul islam',
            'subject' => 'sitting problem',
            'message' => 'setting problem is a pain full problem',

        ]);

        EcomFeedback::create([
            'full_name' => 'sharif Ahamad',
            'subject' => 'banner problem',
            'message' => 'banner problem is a pain full problem',

        ]);
    }
}
