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
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id('nik');
            $table->string('nama');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('kewarganegaraan',['WNI','WNA']);
            $table->string('agama');
            $table->string('pekerjaan')->nullable();
            $table->string('alamat');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('data_penduduks');
    }
};
