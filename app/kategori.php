<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table 		= 'kategoris';
    protected $primarykey 	= 'id';
    protected $fillable 	= ['id','kode_kategori','nama_kategori'];
}
