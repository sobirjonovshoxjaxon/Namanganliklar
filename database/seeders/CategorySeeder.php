<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            ['category' => 'Uzbekistan'],
            ['category' => 'World'],
            ['category' => 'Politica'],
            ['category' => 'Tradition'],
            ['category' => 'Tecnology'],
            ['category' => 'Sport'],
            ['category' => 'Culture'],
            ['category' => 'Turizm'],

        ];

        foreach($categories as $category){

            Category::create($category);
        }
    }
}
