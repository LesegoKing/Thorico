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
            'img_path' => 'bed.png',
        ]);

        //Sofas

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa3.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa1.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 2, //sofas
            'name' => 'Contact For More Details',
            'desc' => 'Sofa two',
            'price' => 0.00,
            'img_path' => 'sofa2.png',
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
            'img_path' => 'table.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table1.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table2.png',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 3, //tables
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'table3.jpg',
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
            'img_path' => 'chair7.jpg',
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
            'img_path' => 'laptop1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 8, //laptop-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'lb1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 8, //laptop-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'laptop.jpg',
        ]);

        //Side-bags

        DB::table('products')->insert([
            'sub_category_id' => 9, //side-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side2.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 9, //side-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side3.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 9, //side-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side4.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 9, //side-bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side5.jpg',
        ]);


        //Purses & Wallets

        DB::table('products')->insert([
            'sub_category_id' => 10, //purses & wallets
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 10, //purses & wallets
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'side6.jpg',
        ]);

        //Travel Bags

        DB::table('products')->insert([
            'sub_category_id' => 11, //travel bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'tb1.jpg',
        ]);

        DB::table('products')->insert([
            'sub_category_id' => 11, //travel bags
            'name' => 'Contact For More Details',
            'desc' => 'Table two',
            'price' => 0.00,
            'img_path' => 'tb2.jpg',
        ]);

    }
}
