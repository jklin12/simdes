<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_surat';
    protected $fillable = ['nomor_surat', 'jenis_surat','dari_surat', 'kepada_surat','judul_surat','file_surat','tgl_surat','file_tanggapan','status'];

    public function getFieldAttribute()
    {
        $jenisSurat = [
            "Dinas" => "Dinas",
            "Umum" => "Umum",
        ];
        return [
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
                'filter_label' => 'Nama Kolom',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'jenis_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Kategori Surat',
                'form' => 1,
                'form_label' => 'Kategori Surat',
                'form_type' => 'select',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Kategori Surat',
                'filter_type' => 'select',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => $jenisSurat,
                'kolom' => 1,
                'sort' => 1,
            ],
            'tgl_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Tanggal',
                'form' => 1,
                'form_label' => 'Tanggal',
                'form_type' => 'date',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Tanggal',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'dari_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Asal Surat',
                'form' => 1,
                'form_label' => 'Asal Surat',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Asal Kolom',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'kepada_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Tujuan Surat',
                'form' => 1,
                'form_label' => 'Tujuan Surat',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Tujuan Kolom',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'judul_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Judul Surat',
                'form' => 1,
                'form_label' => 'Judul Surat',
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
            'status' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Status',
                'form' => 0,
                'form_label' => 'Status',
                'form_type' => 'text',
                'form_required' => 0,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Status',
                'filter_type' => 'text',
                'filter_label_class' => '',
                'filter_form_class' => '',
                'filter_value' => '',
                'keyvaldata' => '',
                'kolom' => 1,
                'sort' => 1,
            ],
            'file_surat' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'File Surat',
                'form' => 1,
                'form_label' => 'File Surat',
                'form_type' => 'file',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'File Kolom',
                'filter_type' => 'file',
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
