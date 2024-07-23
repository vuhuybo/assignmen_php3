<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cateID = DB::table('categories')->pluck('id')->toArray();

        $proSeed=[];

        for($i=0; $i<4; $i++){
            $proSeed[]=[
                'name_product'=>fake()->name(),
                'price'=>fake()->randomFloat(2, 10, 1000),
                'quantity'=>fake()->numberBetween(1, 100),
                'date_time'=>fake()->dateTimeBetween('-1 year', 'now'),
                'describe'=>fake()->sentence(),
                'image'=>fake()->imageUrl(640, 480, 'products', true, 'Faker'),
                'category_id'=>fake()->randomElement($cateID),
            ];
        }

        DB::table('products')->insert($proSeed);
    }
}
