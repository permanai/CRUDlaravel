<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_1462100069 extends Model

{
    use hasFactory;
    protected $table = 'transaksi_1462100069';
    protected $fillable = ['nama_pelanggan','no_telp_pelanggan','obat_id','nama_obat','harga_obat','jumlah_beli','total_harga'];
    public function obat_1462100069(){
        return $this->belongsTo(obat_1462100069::class,'obat_id');
    }
}
