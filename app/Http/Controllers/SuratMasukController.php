<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuratMasukRequest;
use App\Http\Requests\UpdateSuratMasukRequest;
use App\Models\SuratMasuk;
use App\Services\Form\FormBuilder;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    var $key = 'surat_masuk';
    var $title = 'Surat Masuk';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $key = $this->key;
        //$jenis = $request->jenis;
        $surat = new  SuratMasuk();
        $surats = $surat->paginate(10);

        //dd($surats);
        $formBuilder = new FormBuilder($surat);

        $table = $formBuilder->table($surats, 0, 'table-stipped', 'surat_masuk.show', 'surat_masuk.edit', 'surat_masuk.destroy');

        return view('pages.surat_masuk.index', compact('key', 'table', 'title', 'surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $suratMasuk = new SuratMasuk();
        return view('pages.surat_masuk.create', compact('title', 'suratMasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratMasukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomor_surat' => 'required',
            'file_surat' => 'required',
        ]);

        $suratMasuk = new SuratMasuk();
        $suratMasuk->nomor_surat = $request->nomor_surat;
        $suratMasuk->jenis_surat = $request->jenis_surat;
        $suratMasuk->tgl_surat = $request->tgl_surat;
        $suratMasuk->dari_surat = $request->dari_surat;
        $suratMasuk->kepada_surat = $request->kepada_surat;
        $suratMasuk->judul_surat = $request->judul_surat;
        //dd($suratMasuk,$request->all());
        if ($request->hasFile('file_surat')) {
            $fileName = time() . '_' . $request->file('file_surat')->getClientOriginalName();
            $filePath = $request->file('file_surat')->storeAs('uploads', $fileName, 'public');
            $suratMasuk->file_surat = '/storage/' . $filePath;
        }
        $suratMasuk->save();
        return redirect()->route('surat_masuk.index',)->withSuccess('Tambah Surat Masuk Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratMasuk $suratMasuk)
    {
        $title = $this->title;
        //$suratMasuk = new SuratMasuk();
        return view('pages.surat_masuk.edit', compact('title', 'suratMasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratMasukRequest  $request
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $this->validate($request, [
            'nomor_surat' => 'required',
            //'file_surat' => 'required',
        ]);
        $suratMasuk->nomor_surat = $request->nomor_surat;
        $suratMasuk->jenis_surat = $request->jenis_surat;
        $suratMasuk->tgl_surat = $request->tgl_surat;
        $suratMasuk->dari_surat = $request->dari_surat;
        $suratMasuk->kepada_surat = $request->kepada_surat;
        $suratMasuk->judul_surat = $request->judul_surat;
        if ($request->hasFile('file_surat')) {
            $fileName = time() . '_' . $request->file('file_surat')->getClientOriginalName();
            $filePath = $request->file('file_surat')->storeAs('uploads', $fileName, 'public');
            $suratMasuk->file_surat = '/storage/' . $filePath;
        }
        $suratMasuk->save();
        return redirect()->route('surat_masuk.index',)->withSuccess('Update Surat Masuk Berhasil');
    }

    public function riview(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);


        $suratMasuk = SuratMasuk::find($id);
        
        $suratMasuk->status = $request->status;
        $suratMasuk->save();
        return redirect()->route('surat_masuk.index',)->withSuccess('Update Surat Masuk Berhasil');
    }
    public function tanggapan(Request $request, $id)
    {
        $request->validate([
            'file_tanggapan' => 'required|mimes:pdf,docx,xlsx',
        ]);


        $suratMasuk = SuratMasuk::find($id);
        if ($request->hasFile('file_tanggapan')) {
            $fileName = time() . '_' . $request->file('file_tanggapan')->getClientOriginalName();
            $filePath = $request->file('file_tanggapan')->storeAs('uploads', $fileName, 'public');
            $suratMasuk->file_tanggapan = '/storage/' . $filePath;
        }
        $suratMasuk->status = 'Riview Tanggapan';
        $suratMasuk->save();
        return redirect()->route('surat_masuk.index',)->withSuccess('Update Surat Masuk Berhasil');
    }
    public function tanggapi(Request $request, $id)
    {
        $suratMasuk = SuratMasuk::find($id);
        $suratMasuk->jenis_surat = 'Umum';
        $suratMasuk->status = 'Perlu Ditanggapi';
        $suratMasuk->save();
        return redirect()->route('surat_masuk.index',)->withSuccess('Update Surat Masuk Berhasil');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();
        return redirect()->back()->withSuccess('Hapus Surat Masuk Berhasil');
    }
}
