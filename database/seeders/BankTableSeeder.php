<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'name' => 'Barry',
            'password' => '12345',
            'number' => '20210324',
            'money' => '75000'
        ]);
        Bank::create([
            'name' => 'Apple',
            'password' => '11111',
            'number' => '20210002',
            'money' => '55000'
        ]);
        Bank::create([
            'name' => 'Nick',
            'password' => '11111',
            'number' => '20210003',
            'money' => '65000'
        ]);
        Bank::create([
            'name' => 'Sam',
            'password' => '11111',
            'number' => '20210004',
            'money' => '80000'
        ]);
    }
}
