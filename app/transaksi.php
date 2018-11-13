<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table 		=	'transaksis';
    protected $primarykey	=	'id';
    protected $fillable		=	['id','kode_transaksi','id_user','grandtotal','alamat_tujuan'];
}
