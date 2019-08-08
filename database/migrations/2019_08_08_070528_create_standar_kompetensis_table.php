<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_kompetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SK_kode')->unique();
            $table->unsignedBigInteger('kompetensi_id');
            $table->string('SK_nama');
            $table->text('SK_kelas');
            $table->foreign('kompetensi_id')->references('id')->on('kompetensi_keahlians');
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
        Schema::dropIfExists('standar_kompetensis');
    }
}
