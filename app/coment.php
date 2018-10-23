<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    protected $table 		=	'coments';
    protected $primarykey	=	'id';
    protected $fillable		=	['id','kode_user','kode_produk','deskripsi'];
}
