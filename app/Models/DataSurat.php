<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DataSurat extends Model
{
    use HasFactory, CreatedUpdatedBy;
    protected $primaryKey = 'id_surat';
    protected $fillable = ['id_jenis_surat', 'nomor_surat', 'tanggal_terbit'];

    public function jenisSurat(): HasOne
    {
        return $this->hasOne(RefJenisSurat::class, 'id_jenis_surat', 'id_jenis_surat');
    }
    public function isiSurat(): HasMany
    {
        return $this->hasMany(DataIsiSurat::class, 'id_surat', 'id_surat');
    }

    public function getTanggalTerbitAttribute($date)
    {
        return Carbon::parse($date)->isoFormat('D MMMM Y');
    }

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
            'tanggal_terbit' => [
                'table' => 1,
                'hidecolom' => 0,
                'label' => 'Tanggal Terbit',
                'form' => 1,
                'form_label' => 'Tanggal Terbit',
                'form_type' => 'text',
                'form_required' => 1,
                'filter' => 1,
                'filter_table' => '',
                'filter_label' => 'Tanggal Terbit',
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
