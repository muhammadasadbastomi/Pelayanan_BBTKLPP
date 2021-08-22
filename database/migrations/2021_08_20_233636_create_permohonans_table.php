<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedBigInteger('jenis_pengujian_id');
            $table->foreign('jenis_pengujian_id')->references('id')->on('jenis_pengujians')->onDelete('restrict');
            $table->string('berat');
            $table->string('jumlah');
            $table->string('deskripsi');
            $table->string('bentuk');
            $table->string('wadah');
            $table->date('tanggal_jam_terima')->nullable();
            $table->date('tanggal_jam_sampling')->nullable();
            $table->string('sifat');
            $table->string('kemampuan_personel')->nullable();
            $table->string('status_kondisi')->nullable();
            $table->string('status_beban_kerja')->nullable();
            $table->string('status_kondisi_peralatan')->nullable()->nullable();
            $table->string('status_kesesuaian_metode')->nullable();
            $table->string('status_terima')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('permohonans');
    }
}
