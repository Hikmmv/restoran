<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            'username' => 'ikan@gmail.com',
            'password' => '09',
        ]);
        
        DB::table('register')->insert([
            'your_name' => Str::random(10),
            'username' => Str::random(10),
            'email' => Str::random(10).('@gmail.com'),
            'password' => Hash::make('password'),
        ]);

        DB::table('pembayaran')->insert([
            'your_name' => 'ikan',
            'your_phone' => '09',
            'your_email' => 'karya@wan',
            'your_address' => 'jl.karyawan',
            'total' => '1',
            'content' => '1',
        ]);
        

        DB::table('register')->insert([
            'your_name'=>'fulan',
            'your_email'=>'as@mail.com',
            'your_phone'=>'08',
            'date'=>'02',
            'time'=>'02',
            '_of_people'=>'02',
        ]);


        $this->call([
            loginSeeder::class,
        ]);
        $this->call([
            registerSeeder::class,
        ]);

        $this->call([
            pembayaranSeeder::class,
        ]);
        $this->call([
            pemesananSeeder::class
        ]);
    }
}
