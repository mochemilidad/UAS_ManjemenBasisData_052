<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class shippers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippers')->insert([
            [
                'ShipperID' => '00001',
                'CompanyName' => 'IdadExpress',
                'Phone' => '086723451234',
            ]
        ]);
    }
}
