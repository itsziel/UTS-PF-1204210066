<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                "kode_satuan" => "1",
                "nama_satuan" => "pcs",

            ],

            [
                "kode_satuan" => "2",
                "nama_satuan" => "buah",

            ],

            [
                "kode_satuan" => "3",
                "nama_satuan" => "pasang",

            ],


        ]);
    }
}
