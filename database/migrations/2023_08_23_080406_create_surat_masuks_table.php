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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id('id_surat');
            $table->string('nomor_surat')->nullable();
            $table->string('dari_surat')->nullable();
            $table->string('kepada_surat')->nullable();
            $table->string('judul_surat')->nullable();
            $table->text('file_surat')->nullable();
            $table->date('tgl_surat')->nullable();
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
        Schema::dropIfExists('surat_masuks');
    }
};
