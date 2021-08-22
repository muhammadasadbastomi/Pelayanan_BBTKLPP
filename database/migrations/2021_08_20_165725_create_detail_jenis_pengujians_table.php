<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailJenisPengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jenis_pengujians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_pengujian_id');
            $table->foreign('jenis_pengujian_id')->references('id')->on('jenis_pengujians')->onDelete('restrict');
            $table->string('nama');
            $table->string('kode')->nullable();
            $table->string('harga');
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
        Schema::dropIfExists('detail_jenis_pengujians');
    }
}
