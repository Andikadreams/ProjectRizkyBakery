<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'kode_kategori' => 'B02',
                'nama' => 'Kue Basah',
            ],
            [
                'kode_kategori' => 'K03',
                'nama' => 'Kue Kering',
            ],
            [
                'kode_kategori' => 'D04',
                'nama' => 'Donut',
            ],
            [
                'kode_kategori' => 'P05',
                'nama' => 'Pudding',
            ],
            [
                'kode_kategori' => 'P06',
                'nama' => 'Minuman',
            ],
        ];
        DB::table('kategori')->insert($kategori);
    }
}
