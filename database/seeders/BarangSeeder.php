<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'id' => '1',
            'id_kategori' => '',
            'kode_barang' => '',
            'nama' => '',
            'satuan' => '',
            'kategori' => '',
            'stok' => '',
            'total_barang' => '',
            'harga_ecer' => '',
            'harga_grosir' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
