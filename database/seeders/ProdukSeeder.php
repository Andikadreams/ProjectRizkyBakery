<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = [
            [
                'kode_produk' => 'B0201',
                'nama_produk' => 'Pancake',
                'foto_produk' => 'Pancake.jpg',
                'harga' => 20000,
                'jumlah' => 20,
                'id_kategori' => '2',
            ],
            [
                'kode_produk' => 'B0202',
                'nama_produk' => 'Dadar Gulung',
                'foto_produk' => 'Dadar Gulung.jpg',
                'harga' => 10000,
                'jumlah' => 15,
                'id_kategori' => '2',
            ],
            [
                'kode_produk' => 'B0203',
                'nama_produk' => 'Nagasari',
                'foto_produk' => 'Nagasari.jpg',
                'harga' => 8000,
                'jumlah' => 30,
                'id_kategori' => '2',
            ],
            [
                'kode_produk' => 'B0204',
                'nama_produk' => 'Mochi',
                'foto_produk' => 'Mochi.jpg',
                'harga' => 10000,
                'jumlah' => 50,
                'id_kategori' => '2',
            ],
            [
                'kode_produk' => 'K0301',
                'nama_produk' => 'Croissant',
                'foto_produk' => 'Croissant.jpg',
                'harga' => 20000,
                'jumlah' => 15,
                'id_kategori' => '3',
            ],
            [
                'kode_produk' => 'K0302',
                'nama_produk' => 'Nastar',
                'foto_produk' => 'Nastar.jpg',
                'harga' => 50000,
                'jumlah' => 20,
                'id_kategori' => '3',
            ],
            [
                'kode_produk' => 'K0303',
                'nama_produk' => 'Putri Salju',
                'foto_produk' => 'Putri Salju.jpg',
                'harga' => 50000,
                'jumlah' => 10,
                'id_kategori' => '3',
            ],
            [
                'kode_produk' => 'K0304',
                'nama_produk' => 'Macaron',
                'foto_produk' => 'Macaron.jpg',
                'harga' => 45000,
                'jumlah' => 20,
                'id_kategori' => '3',
            ],
            [
                'kode_produk' => 'D0401',
                'nama_produk' => 'Churros',
                'foto_produk' => 'Churros.jpg',
                'harga' => 25000,
                'jumlah' => 35,
                'id_kategori' => '4',
            ],
            [
                'kode_produk' => 'D0402',
                'nama_produk' => 'BeaverTail',
                'foto_produk' => 'BeaverTail.jpg',
                'harga' => 40000,
                'jumlah' => 20,
                'id_kategori' => '4',
            ],
            [
                'kode_produk' => 'D0403',
                'nama_produk' => 'Pets de nonnes',
                'foto_produk' => 'Pets de nonnes.jpg',
                'harga' => 35000,
                'jumlah' => 10,
                'id_kategori' => '4',
            ],
            [
                'kode_produk' => 'D0404',
                'nama_produk' => 'Berliner Pfannkuchen',
                'foto_produk' => 'Berliner Pfannkuchen.jpg',
                'harga' => 40000,
                'jumlah' => 20,
                'id_kategori' => '4',
            ],
            [
                'kode_produk' => 'P0501',
                'nama_produk' => 'Panna Cotta',
                'foto_produk' => 'Panna Cotta.jpg',
                'harga' => 50000,
                'jumlah' => 20,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'P0502',
                'nama_produk' => 'Sticky Toffee Pudding',
                'foto_produk' => 'Sticky Toffee Pudding.jpg',
                'harga' => 45000,
                'jumlah' => 20,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'P0503',
                'nama_produk' => 'Rožata',
                'foto_produk' => 'Rožata.jpg',
                'harga' => 30000,
                'jumlah' => 5,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'P0504',
                'nama_produk' => 'Rote Gruetze',
                'foto_produk' => 'Rote Gruetze.jpg',
                'harga' => 40000,
                'jumlah' => 20,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'M0601',
                'nama_produk' => 'Smoothies',
                'foto_produk' => 'Smoothies.jpg',
                'harga' => 30000,
                'jumlah' => 15,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'M0602',
                'nama_produk' => 'Soda',
                'foto_produk' => 'Soda.jpg',
                'harga' => 15000,
                'jumlah' => 20,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'M0603',
                'nama_produk' => 'Juice',
                'foto_produk' => 'Juice.jpg',
                'harga' => 15000,
                'jumlah' => 10,
                'id_kategori' => '5',
            ],
            [
                'kode_produk' => 'M0604',
                'nama_produk' => 'Milkshake',
                'foto_produk' => 'Milkshake.jpg',
                'harga' => 30000,
                'jumlah' => 20,
                'id_kategori' => '5',
            ],
        ];

        DB::table('produk')->insert($produk);
    }
}
