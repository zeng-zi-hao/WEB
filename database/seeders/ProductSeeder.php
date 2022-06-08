<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => '貓罐頭',
            'price' => 50,
            'description' => 'Can',
            'image' => 'can.jpg'
        ]);
        Product::create([
            'name' => '貓抓板',
            'price' => 120,
            'description' => 'cat scratching board',
            'image' => 'board.jpg'
        ]);
        Product::create([
            'name' => '逗貓棒',
            'price' => 80,
            'description' => 'funny cat stick',
            'image' => 'funny.jpg'
        ]);
        Product::create([
            'name' => '貓砂',
            'price' => 120,
            'description' => 'cat litter',
            'image' => 'sand.jpg'
        ]);
    }
}
