<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BarangMasukController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('BarangMasuk')->get();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = DB::table('BarangMasuk')->insert([
            "NoBarang"  =>$request->NoBarang,
            "NamaBarang"=>$request->NamaBarang,
            "Jumlah"    =>$request->Jumlah
        ]);
        return response()->json($data);
    }
}
