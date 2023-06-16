<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suppliers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'SupplierID' => '01',
                'CompanyName' => 'WidyaS',
                'ContactName' => 'Widya Sari',
                'ContactTitle' => 'Wibowo',
                'Address' => 'Sedati',
                'City' => 'Sidoarjo',
                'Region' => 'Jawa Timur',
                'PostalCode' => 'B125',
            ]
            ]);
    }
}
