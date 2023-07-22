<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSurat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_surat';
    protected $fillable = ['id_jenis_surat', 'nomor_surat', 'tanggal_terbit'];

}
