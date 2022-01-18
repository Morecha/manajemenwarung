<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_barang')->unsigned()->nullable();
            $table->bigInteger('id_pelayan')->unsigned()->nullable();
            $table->bigInteger('id_pembayaran')->unsigned()->nullable();
            $table->string('satuan');
            $table->bigInteger('harga_barang');
            $table->bigInteger('jumlah_beli');
            $table->bigInteger('total_harga');
            $table->timestamps();

            // $table->foreign('id_pelayan')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_barang')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_pembayaran')->references('id')->on('pembayarans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
