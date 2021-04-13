<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fake data entry karne ke liye DB class ko upar USE zaroor kare
        //password ko encode karne ke liye upar HASH class ka USE zaroor kares
        DB::table('users')->insert([
            'name' => 'sam parker',
            'email' => 'sam@parker.com',
            'password' => Hash::make('12345')
        ]);
    }
}
