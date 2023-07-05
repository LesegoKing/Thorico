<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Indoor Furniture',
            'active' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Outdoor Furniture',
            'active' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Leather Accessories',
            'active' => 1,
        ]);
    }
}
