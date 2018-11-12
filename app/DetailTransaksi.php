<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table 		= 'detail_transaksis';
    protected $primarykey 	= 'id';
    protected $fillable		= ['id','kode_transaksi','kode_produk','nama_produk','harga','qty','sub_total','nominal_diskon'];
}
