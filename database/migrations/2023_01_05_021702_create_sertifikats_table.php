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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_sertifikat')->nullable();
            $table->string('nama_peserta')->nullable();
            $table->string('nomor_sertifikat')->unique()->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->string('tempat_kegiatan')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('tipe_kegiatan')->nullable();
            $table->string('status')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('sertifikat');
    }
};
