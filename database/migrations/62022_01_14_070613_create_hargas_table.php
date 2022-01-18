<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hargas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pembelian')->unsigned()->nullable();
            $table->bigInteger('id_barang')->unsigned()->nullable();
            $table->bigInteger('harga_ecer');
            $table->bigInteger('harga_grosir');
            $table->bigInteger('harga_jual');
            $table->bigInteger('active');
            $table->timestamps();


            // $table->foreign('id_kategori')->references('id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_pembelian')->references('id')->on('pembelians')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hargas');
    }
}
