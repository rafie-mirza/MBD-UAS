<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Suppliers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'SupplierID'    => '0001',
                'CompanyName'   => 'Alpha Vision',
                'ContactName'   => 'Donny',
                'ContactTitle'  => 'Owner',
                'Address'       => 'Bubutan Timur 2/41',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60173'
            ],
            [
                'SupplierID'    => '0002',
                'CompanyName'   => 'Alpha Vision',
                'ContactName'   => 'Teguh',
                'ContactTitle'  => 'CEO',
                'Address'       => 'Ketintang PLT 2/23',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60166'
            ],
            [
                'SupplierID'    => '0003',
                'CompanyName'   => 'Alpha Vision',
                'ContactName'   => 'Dika',
                'ContactTitle'  => 'Staff',
                'Address'       => 'Bubutan Timur 2/20',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60173'
            ],
            [
                'SupplierID'    => '0004',
                'CompanyName'   => 'Alpha Vision',
                'ContactName'   => 'Rahmad',
                'ContactTitle'  => 'Staff',
                'Address'       => 'Benowo 2/291',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60167'
            ],
            [
                'SupplierID'    => '0005',
                'CompanyName'   => 'Alpha Vision',
                'ContactName'   => 'Nur',
                'ContactTitle'  => 'Staff',
                'Address'       => 'Ketintang PLT 2/29',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60166'
            ]
        ]);
    }
}
