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
            'img_path' => 'bedroom.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Sofas',
            'friendly_name' => 'sofas',
            'active' => 1,
            'img_path' => 'sofa.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Tables',
            'friendly_name' => 'tables',
            'active' => 1,
            'img_path' => 'table.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'name' => 'Chairs',
            'friendly_name' => 'chairs',
            'active' => 1,
            'img_path' => 'chair.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Couches',
            'friendly_name' => 'outdoor-couches',
            'active' => 1,
            'img_path' => 'outdoor-couches.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Tables',
            'friendly_name' => 'outdoor-tables',
            'active' => 0,
            'img_path' => 'outdoor-table.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 2,
            'name' => 'Outdoor Chairs',
            'friendly_name' => 'outdoor-chairs',
            'active' => 1,
            'img_path' => 'outdoor-chairs.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Laptop Bags',
            'friendly_name' => 'laptop-bags',
            'active' => 1,
            'img_path' => 'laptop-bag.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Side Bags',
            'friendly_name' => 'side-bags',
            'active' => 1,
            'img_path' => 'side-bag.jpg',
        ]);

        DB::table('sub_categories')->insert([
            'category_id' => 3,
            'name' => 'Belts',
            'friendly_name' => 'belts',
            'active' => 1,
            'img_path' => 'belts.jpg',
        ]);
    }
}
