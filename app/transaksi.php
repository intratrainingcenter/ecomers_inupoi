<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table 		= 'transaksis';
    protected $primarykey 	= 'id';
    protected $fillable 	= ['id','kode_produk','nama_produk','ukuran','jumlah','harga','user'];
}
