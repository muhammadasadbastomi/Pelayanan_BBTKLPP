<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_stp_id');
            $table->foreign('detail_stp_id')->references('id')->on('detail_stps')->onDelete('restrict');
            $table->string('hasil1');
            $table->string('hasil2')->nullable();
            $table->string('hasil3')->nullable();
            $table->string('hasil4')->nullable();
            $table->string('hasil5')->nullable();
            $table->date('tanggal_uji');
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
        Schema::dropIfExists('lhuses');
    }
}
