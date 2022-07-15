<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('user_role');
            $table->string('user_nama');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_tempat_lahir');
            $table->date('user_tgl_lahir');
            $table->text('user_alamat');
            $table->string('user_gender');
            $table->string('user_gambar')->nullable();
            $table->timestamps();
        });

        Schema::table('tb_users', function (Blueprint $table) {
            $table->foreign('user_role')->references('role_id')->on('tb_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}
