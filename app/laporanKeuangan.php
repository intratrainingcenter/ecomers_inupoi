<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanKeuangan extends Model
{
    protected $table 		= 'laporan_keuangans';
    protected $primarykey	= 'id';
    protected $fillable		= ['id','kode_transaksi','tgl_transaksi','total_biaya'];
}
