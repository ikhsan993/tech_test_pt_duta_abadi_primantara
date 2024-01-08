<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBarang extends Migration
{
    public function up()
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang', 50);
            $table->integer('harga_barang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_barang');
    }
}

