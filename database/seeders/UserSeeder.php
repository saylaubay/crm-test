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
        User::create([
            'first_name'=>'Bill',
            'last_name'=>'Gates',
            'phone'=>'+998971234567',
            'role_id'=>1,
            'password'=>Hash::make("123")//password = 123
        ]);
    }
}
