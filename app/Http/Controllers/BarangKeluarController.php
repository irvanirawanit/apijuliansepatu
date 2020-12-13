<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\BarangReturn;
use DB;

class BarangKeluarController extends Controller
{
    public function index(Request $request)
    {
        // $data = DB::table('BarangMasuk')->get();
        $data = BarangKeluar::with(['BarangMasuk'])->get();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = BarangKeluar::create([
            "BarangMasukId"     => $request->BarangMasukId,
            "toko"              => $request->toko,
            "Jumlah"            => $request->Jumlah
        ]);
        $result = BarangKeluar::where('BarangKeluarId',$data->BarangKeluarId)->with(['BarangMasuk'])->first();
        return response()->json($result);
    }

    public function show(Request $request,$id)
    {
        $data = DB::table('BarangMasuk')->where('BarangMasukId','=',$id)->first();
        return response()->json($data);
    }
}
