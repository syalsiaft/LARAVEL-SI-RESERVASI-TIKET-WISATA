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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kota_asal');
            $table->foreign('kota_asal')->references('id')->on('kotas');
            $table->unsignedBigInteger('kota_tujuan');
            $table->foreign('kota_tujuan')->references('id')->on('kotas');
            $table->unsignedBigInteger('id_transportasi');
            $table->foreign('id_transportasi')->references('id')->on('transportasis');
            $table->dateTime('jam_berangkat');
            $table->dateTime('jam_sampai');
            $table->integer('harga');
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
