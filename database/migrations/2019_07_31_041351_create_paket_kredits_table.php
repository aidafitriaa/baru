<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_paket');
            $table->string('harga_paket');
            $table->string('uang_muka');
            $table->integer('jumlah_cicilan');
            $table->integer('bunga');
            $table->integer('nilai_cicilan');
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
        Schema::dropIfExists('paket_kredits');
    }
}
