<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_jadwal');
            $table->foreign('id_jadwal')->references('id')->on('jadwals');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nama_pembeli');
            $table->string('alamat_pembeli');
            $table->string('email_pembeli');
            $table->string('no_telp_pembeli');
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
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
        //
    }
};
