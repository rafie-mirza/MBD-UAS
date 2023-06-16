<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'OrderID'   => '0001',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0002',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '98',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0003',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0004',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0005',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0006',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0007',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0008',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0009',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0010',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0011',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0012',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0013',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0014',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0015',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0016',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0017',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0018',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0019',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ],
            [
                'OrderID'   => '0020',
                'ProductID' => '0001',
                'UnitPrice' => '14.699.000',
                'Quantity'  => '99',
                'Discount'  => '25%'
            ]
        ]);
    }
}
