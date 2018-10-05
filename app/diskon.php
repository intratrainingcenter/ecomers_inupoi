<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diskon extends Model
{
    protected $table 		=	'diskons';
    protected $primarykey	=	'id';
    protected $fillable		=	['id','kode_diskon','nominal'];
}
