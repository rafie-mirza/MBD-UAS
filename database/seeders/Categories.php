<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'CategoryID'    => '0001',
                'CategoryName'  => 'Elektronik',
                'Description'   => 'Ini Deskripsi Elektronik',
                'Picture'       => 'Ini Picture Sport'
            ],
            [
                'CategoryID'    => '0002',
                'CategoryName'  => 'Sport',
                'Description'   => 'Ini Deskripsi Sport',
                'Picture'       => 'Ini Picture Sport'
            ],
            [
                'CategoryID'    => '0003',
                'CategoryName'  => 'Food',
                'Description'   => 'Ini Deskripsi Food',
                'Picture'       => 'Ini Picture Food'
            ]
        ]);
    }
}
