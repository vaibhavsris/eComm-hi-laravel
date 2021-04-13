<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //manually data entry in the database from here
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '12000',
                'description' => 'a smartphone with 8GB RAM',
                'category' => 'mobile',
                'gallery' => 'https://cdn1.smartprix.com/rx-iKDqwE5n7-w1200-h1200/oppo-k5-8gb-ram-256g.jpg',
                // 'password' => Hash::make('12345')
            ],
            [
                'name' => 'Samsung TV',
                'price' => '30000',
                'description' => 'a smart TV with 4GB RAM',
                'category' => 'tv',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/51NKhnjhpGL._AC_SL1024_.jpg',
                // 'password' => Hash::make('12345')
            ],
            [
                'name' => 'Sony Bravia TV',
                'price' => '40000',
                'description' => 'a smart Sony TV with 4K',
                'category' => 'tv',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/91pBoYjYgSL._SL1500_.jpg',
                // 'password' => Hash::make('12345')
            ],
            [
                'name' => 'LG Fridge',
                'price' => '50000',
                'description' => 'a smart fridge with Ultra Cooling and 6th Sense',
                'category' => 'fridge',
                'gallery' => 'https://5.imimg.com/data5/MI/IE/MY-31194682/lg-single-door-refrigerator-188-ltr-500x500.png',
                // 'password' => Hash::make('12345')
            ]
        ]);
    }
}
