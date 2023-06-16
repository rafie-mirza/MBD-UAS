<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Categories::class);
        $this->call(Customers::class);
        $this->call(Employees::class);
        $this->call(Order_details::class);
        $this->call(Orders::class);
        $this->call(Products::class);
        $this->call(Shippers::class);
        $this->call(Suppliers::class);
    }
}
