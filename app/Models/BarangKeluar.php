<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'BarangKeluar';
    protected $primaryKey = 'BarangKeluarId';
    protected $fillable = ['NoBarang','NamaBarang','Jumlah','created_by','updated_by','BarangMasukId','toko'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function BarangMasuk(){
        return $this->belongsTo('App\Models\BarangMasuk','BarangMasukId');
    }
}
