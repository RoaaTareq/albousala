<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email'=>'zaid@gmail.com'],
            [
                'name'=>'Zaid ',
                'password'=>Hash::make('123456*zaid'),
                'is_admin'=>true,


            ]
            );
       
    }
}
