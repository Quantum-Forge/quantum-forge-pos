<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'id' => 1,
            'customer_name' => 'Walking Customer',
            'customer_email' => 'customer@gmail.com',
            'customer_phone' => '08123456789',
            'city' => 'Makassar', // Sesuaikan dengan status aktif yang sesuai
            'country' => 'Indonesia',
            'address' => 'Lorem Ipsum Dolor Street',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
