<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'ProductID'         => '0001',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '0002',
                'categoryID'        => '0002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0002',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0003',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0004',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0005',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0006',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0007',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0008',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0009',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
            [
                'ProductID'         => '0010',
                'ProductName'       => 'Sukoco',
                'SupplierID'        => '002',
                'categoryID'        => '002',
                'QuantityPerUnit'   => '3',
                'UnitPrice'         => '45.000',
                'UnitInStock'       => '100',
                'UnitOnOrder'       => '46',
                'ReorderLevel'      => '3',
                'Discontinued'      => 'i',
            ],
        ]);
    }
}
