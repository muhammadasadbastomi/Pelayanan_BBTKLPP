<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailStpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_stps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stp_id');
            $table->foreign('stp_id')->references('id')->on('stps')->onDelete('restrict');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedBigInteger('detail_jenis_pengujian_id');
            $table->foreign('detail_jenis_pengujian_id')->references('id')->on('detail_jenis_pengujians')->onDelete('restrict');
            $table->string('no_sampel');
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
        Schema::dropIfExists('detail_stps');
    }
}
