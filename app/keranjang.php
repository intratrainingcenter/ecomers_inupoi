<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table 		= 'keranjangs';
    protected $primarykey 	= 'id';
    protected $fillable 	= ['id','kode_produk','nama_produk','ukuran','jumlah','harga'];
}
