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
        'status_siswa',
        'asal_siswa',
        'nama_tk',
        'alamat_tk',
        'tgl_sttb',
        'no_sttb',
        'sekolah_asal',
        'alamat_sekolah',
        'dari_kelas',
        'tgl_terima',
        'di_kelas',
        'nama_lengkap',
        'nama_panggilan',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'kewarganegaraan',
        'saudara_kandung',
        'bahasa',
        'berat_badan',
        'tinggi_badan',
        'gol_darah',
        'penyakit',
        'alamat',
        'no_telp',
        'tempat_tinggal',
        'zonasi',
        'nama_ayah',
        'pend_ayah',
        'pekerja_ayah',
        'nama_ibu',
        'pend_ibu',
        'pekerja_ibu',
        'wali_murid',
        'hub_kel',
        'pend_wali',
        'pekerjaan_wali',
        'profile',
        'kk',
        'akte',
        'ijazah_tk',
        'bukti_bayar',
        'status',
        'alasan',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_siswa', 'id');
    }
}
