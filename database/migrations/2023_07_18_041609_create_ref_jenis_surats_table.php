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
        Schema::create('ref_jenis_surats', function (Blueprint $table) {
            $table->id('id_jenis_surat');
            $table->string('nama_jenis');
            $table->string('kode_surat')->nullable();
            $table->string('keterangan_surat');
            //$table->enum('ref_data_penduduk')->nullable();
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
        Schema::dropIfExists('ref_jenis_surats');
    }
};
