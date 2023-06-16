<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'ProductID' => 'New Balance',
                'ProductName' => 'New Balance',
                'SupplierID' => '01',
                'CategoryID' => '01',
                'QuantityPerUnit' => '1',
                'UnitPrice' => '750000',
                'UnitsInStock' => '5',
                'UnitsOnOrder' => '1',
                'ReorderLevel' => '1',
                'Discontinued' => 'No',
            ]
            ]);
    }
}
