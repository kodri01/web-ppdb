<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;
    protected $table = 'pembayaran';
    protected $fillable = [
        'id_siswa',
        'tgl_tf',
        'rek_bank',
        'nominal',
        'bukti_tf',

    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
}
