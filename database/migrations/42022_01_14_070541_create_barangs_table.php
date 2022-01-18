<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned()->nullable();
            $table->bigInteger('kode_barang')->unique();
            $table->string('nama');
            $table->string('satuan');
            $table->string('kategori');
            $table->bigInteger('stok');
            $table->bigInteger('total_barang');
            $table->bigInteger('harga_ecer');
            $table->bigInteger('harga_grosir');
            $table->timestamps();

            // $table->foreign('id_kategori')->references('id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
