<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('BarangMasuk')->get();
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
