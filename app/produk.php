<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = ['id','kode_kategori','kode_produk','kode_diskon','nama_produk','harga',
    'ukuran','stok','rating','favorite','gambar','gambar_belakang','deskripsi_produk'];

    public function detail_transaksi()
    {
    	return $this->hasMany('App\DetailTransaksi','kode_produk','kode_produk');
    }
}
