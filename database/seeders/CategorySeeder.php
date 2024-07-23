<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $cateSeed=[];

        for($i=0; $i<4; $i++){
            $cateSeed[]=[
                'name'=>fake()->name(),
            ];
        }

        DB::table('categories')->insert($cateSeed);
    }
}
