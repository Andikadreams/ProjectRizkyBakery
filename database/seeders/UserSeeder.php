<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Alfi Surya Pratama',
                'email' => 'alfisuryap7@gmail.com',
                'password' => Hash::make('password'),
                'level' => 'pelanggan',
            ],
            [
                'name' => 'Surya Tama',
                'email' => 'alfi.spratama7@yahoo.com',
                'password' => Hash::make('password'),
                'level' => 'admin',
            ],
            [
                'name' => 'Yaya',
                'email' => '2141720075@student.polinema.ac.id',
                'password' => Hash::make('password'),
                'level' => 'owner',
            ],

        ];

        DB::table('users')->insert($users);
    }
}
