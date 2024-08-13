<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Category;
use Modules\Setting\Entities\Unit;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Category::create([
            'category_code' => 'CA_01',
            'category_name' => 'Random'
        ]);

        Unit::create([
            'name' => 'Piece',
            'short_name' => 'PCS',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Kilogram',
            'short_name' => 'KG',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Gram',
            'short_name' => 'G',
            'operator' => '/',
            'operation_value' => 1000
        ]);
        
        Unit::create([
            'name' => 'Liter',
            'short_name' => 'L',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Milliliter',
            'short_name' => 'ML',
            'operator' => '/',
            'operation_value' => 1000
        ]);
        
        Unit::create([
            'name' => 'Box',
            'short_name' => 'BOX',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Packet',
            'short_name' => 'PKT',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Dozen',
            'short_name' => 'DZ',
            'operator' => '*',
            'operation_value' => 12
        ]);
        
        Unit::create([
            'name' => 'Meter',
            'short_name' => 'M',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
        Unit::create([
            'name' => 'Centimeter',
            'short_name' => 'CM',
            'operator' => '/',
            'operation_value' => 100
        ]);
        
        Unit::create([
            'name' => 'Inch',
            'short_name' => 'IN',
            'operator' => '/',
            'operation_value' => 39.37
        ]);
        
        Unit::create([
            'name' => 'Set',
            'short_name' => 'SET',
            'operator' => '*',
            'operation_value' => 1
        ]);
        
    }
}
