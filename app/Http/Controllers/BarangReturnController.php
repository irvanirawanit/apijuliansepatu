<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\BarangReturn;
use DB;

class BarangReturnController extends Controller
{
    public function index(Request $request)
    {
        // $data = DB::table('BarangMasuk')->get();
        $data = BarangMasuk::with(['BarangKeluar','BarangReturn'])->get();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        // $data = DB::table('BarangMasuk')->insert([
        //     "NoBarang"  =>$request->NoBarang,
        //     "NamaBarang"=>$request->NamaBarang,
        //     "Jumlah"    =>$request->Jumlah
        // ]);
        // no barang = tgl sku urutan
        $urutan = BarangMasuk::count();
        $NoBarang = date('Ymd').'sku'.($urutan+1);
        $data = BarangMasuk::create([
            "NoBarang"  =>$NoBarang,
            "NamaBarang"=>$request->NamaBarang,
            "Jumlah"    =>$request->Jumlah
        ]);
        return response()->json($data);
    }

    public function show(Request $request,$id)
    {
        $data = DB::table('BarangMasuk')->where('BarangMasukId','=',$id)->first();
        return response()->json($data);
    }
}
