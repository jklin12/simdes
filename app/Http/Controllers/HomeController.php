<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use App\Models\DataSurat;
use App\Models\RefJenisSurat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $penduduks = DataPenduduk::count();
        $jenisSurats = RefJenisSurat::count();
        $suratTerbit = DataSurat::count();
        return view('pages.home.index',compact('penduduks','jenisSurats','suratTerbit'));
    }
}
