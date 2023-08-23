<?php

namespace App\Http\Controllers;

use App\Models\DataIsiSurat;
use App\Models\DataPenduduk;
use App\Models\DataSurat;
use App\Models\RefJenisSurat;
use App\Models\RefKolomSurat;
use App\Services\Form\FormBuilder;
use Illuminate\Http\Request;
use PDF;

class DataSuratController extends Controller
{
    var $key = 'data_surat';
    var $title = 'Data Surat';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $this->title;
        $key = $this->key;
        $jenis = $request->jenis;
        $surat = new  DataSurat();
        $surats = $surat->where('id_jenis_surat', $jenis)->paginate(10);

        //dd($surats);
        $formBuilder = new FormBuilder($surat);

        $table = $formBuilder->table($surats, 1, 'table-stipped', 'data_surat.show', 'data_surat.edit', 'data_surat.destroy');


        return view('pages.surat.index', compact('key', 'table', 'title', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jenis = $request->jenis;
        $jenisSurat = RefJenisSurat::find($jenis);
        $kolomSurat = RefKolomSurat::where('id_jenis_surat', $jenis)->get();
        $title = $this->title;
        $dataPenduduk = [];
        if (1 == 1) {
            $dataPenduduk = DataPenduduk::get();
        }
        //dd($dataPenduduk);
        return view('pages.surat.create', compact('title', 'jenisSurat', 'kolomSurat', 'dataPenduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_jenis_surat' => 'integer|string',
        ]);

        $jenisSurat = RefJenisSurat::find($request->id_jenis_surat);
        //dd($request->all());
        $nomorBaru = ($jenisSurat->nomor_surat + 1);
        $nomorSurat = sprintf('%02d', $nomorBaru);

        $jenisSurat->nomor_surat = $nomorBaru;
        $jenisSurat->save();
        //dd($nomorSurat);


        $postSurat['id_jenis_surat'] = $request->id_jenis_surat;
        //$postSurat['nomor_surat'] = $jenisSurat->kode_surat . '/' . $nomorSurat  . '/' . date('Y');
        $postSurat['nomor_surat'] = $request->nomor_surat;
        $postSurat['tanggal_terbit'] = date('Y-m-d');
        //dd($postSurat);
        $storeSurat = DataSurat::create($postSurat);
        $postKolom = [];
        foreach ($request->data_kolom as $key => $value) {
            $postKolom[$key]['id_surat'] = $storeSurat->id_surat;
            $postKolom[$key]['id_kolom_surat'] = $key;
            $postKolom[$key]['isi_kolom'] = $value;
        }
        DataIsiSurat::insert($postKolom);

        return redirect()->route('data_surat.index', 'jenis=' . $request->id_jenis_surat)->withSuccess('Tambah Data Surat Berhasil');
        //dd($postSurat,$postKolom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSurat  $dataSurat
     * @return \Illuminate\Http\Response
     */
    public function show($idSurat)
    {
        $dataSurat = DataSurat::find($idSurat);
        //dd($dataSurat->jenisSurat);

        if ($dataSurat->id_jenis_surat == 2) {
            $view = 'pages.surat.pdf_skbm';
        } elseif ($dataSurat->id_jenis_surat == 4) {
            $view = 'pages.surat.pdf_sktm';
        } elseif ($dataSurat->id_jenis_surat == 5) {
            $view = 'pages.surat.pdf_usaha';
        } elseif ($dataSurat->id_jenis_surat == 6) {
            $view = 'pages.surat.pdf_beda_identitas';
        } elseif ($dataSurat->id_jenis_surat == 7) {
            $view = 'pages.surat.pdf_kematian';
        }
        //dd($dataSurat);
        $pdf = PDF::loadview($view, ['dataSurat' => $dataSurat])
            ->setOptions([
                'tempDir' => public_path(),
                'chroot' => public_path(),
                'defaultFont' => 'sans-serif'
            ]);;
        return $pdf->download($dataSurat->jenisSurat->nama_jenis . '-' . $dataSurat->nomor_surat . '.pdf');


        //return view($view,compact('dataSurat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSurat  $dataSurat
     * @return \Illuminate\Http\Response
     */
    public function edit($idSurat, Request $request)
    {
        $dataSurat = DataSurat::find($idSurat);
        //dd($dataSurat->isiSurat);
        $jenis = $request->jenis;
        $jenisSurat = RefJenisSurat::find($jenis);
        $kolomSurat = RefKolomSurat::where('id_jenis_surat', $jenis)->get();
        $title = $this->title;
        $dataPenduduk = [];
        if (1 == 1) {
            $dataPenduduk = DataPenduduk::get();
        }
        //dd($dataSurat->nomor_surat);
        //dd($dataPenduduk);
        return view('pages.surat.edit', compact('title', 'jenisSurat', 'kolomSurat', 'dataPenduduk', 'dataSurat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSurat  $dataSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSurat)
    {

        $this->validate($request, [
            'id_jenis_surat' => 'integer|string',
        ]);

        //dd($request->all());
        $dataSurat = DataSurat::find($idSurat);
        $postSurat['id_jenis_surat'] = $request->id_jenis_surat;
        //$postSurat['nomor_surat'] = $jenisSurat->kode_surat . '/' . $nomorSurat  . '/' . date('Y');
        $postSurat['nomor_surat'] = $request->nomor_surat;
        $postSurat['tanggal_terbit'] = date('Y-m-d');
        //dd($postSurat);
        $storeSurat = $dataSurat->update($postSurat);
        $postKolom = [];
        $dataIsiSurat = new DataIsiSurat();
        foreach ($request->data_kolom as $key => $value) {
            $dataIsiSurat->where('id_surat', $dataSurat->id_surat)
                ->where('id_kolom_surat', $key)
                ->update(['isi_kolom' => $value]);
        }
        

        return redirect()->route('data_surat.index', 'jenis=' . $request->id_jenis_surat)->withSuccess('Update Data Surat Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSurat  $dataSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSurat $dataSurat)
    {
        $dataSurat->delete();
        return redirect()->back()->withSuccess('Hapus Data Surat Berhasil');
    }
}
