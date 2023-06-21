<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('register')->insert([
            'your_name'=>'fulan',
            'your_email'=>'as@mail.com',
            'your_phone'=>'08',
            'date'=>'02',
            'time'=>'02',
            '_of_people'=>'02',
        ]);
    }
}