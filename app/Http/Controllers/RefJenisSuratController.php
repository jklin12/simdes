<?php

namespace App\Http\Controllers;

use App\Models\RefJenisSurat;
use App\Services\Form\FormBuilder;
use Illuminate\Http\Request;

class RefJenisSuratController extends Controller
{
    var $key = 'ref_jenis_surat';
    var $title = 'Jenis Surat';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $key = $this->key;
        $penduduk = new  RefJenisSurat();
        $penduduks = $penduduk->paginate(10);

        //dd($penduduk->paginate(10)->toArray());
        $formBuilder = new FormBuilder($penduduk);

        $table = $formBuilder->table($penduduks, 0, 'table-stipped', '', 'ref_jenis_surat.edit', 'ref_jenis_surat.destroy');
        $form = $formBuilder->formCreate(route('ref_jenis_surat.store'), '', 1);

        return view('pages.ref.index', compact('key', 'table', 'title', 'form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_jenis' => 'required|string',
            'kode_surat' => 'required|string',
            'keterangan_surat' => 'required|string',
        ]);

        RefJenisSurat::create($request->all());

        return redirect()->route('ref_jenis_surat.index')->withSuccess('Tambah Jenis Surat Berhasil');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function show(RefJenisSurat $refJenisSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function edit( $idJenisSurat)
    {
        $dataPenduduk = RefJenisSurat::find($idJenisSurat);
        //dd($dataPenduduk->toArray());
        $penduduk = new RefJenisSurat();
        $formBuilder = new FormBuilder($penduduk);
        $form = $formBuilder->formUpdate(route('ref_jenis_surat.update', $dataPenduduk->id_jenis_surat), 'PUT', $dataPenduduk->toArray());
        //dd($form);
        return view('pages.penduduk.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefJenisSurat $refJenisSurat)
    {
        $this->validate($request, [
            'nama_jenis' => 'required|string',
            'kode_surat' => 'required|string',
            'keterangan_surat' => 'required|string',
        ]);

        $refJenisSurat->update($request->all());

        return redirect()->route('ref_jenis_surat.index')->withSuccess('Update Jenis Surat Berhasil');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy($idJenisSurat)
    {
        $dataPenduduk = RefJenisSurat::find($idJenisSurat);
        $dataPenduduk->delete();

        return redirect()->route('ref_jenis_surat.index')->withSuccess('Hapus Jenis Surat Berhasil');;
    }
}
