<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DataIsiSurat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_isi_surat';
    public $timestamps = false;
    protected $fillable = ['id_surat', 'id_kolom_surat', 'isi_kolom'];

    public function refKolom(): HasOne
    {
        return $this->hasOne(RefKolomSurat::class, 'id_kolom_surat', 'id_kolom_surat');
    }
}
