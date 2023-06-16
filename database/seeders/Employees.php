<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'EmployeeID'        => '0001',
                'LastName'          => 'Messi',
                'FirstName'         => 'Lionel',
                'Title'             => 'HRD',
                'TitleOfCourtesy'   => 'HRD',
                'BirthDate'         => '1983-02-10',
                'HireDate'          => '2010-06-05',
                'Address'           => 'Ketintang Barat 2/112',
                'City'              => 'Surabaya',
                'Region'            => 'Indonesia'
            ],
            [
                'EmployeeID'        => '0002',
                'LastName'          => 'Messi',
                'FirstName'         => 'Lionel',
                'Title'             => 'HRD',
                'TitleOfCourtesy'   => 'HRD',
                'BirthDate'         => '1983-02-10',
                'HireDate'          => '2010-06-05',
                'Address'           => 'Ketintang Barat 2/112',
                'City'              => 'Surabaya',
                'Region'            => 'Indonesia'
            ],
            [
                'EmployeeID'        => '0003',
                'LastName'          => 'Messi',
                'FirstName'         => 'Lionel',
                'Title'             => 'HRD',
                'TitleOfCourtesy'   => 'HRD',
                'BirthDate'         => '1983-02-10',
                'HireDate'          => '2010-06-05',
                'Address'           => 'Ketintang Barat 2/112',
                'City'              => 'Surabaya',
                'Region'            => 'Indonesia'
            ],
            [
                'EmployeeID'        => '0004',
                'LastName'          => 'Messi',
                'FirstName'         => 'Lionel',
                'Title'             => 'HRD',
                'TitleOfCourtesy'   => 'HRD',
                'BirthDate'         => '1983-02-10',
                'HireDate'          => '2010-06-05',
                'Address'           => 'Ketintang Barat 2/112',
                'City'              => 'Surabaya',
                'Region'            => 'Indonesia'
            ],
            [
                'EmployeeID'        => '0005',
                'LastName'          => 'Messi',
                'FirstName'         => 'Lionel',
                'Title'             => 'HRD',
                'TitleOfCourtesy'   => 'HRD',
                'BirthDate'         => '1983-02-10',
                'HireDate'          => '2010-06-05',
                'Address'           => 'Ketintang Barat 2/112',
                'City'              => 'Surabaya',
                'Region'            => 'Indonesia'
            ],
        ]);
    }
}
