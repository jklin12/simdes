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
        Schema::create('ref_kolom_surats', function (Blueprint $table) {
            $table->id('id_kolom_surat');
            $table->integer('id_jenis_surat');
            $table->string('nama_kolom');
            $table->string('judul_kolom')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_kolom_surats');
    }
};
