<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_register')->unique();
            $table->string('nama_sekolah')->nullable();
            $table->text('alamat_sekolah')->nullable();
            $table->text('status_siswa')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('jk')->nullable();
            $table->text('tempat_lahir')->nullable();
            $table->timestamp('tgl_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('keb_khusus')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->string('moda_transport')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->timestamp('tgl_lahir_ayah')->nullable();
            $table->string('pend_ayah')->nullable();
            $table->string('pekerja_ayah')->nullable();
            $table->string('gaji_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->timestamp('tgl_lahir_ibu')->nullable();
            $table->string('pend_ibu')->nullable();
            $table->string('pekerja_ibu')->nullable();
            $table->string('gaji_ibu')->nullable();
            $table->string('tbadan')->nullable();
            $table->string('bbadan')->nullable();
            $table->string('zonasi')->nullable();
            $table->string('waktu_tempuh')->nullable();
            $table->string('jml_saudara')->nullable();
            $table->text('profile')->nullable();
            $table->text('kk')->nullable();
            $table->text('akte')->nullable();
            $table->text('ijazah_tk')->nullable();
            $table->text('bukti_bayar')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
