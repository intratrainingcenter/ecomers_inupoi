<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table 		= 'detail_transaksis';
    protected $primarykey 	= 'id';
    protected $fillable		= ['id','kode_transaksi','kode_barang','nama_barang','harga','qty','sub_total','nominal_diskon'];
}
