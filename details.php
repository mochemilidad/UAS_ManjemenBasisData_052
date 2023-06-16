<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class details extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            [
                'OrderID' => '1',
                'ProductID' => 'New Balance',
                'UnitPrice' => '750000',
                'Quantity' => '5',
                'Discount' => '100000'
            ],
            [
                'OrderID' => '2',
                'ProductID' => 'Nike Blazer Mid',
                'UnitPrice' => '1300000',
                'Quantity' => '2',
                'Discount' => '0'
            ],
            [
                'OrderID' => '3',
                'ProductID' => 'Adidas Samba OG',
                'UnitPrice' => '900000',
                'Quantity' => '8',
                'Discount' => '50000'
            ],
            [
                'OrderID' => '4',
                'ProductID' => 'Compass',
                'UnitPrice' => '750000',
                'Quantity' => '3',
                'Discount' => '100000'
            ],
            [
                'OrderID' => '5',
                'ProductID' => 'Stone Island',
                'UnitPrice' => '4500000',
                'Quantity' => '1',
                'Discount' => '300000'
            ],
            [
                'OrderID' => '6',
                'ProductID' => 'The North Face Puffer',
                'UnitPrice' => '850000',
                'Quantity' => '2',
                'Discount' => '50000'
            ],
            [
                'OrderID' => '7',
                'ProductID' => 'Lacoste',
                'UnitPrice' => '1200000',
                'Quantity' => '4',
                'Discount' => '150000'
            ],
            [
                'OrderID' => '8',
                'ProductID' => 'Diadora N92',
                'UnitPrice' => '640000',
                'Quantity' => '3',
                'Discount' => '80000'
            ],
            [
                'OrderID' => '9',
                'ProductID' => 'Heiden Heritage',
                'UnitPrice' => '538000',
                'Quantity' => '10',
                'Discount' => '38000'
            ],
            [
                'OrderID' => '10',
                'ProductID' => 'Mancow Wallabee',
                'UnitPrice' => '650000',
                'Quantity' => '5',
                'Discount' => '350000'
            ]
            ]);
    }
}
