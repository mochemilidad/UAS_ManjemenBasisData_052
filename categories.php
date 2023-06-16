<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
        [
            'CategoryID' => '001',
            'CategoryName' => 'Barang Bekas',
            'Description' => 'Bekas',
            'Picture' => 'picture1',
        ],
        [
            'CategoryID' => '002',
            'CategoryName' => 'Elektronik',
            'Description' => 'Listrik',
            'Picture' => 'picture2',
        ],
        [
            'CategoryID' => '003',
            'CategoryName' => 'Alat Masak',
            'Description' => 'Masak',
            'Picture' => 'picture3',
        ]
        ]);
    }
}
