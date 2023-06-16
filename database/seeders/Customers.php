<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'CustomerID'    => '0001',
                'CompanyName'   => 'Gudang Garam',
                'ContactName'   => 'Abdi',
                'ContactTitle'  => 'CEO',
                'Address'       => 'Ketintang Barat 2/112',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60127'
            ],
            [
                'CustomerID'    => '0002',
                'CompanyName'   => 'Gudang Garam',
                'ContactName'   => 'Shindy',
                'ContactTitle'  => 'Staff Ahli',
                'Address'       => 'Ketintang Timur 2/2',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60126'
            ],
            [
                'CustomerID'    => '0003',
                'CompanyName'   => 'Gudang Garam',
                'ContactName'   => 'Abdi',
                'ContactTitle'  => 'CEO',
                'Address'       => 'Ketintang Barat 2/112',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60127'
            ],
            [
                'CustomerID'    => '0004',
                'CompanyName'   => 'Gudang Garam',
                'ContactName'   => 'Abdi',
                'ContactTitle'  => 'CEO',
                'Address'       => 'Ketintang Barat 2/112',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60127'
            ],
            [
                'CustomerID'    => '0005',
                'CompanyName'   => 'Gudang Garam',
                'ContactName'   => 'Abdi',
                'ContactTitle'  => 'CEO',
                'Address'       => 'Ketintang Barat 2/112',
                'City'          => 'Surabaya',
                'Region'        => 'Indonesia',
                'PostalCode'    => '60127'
            ]
        ]);
    }
}
