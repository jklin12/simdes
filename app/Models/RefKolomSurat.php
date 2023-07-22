<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKolomSurat extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_kolom_surat';
    public $timestamps = false;
    protected $fillable = ['id_jenis_surat', 'nama_kolom', 'judul_kolom'];
}
