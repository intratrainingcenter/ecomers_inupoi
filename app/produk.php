<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = ['id','kode_kategori','kode_produk','kode_diskon','nama_produk','harga',
    'stok','rating','gambar','deskripsi_produk'];
}
