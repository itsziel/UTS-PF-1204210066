<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                "kode_barang" => "1",
                "nama_barang" => "Mouse",
                "harga_barang" => "200000",
                "deskripsi_barang" => "Elektronik",
                "satuan_id" => 1,

            ],

            [
                "kode_barang" => "2",
                "nama_barang" => "Keyboard",
                "harga_barang" => "300000",
                "deskripsi_barang" => "Elektronik",
                "satuan_id" => 2,
            ],

            [
                "kode_barang" => "3",
                "nama_barang" => "Headset",
                "harga_barang" => "350000",
                "deskripsi_barang" => "Elektronik",
                "satuan_id" => 3,

            ],
            ]);
    }
}
