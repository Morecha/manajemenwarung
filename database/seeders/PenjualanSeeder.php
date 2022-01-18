<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjualans')->insert([
            'id' => '',
            'id_barang' => '',
            'id_pelayan' => '',
            'id_pembayaran' => '',
            'satuan' => '',
            'harga_barang' => '',
            'jumlah_beli' => '',
            'total_harga' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
