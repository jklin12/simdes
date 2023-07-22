<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJenisSurat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jenis_surat';
    public $timestamps = false;
    protected $fillable = ['nama_jenis', 'kode_surat', 'keterangan_surat'];
}
