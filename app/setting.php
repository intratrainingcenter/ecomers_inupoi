<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'setting';
    protected $primaryKey = 'id';
    protected $fillable = ['id','alamat','contact','logo','min_stock'];
}
