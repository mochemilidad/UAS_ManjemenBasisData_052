<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'OrderID' => '1',
                'CustomerID' => '01',
                'EmployeeID' => '0001',
                'OrderDate' => '15 April 2023',
                'RequiredDate' => '16 April 2023',
                'ShippedDate' => '18 April 2023',
                'ShipVia' => 'Land',
                'Freight' => 'Cargo Pickup',
                'ShipName' => 'Patras',
                'ShipAddress' => 'Tanggerang',
                'ShipCity' => 'Jakarta',
                'ShipRegion' => 'DKI Jakarta',
                'ShipPostalCode' => 'B005',
                'ShipCountry' => 'Indonesia',
            ]
        ]);
    }
}
