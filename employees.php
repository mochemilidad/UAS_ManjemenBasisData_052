<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employees extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'EmployeeID' => '0001',
                'LastName' => 'Rofiqi',
                'FirstName' => 'Alwan',
                'Title' => 'HRD',
                'TitleOfCourtesy' => 'High Relative Department',
                'BirthDate' => '23 Januari 2003',
                'HireDate' => '23 Januari 2021',
                'Address' => 'Labang',
                'City' => 'Bangkalan',
                'Region' => 'Madura',
            ],
            [
                'EmployeeID' => '0002',
                'LastName' => 'Arifin',
                'FirstName' => 'Achmad',
                'Title' => 'Manager',
                'TitleOfCourtesy' => 'Head of Manager',
                'BirthDate' => '31 Maret 2003',
                'HireDate' => '31 Maret 2023',
                'Address' => 'Singosari',
                'City' => 'Malang',
                'Region' => 'Jawa Timur',
            ],
            [
                'EmployeeID' => '0003',
                'LastName' => 'Aldianto',
                'FirstName' => 'Teguh',
                'Title' => 'Pegawai',
                'TitleOfCourtesy' => 'Asisten',
                'BirthDate' => '11 Juni 1998',
                'HireDate' => '11 Juni 2019',
                'Address' => 'Labang',
                'City' => 'Rembang',
                'Region' => 'Jawa Tengah',
            ],
            [
                'EmployeeID' => '0004',
                'LastName' => 'Idad',
                'FirstName' => 'Emil',
                'Title' => 'Pegawai',
                'TitleOfCourtesy' => 'UI/UX Manager',
                'BirthDate' => '21 Juli 2001',
                'HireDate' => '21 Juli 2019',
                'Address' => 'Karanggeneng',
                'City' => 'Lamongan',
                'Region' => 'Jawa Timur',
            ],
            [
                'EmployeeID' => '0005',
                'LastName' => 'Wijaya',
                'FirstName' => 'Alvin',
                'Title' => 'Pegawai',
                'TitleOfCourtesy' => 'Data Engineer',
                'BirthDate' => '3 April 2003',
                'HireDate' => '3 April 2020',
                'Address' => 'Lobak',
                'City' => 'Sumenep',
                'Region' => 'Madura',
            ]
            ]);
    }
}
