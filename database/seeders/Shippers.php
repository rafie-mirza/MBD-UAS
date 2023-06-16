<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shippers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shippers')->insert([
            [
                'ShipperID'     => '0001',
                'CompanyName'   => 'Gudang Garam',
                'Phone'         => '085279811012'
            ],
            [
                'ShipperID'     => '0002',
                'CompanyName'   => 'Alpha Vision',
                'Phone'         => '085273181988'
            ]
        ]);
    }
}
