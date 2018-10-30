<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kategori');
            $table->string('kode_produk');
            $table->string('kode_diskon')->nullable();
            $table->string('nama_produk');
            $table->string('harga');
            $table->string('stok');
            $table->string('rating');
            $table->string('favorite')->nullable();
            $table->string('ukuran');
            $table->string('deskripsi_produk');
            $table->binary('gambar');
            $table->binary('gambar_belakang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
