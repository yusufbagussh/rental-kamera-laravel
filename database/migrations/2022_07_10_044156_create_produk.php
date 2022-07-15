<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('produk_id');
            $table->unsignedBigInteger('produk_user');
            $table->unsignedBigInteger('produk_kategori');
            $table->string('produk_nama');
            $table->text('produk_keterangan');
            $table->integer('produk_harga');
            $table->text('produk_gambar');
            $table->string('produk_status');
            $table->timestamps();
        });

        Schema::table('tb_produk', function (Blueprint $table) {
            $table->foreign('produk_user')->references('user_id')->on('tb_users');
            $table->foreign('produk_kategori')->references('kategori_id')->on('tb_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_produk');
    }
}
