<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['title' => '牛仔褲', 'price' => 500, 'pic' => '1.jpg']);
        Item::create(['title' => '跑鞋', 'price' => 500, 'pic' => '2.jpg']);
        Item::create(['title' => '女用運動褲', 'price' => 500, 'pic' => '3.jpg']);
        Item::create(['title' => '男短褲', 'price' => 500, 'pic' => '4.jpg']);
        Item::create(['title' => '特色套裝', 'price' => 500, 'pic' => '5.jpg']);
        Item::create(['title' => '性感套裝', 'price' => 500, 'pic' => '6.jpg']);
        Item::create(['title' => '品牌包', 'price' => 500, 'pic' => '7.jpg']);
        Item::create(['title' => '太陽眼鏡', 'price' => 500, 'pic' => '8.jpg']);
        Item::create(['title' => '黑色上衣', 'price' => 500, 'pic' => '9.jpg']);

    }
}
