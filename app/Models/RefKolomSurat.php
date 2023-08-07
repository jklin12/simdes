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

    public function getFieldAttribute()
    {
        $jenisSurat = RefJenisSurat::get();
        $arrJenisSurat  = [];
        foreach ($jenisSurat as $key => $value) {
            $arrJenisSurat[$value->id_jenis_surat] = $value->nama_jenis;
        }

        return [
            'id_jenis_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Jenis Surat',
                'form' => 1,
                'form_label' => 'Jenis Surat',
                'form_type' => 'select',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Jenis Surat',
                'filter_type' => 'select',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => $arrJenisSurat,
                'kolom' => 1,
                'sort' => 1,
            ],
            'nama_kolom' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Nama Kolom',
                'form' => 1,
                'form_label' => 'Nama Kolom',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Nama Kolom',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'judul_kolom' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Judul Kolom',
                'form' => 1,
                'form_label' => 'Judul Kolom',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Judul Kolom',
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
