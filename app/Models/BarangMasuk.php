<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'BarangMasuk';
    protected $primaryKey = 'BarangMasukId';
    protected $fillable = ['NoBarang','NamaBarang','Jumlah','created_by','updated_by','pemilik'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function BarangKeluar(){
        return $this->hasMany('App\Models\BarangKeluar','BarangMasukId');
    }
    public function BarangReturn(){
        return $this->hasMany('App\Models\BarangReturn','BarangMasukId');
    }
}
