<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker  = Faker::create();
        for($i = 0; $i < 50; $i++){
            DB::table('products')->insert([
                'title' => $faker-> text(10),
                'description' => $faker -> text(50),
                'img' => 'https://icdn.24h.com.vn/upload/2-2024/images/2024-06-29/s-1719628821-359-width740height493.jpg',
                'price' => rand(100,1000),
                'category_id' => rand(1,5),
            ]);
        }
    }
}
