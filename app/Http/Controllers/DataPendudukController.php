<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use App\Services\Form\FormBuilder;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = new  DataPenduduk();
        //dd($penduduk->paginate(10)->toArray());
        $formBuilder = new FormBuilder($penduduk);
        $penduduks = $penduduk->paginate(10);
        $table = $formBuilder->table($penduduks, 0, 'table-stipped', '', 'penduduk.edit', 'penduduk.destroy');

        return view('pages.penduduk.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = new DataPenduduk();
        $formBuilder = new FormBuilder($penduduk);
        $form = $formBuilder->formCreate(route('penduduk.store'));
        //dd($form);
        return view('pages.penduduk.create', compact('form'));
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
            'nik' => 'required|integer',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'status_perkawinan' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        DataPenduduk::create($request->all());

        return redirect()->route('penduduk.index')->withSuccess('Tambah Data Penduduk Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $dataPenduduk = DataPenduduk::find($nik);
        return response()->json($dataPenduduk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $dataPenduduk = DataPenduduk::find($nik);
        //dd($dataPenduduk->toArray());
        $penduduk = new DataPenduduk();
        $formBuilder = new FormBuilder($penduduk);
        $form = $formBuilder->formUpdate(route('penduduk.update', $dataPenduduk->nik), 'PUT', $dataPenduduk->toArray());
        //dd($form);
        return view('pages.penduduk.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $dataPenduduk = DataPenduduk::find($nik);
        //dd($dataPenduduk);
        $this->validate($request, [
            'nik' => 'required|integer',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat' => 'required|string',
            'status_perkawinan' => 'required|string',
        ]);

        $dataPenduduk->update($request->all());

        return redirect()->route('penduduk.index')->withSuccess('Update Data Penduduk Berhasil');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $dataPenduduk = DataPenduduk::find($nik);
        $dataPenduduk->delete();

        return redirect()->route('penduduk.index')->withSuccess('Hapus Data penduduk Berhasil');;
    }
}
