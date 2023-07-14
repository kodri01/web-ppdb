<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Siswa extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'siswa';
    protected $fillable = [
        'no_register',
        'nama_sekolah',
        'alamat_sekolah',
        'nama_lengkap',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'keb_khusus',
        'no_telp',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'tempat_tinggal',
        'moda_transport',
        'kewarganegaraan',
        'nama_ayah',
        'tgl_lahir_ayah',
        'pend_ayah',
        'pekerja_ayah',
        'gaji_ayah',
        'nama_ibu',
        'tgl_lahir_ibu',
        'pend_ibu',
        'pekerja_ibu',
        'gaji_ibu',
        'tbadan',
        'bbadan',
        'zonasi',
        'waktu_tempuh',
        'jml_saudara',
        'status'
    ];
}
