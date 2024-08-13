<?php

namespace Modules\People\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\People\Entities\Customer;
use Modules\People\Entities\Supplier;

class PeopleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert a specific customer
        Customer::create([
            'id' => 1,
            'customer_name' => 'Walking Customer',
            'customer_email' => 'customer@gmail.com',
            'customer_phone' => '08123456789',
            'city' => 'Makassar',
            'country' => 'Indonesia',
            'address' => 'Lorem Ipsum Dolor Street',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Generate random customers
        // Customer::factory()->count(15)->create();
        
        // Generate random suppliers
        // Supplier::factory()->count(6)->create();
    }
}

