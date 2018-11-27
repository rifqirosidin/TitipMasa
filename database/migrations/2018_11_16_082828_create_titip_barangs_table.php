<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitipBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titip_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('TripInternational_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('gambar_barang');
            $table->string('nama_barang');
            $table->string('berat_barang');
            $table->integer('jumlah')->default(1);
            $table->integer('harga');
            $table->integer('pajak');            
            $table->text('deskripsi_barang');

            $table->foreign('TripInternational_id')->references('id')->on('trip_internationals');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('titip_barangs');
    }
}
