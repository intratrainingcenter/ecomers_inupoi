<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanBarang extends Model
{
    protected $table 		= 'laporan_barangs';
    protected $primarykey	= 'id';
    protected $fillable		= ['id','kode_transaksi','kode_barang','barang_keluar','stok_akhir','tgl_transaksi'];
}
