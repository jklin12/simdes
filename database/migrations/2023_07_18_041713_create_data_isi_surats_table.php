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
        Schema::create('data_isi_surats', function (Blueprint $table) {
            $table->id('id_isi_surat');
            $table->integer('id_surat');
            $table->integer('id_kolom_surat');
            $table->string('isi_kolom');
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
        Schema::dropIfExists('data_isi_surats');
    }
};
