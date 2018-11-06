<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table 		=	'transaksis';
    protected $primarykey	=	'id';
    protected $fillable		=	['id','kode_transaksi','kode_user','kode_barang','biaya','kode_diskon','potongan','total_biaya'];
}
