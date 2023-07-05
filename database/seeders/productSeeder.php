<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'King bed',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Queen bed',
            'desc' => 'Queen bed',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Sofa one',
            'desc' => 'Sofa one',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Sofa two',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Table one',
            'desc' => 'Table one',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Table two',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Table two',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Chair one',
            'desc' => 'Chair one',
            'price' => 0.00,
            'img_path' => 'couch1.jpg',
        ]);
    }
}
