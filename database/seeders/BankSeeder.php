<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = [
            [
                'nasabah' => 'Rizky Bakery',
                'nama_bank' => 'BCA',
                'no_rekening' => '3457680091'
            ],
            [
                'nasabah' => 'Rizky Bakery',
                'nama_bank' => 'Mandiri',
                'no_rekening' => '6659763563'
            ],
            [
                'nasabah' => 'Rizky Bakery',
                'nama_bank' => 'BNI',
                'no_rekening' => '9377651233'
            ],
            [
                'nasabah' => 'Rizky Bakery',
                'nama_bank' => 'BRI',
                'no_rekening' => '3220075467'
            ],
        ];
        DB::table('bank')->insert($bank);
    }
}
