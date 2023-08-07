<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RefJenisSurat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jenis_surat';
    public $timestamps = false;
    protected $fillable = ['nama_jenis', 'kode_surat', 'nomor_surat','keterangan_surat'];
    
    public function kolomSurat(): HasMany
    {
        return $this->hasMany(RefKolomSurat::class,'id_jenis_surat','id_jenis_surat');
    }

    public function getFieldAttribute()
    {
        return [
            'nama_jenis' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Jenis Surat',
                'form' => 1,
                'form_label' => 'Jenis Surat',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Jenis Surat',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'kode_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Kode Surat',
                'form' => 1,
                'form_label' => 'Kode Surat',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Kode Surat',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'nomor_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Nomor Surat',
                'form' => 1,
                'form_label' => 'Nomor Surat',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Nomor Surat',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'keterangan_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Keterangan',
                'form' => 1,
                'form_label' => 'Keterangan',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Keterangan',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
        ];
    }
}
