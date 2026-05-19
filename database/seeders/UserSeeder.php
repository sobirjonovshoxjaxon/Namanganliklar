<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'Shoxjaxon',
            'email' => 'shoxjaxonsobirjonov77@gmail.com',
            'password' => Hash::make('87654321'),
            'image' => 'avatar.jpg',
            'usertype'=> 'admin',
        ]);


        User::factory()->count(10)->make();
    }

}
