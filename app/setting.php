<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama','alamat','contact','logo','min_stock'];
}
