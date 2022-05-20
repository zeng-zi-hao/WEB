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
            'image' => 'https://t4.ftcdn.net/jpg/02/93/26/05/240_F_293260585_cVzgbls0dFlJqvpQn5YqcKl65vBWXl70.jpg'
        ]);
        Product::create([
            'name' => '貓抓板',
            'price' => 120,
            'description' => 'cat scratching board',
            'image' => 'https://t4.ftcdn.net/jpg/02/48/06/65/240_F_248066508_KprXic21frHGeKCfUCKICKR1dWpIVw2f.jpg'
        ]);
        Product::create([
            'name' => '逗貓棒',
            'price' => 80,
            'description' => 'funny cat stick',
            'image' => 'https://t4.ftcdn.net/jpg/01/96/13/99/240_F_196139968_xszgg73RJDIiXlL23Zu8H9IS6FDUb9pP.jpg'
        ]);
        Product::create([
            'name' => '貓砂',
            'price' => 120,
            'description' => 'cat litter',
            'image' => 'https://t3.ftcdn.net/jpg/00/76/44/10/240_F_76441042_mEfd6bpfkUhorGSN5CY2VOEeAbVYHOfu.jpg'
        ]);
    }
}
