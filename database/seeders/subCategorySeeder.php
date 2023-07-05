<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class subCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Bedroom',
            'friendly_name' => 'bedroom',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Sofas',
            'friendly_name' => 'sofas',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Tables',
            'friendly_name' => 'tables',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Chairs',
            'friendly_name' => 'chairs',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Couches',
            'friendly_name' => 'outdoor-couches',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Tables',
            'friendly_name' => 'outdoor-tables',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Chairs',
            'friendly_name' => 'outdoor-chairs',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Laptop Bags',
            'friendly_name' => 'laptop-bags',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Side Bags',
            'friendly_name' => 'side-bags',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Belts',
            'friendly_name' => 'belts',
            'active' => 1,
            'img_path' => 'chairs.jpg',
        ]);
    }
}
