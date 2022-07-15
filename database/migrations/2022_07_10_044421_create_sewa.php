<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sewa', function (Blueprint $table) {
            $table->id('sewa_id');
            $table->unsignedBigInteger('sewa_user');
            $table->unsignedBigInteger('sewa_produk');
            $table->string('sewa_pembayaran');
            $table->string('sewa_pengiriman');
            $table->date('sewa_mulai');
            $table->integer('sewa_lama');
            $table->integer('sewa_total');
        });

        Schema::table('tb_sewa', function (Blueprint $table) {
            $table->foreign('sewa_user')->references('user_id')->on('tb_users');
            $table->foreign('sewa_produk')->references('produk_id')->on('tb_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sewa');
    }
}
