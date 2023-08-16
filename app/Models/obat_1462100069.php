<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat_1462100069 extends Model
{
    protected $table = 'obat_1462100069';
    protected $fillable = ['obat_id','nama_obat','deskripsi_obat','harga_obat'];
    public function transaksi_1462100069(){
        return $this->hasMany(transaksi_1462100069::class,'obat_id');
    }
}
