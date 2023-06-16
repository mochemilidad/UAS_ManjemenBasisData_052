<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'CustomerID' => '01',
                'CompanyName' => 'IdadExpress',
                'ContactName' => 'IdadThePakboy',
                'ContactTitle' => 'Pakboy',
                'Address' => 'Karanggeneng',
                'City' => 'Lamongan',
                'Region' => 'Jawa Timur',
                'PostalCode' => 'V150',
            ],
            [
                'CustomerID' => '02',
                'CompanyName' => 'AlwanNgabers',
                'ContactName' => 'AlwanLabang',
                'ContactTitle' => 'Wawan',
                'Address' => 'Labang',
                'City' => 'Bangkalan',
                'Region' => 'Madura',
                'PostalCode' => 'V160',
            ],
            [
                'CustomerID' => '03',
                'CompanyName' => 'BengkelAlvin',
                'ContactName' => 'AlvinMenep',
                'ContactTitle' => 'AlvinSumenep',
                'Address' => 'Lobak',
                'City' => 'Sumenep',
                'Region' => 'Madura',
                'PostalCode' => 'S125',
            ],
            [
                'CustomerID' => '04',
                'CompanyName' => 'TeguhBucyn',
                'ContactName' => 'TeguhIsTeguh',
                'ContactTitle' => 'BucynPTT',
                'Address' => 'Lasem',
                'City' => 'Rembang',
                'Region' => 'Jawa Tengah',
                'PostalCode' => 'K110',
            ],
            [
                'CustomerID' => '05',
                'CompanyName' => 'AfinBaik',
                'ContactName' => 'AfinMalang',
                'ContactTitle' => 'Afin',
                'Address' => 'Singosari',
                'City' => 'Malang',
                'Region' => 'Jawa Timur',
                'PostalCode' => 'B115',
            ]
            ]);
    }
}
