<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'OrderID'       => '0001',
                'CustomerID'    => '0001',
                'EmployeeID'    => '0001',
                'OrderDate'     => '2023-05-23',
                'RequiredDate'  => '2023-05-27',
                'ShippedDate'   => '2023-05-25',
                'ShipVia'       => 'Mataram',
                'Freight'       => 'PickUP',
                'ShipName'      => 'QueenMarie Revenge',
                'ShipAddress'   => 'Perak Barat 8/245',
                'ShipCity'      => 'Surabaya',
                'ShipRegion'    => 'Jawa Timur',
                'ShipPostalCode'=> '60190',
                'ShipCountry'   => 'Indonesia'
            ],
            [
                'OrderID'       => '0002',
                'CustomerID'    => '0002',
                'EmployeeID'    => '0002',
                'OrderDate'     => '2023-05-23',
                'RequiredDate'  => '2023-05-27',
                'ShippedDate'   => '2023-05-25',
                'ShipVia'       => 'Mataram',
                'Freight'       => 'PickUP',
                'ShipName'      => 'QueenMarie Revenge',
                'ShipAddress'   => 'Perak Barat 8/245',
                'ShipCity'      => 'Surabaya',
                'ShipRegion'    => 'Jawa Timur',
                'ShipPostalCode'=> '60190',
                'ShipCountry'   => 'Indonesia'
            ],
            [
                'OrderID'       => '0003',
                'CustomerID'    => '0003',
                'EmployeeID'    => '0003',
                'OrderDate'     => '2023-05-23',
                'RequiredDate'  => '2023-05-27',
                'ShippedDate'   => '2023-05-25',
                'ShipVia'       => 'Mataram',
                'Freight'       => 'PickUP',
                'ShipName'      => 'QueenMarie Revenge',
                'ShipAddress'   => 'Perak Barat 8/245',
                'ShipCity'      => 'Surabaya',
                'ShipRegion'    => 'Jawa Timur',
                'ShipPostalCode'=> '60190',
                'ShipCountry'   => 'Indonesia'
            ],
            [
                'OrderID'       => '0004',
                'CustomerID'    => '0004',
                'EmployeeID'    => '0004',
                'OrderDate'     => '2023-05-23',
                'RequiredDate'  => '2023-05-27',
                'ShippedDate'   => '2023-05-25',
                'ShipVia'       => 'Mataram',
                'Freight'       => 'PickUP',
                'ShipName'      => 'QueenMarie Revenge',
                'ShipAddress'   => 'Perak Barat 8/245',
                'ShipCity'      => 'Surabaya',
                'ShipRegion'    => 'Jawa Timur',
                'ShipPostalCode'=> '60190',
                'ShipCountry'   => 'Indonesia'
            ],
            [
                'OrderID'       => '0005',
                'CustomerID'    => '0005',
                'EmployeeID'    => '0005',
                'OrderDate'     => '2023-05-23',
                'RequiredDate'  => '2023-05-27',
                'ShippedDate'   => '2023-05-25',
                'ShipVia'       => 'Mataram',
                'Freight'       => 'PickUP',
                'ShipName'      => 'QueenMarie Revenge',
                'ShipAddress'   => 'Perak Barat 8/245',
                'ShipCity'      => 'Surabaya',
                'ShipRegion'    => 'Jawa Timur',
                'ShipPostalCode'=> '60190',
                'ShipCountry'   => 'Indonesia'
            ]
        ]);
    }
}
