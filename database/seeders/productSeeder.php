<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class productSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bedroom

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Contact For More Details',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'bed 2.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Contact For More Details',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'bed 4.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Contact For More Details',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'bed 5.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Contact For More Details',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'bed 3.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 1, //bedroom
            'name' => 'Contact For More Details',
            'desc' => 'King bed',
            'price' => 0.00,
            'img_path' => 'bed 1.png',
        ]);

        //Sofas

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'couch 5.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'couch 4.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 5.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 7.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 8.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 4.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa 3.jpg',
        ]);

        //Tables

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table 1.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table 2.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table 5.jpg',
        ]);

        //Chairs

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 1.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 2.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 3.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 5.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 6.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'chair 4.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table & chair 1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 4, //chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table & chair 2.jpg',
        ]);

        //Outdoor-couches

        DB::table('products')->insert([
            'sub_category_id' => 5, //outdoor-couches
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 5, //outdoor-couches
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 5, //outdoor-couches
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        //Outdoor-tables

        DB::table('products')->insert([
            'sub_category_id' => 6, //outdoor-tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        //Outdoor-chairs

        DB::table('products')->insert([
            'sub_category_id' => 7, //outdoor-chairs
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        //Laptop-bags

        DB::table('products')->insert([
            'sub_category_id' => 8, //laptop-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'laptopbag.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 8, //laptop-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 8, //laptop-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        //Side-bags

        DB::table('products')->insert([
            'sub_category_id' => 9, //side-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'sidebag.png',
        ]);

        //Purses & Wallets

        DB::table('products')->insert([
            'sub_category_id' => 10, //purses & wallets
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

        //Travel Bags

        DB::table('products')->insert([
            'sub_category_id' => 11, //travel bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => '',
        ]);

    }
}
