<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangReturn extends Model
{
    protected $table = 'BarangReturn';
    protected $primaryKey = 'BarangReturnId';
    protected $fillable = ['NoBarang','NamaBarang','Jumlah','created_by','updated_by','BarangMasukId'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function BarangMasuk(){
        return $this->belongsTo('App\Models\BarangMasuk','BarangMasukId');
    }
}
