<?php

namespace App\Http\Controllers;

use App\Models\RefKolomSurat;
use App\Services\Form\FormBuilder;
use Illuminate\Http\Request;

class RefKolomSuratController extends Controller
{
    var $key = 'ref_kolom_surat';
    var $title = 'Kolom Surat';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $key = $this->key;
        $penduduk = new  RefKolomSurat();
        $penduduks = $penduduk->paginate(10);

        //dd($penduduk->paginate(10)->toArray());
        $formBuilder = new FormBuilder($penduduk);

        $table = $formBuilder->table($penduduks, 0, 'table-stipped', '', 'ref_kolom_surat.edit', 'ref_kolom_surat.destroy');
        $form = $formBuilder->formCreate(route('ref_kolom_surat.store'), '', 1);

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
            'id_jenis_surat' => 'required|integer',
            'nama_kolom' => 'required|string',
            'judul_kolom' => 'required|string',
        ]);

        RefKolomSurat::create($request->all());

        return redirect()->route('ref_kolom_surat.index')->withSuccess('Tambah Jenis Surat Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function show($refJenisSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function edit($refJenisSurat)
    {
        $dataPenduduk = RefKolomSurat::find($refJenisSurat);
        //dd($dataPenduduk->toArray());
        $penduduk = new RefKolomSurat();
        $formBuilder = new FormBuilder($penduduk);
        $form = $formBuilder->formUpdate(route('ref_kolom_surat.update', $dataPenduduk->id_kolom_surat), 'PUT', $dataPenduduk->toArray());
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
    public function update(Request $request,  $idKolomSurat)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_jenis_surat' => 'required|integer',
            'nama_kolom' => 'required|string',
            'judul_kolom' => 'required|string',
        ]);

        $refJenisSurat = RefKolomSurat::find($idKolomSurat);
        $refJenisSurat->update($request->all());

        return redirect()->route('ref_kolom_surat.index')->withSuccess('Update Jenis Surat Berhasil');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefJenisSurat  $refJenisSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy($idJenisSurat)
    {
        $dataPenduduk = RefKolomSurat::find($idJenisSurat);
        $dataPenduduk->delete();

        return redirect()->route('ref_kolom_surat.index')->withSuccess('Hapus Jenis Surat Berhasil');;
    }
}
