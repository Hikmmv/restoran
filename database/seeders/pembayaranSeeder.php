<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class pembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            'your_name' => 'ikan',
            'your_phone' => '09',
            'your_email' => 'karya@wan',
            'your_address' => 'jl.karyawan',
            'total' => '1',
            'content' => '1',
        ]);
    }
}