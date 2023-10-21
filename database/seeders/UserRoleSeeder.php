<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::truncate();
        UserRole::create([
            'title' => 'admin',
            'role_serial' => 1,
        ]);
        UserRole::create([
            'title' => 'user',
            'role_serial' => 2,
        ]);
    }
}
