<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'full_name' => 'tarikul islam',
            'role_id'=> 1,
            'email' => 'tarikulmd519@gmail.com',
            'phone_number'=>'01713252133',
            'image' =>'',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'full_name' => 'sharif islam',
            'role_id'=> 2,
            'email' => 'sharifmd519@gmail.com',
            'phone_number'=>'01714252133',
            'image' =>'',
            'password' => Hash::make('12345678'),
        ]);
    }
}
